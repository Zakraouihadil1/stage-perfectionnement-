


<?php
// Connexion à la base de données
try
{


	$serveur = "localhost";
    $dbname = "espace_admin_s2t";
    $user = "root";
    $pass = "";
    $bdd = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);	
    /* On récupère les donnée de l'utilisateur séléctioné*/
    $req = $bdd->prepare('SELECT username, email, password, role FROM masterlogin WHERE id =:id ');
	
	$id = $_GET['id'];
    $req->execute(array( ':id' => $id));
		
	while ($infos = $req->fetch())
    {
    ?>

<!--Formulaire avec les champs préremplis-->

<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	
	<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>

<body>
	

	
   	<div class="container" style="margin-top:120px">
	   <div class="card">
			<div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Add User</strong> <a href="admin-home.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Users</a></div>
			<div class="card-body">
				
				<div class="col-sm-6">
					<h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
					<form action="" method="post" >
					<div class="form-group">
							<label>Id<span class="text-danger">*</span></label>
							<input type="text"  name="id"class="form-control" placeholder="Id" value="<?php echo $_GET['id'];?>" />
						</div>

						<div class="form-group">
							<label>User Name <span class="text-danger">*</span></label>
							<input type="text" name="username" id="username" class="form-control" value="<?php echo $infos['username'];?>" placeholder="Enter user name" required>
						</div>
						<div class="form-group">
							<label>User Email <span class="text-danger">*</span></label>
							<input type="email" name="useremail" id="useremail" class="form-control" value="<?php echo $infos['email'];?>" placeholder="Enter user email" required>
						</div>
						<div class="form-group">
							<label>Password <span class="text-danger">*</span></label>
							<input type="text" name="password" id="password"  class="form-control" value="<?php echo $infos['password'];?>" placeholder="Enter password" required>
						</div>
						<div class="form-group">
							<label>Role <span class="text-danger">*</span></label>
							<input type="text" name="role" id="role"  class="form-control" value="<?php echo $infos['role'];?>" placeholder="Enter role" required>
						</div>
						
						<div class="form-group">
							<input type="hidden" name="editId" id="editId" value="">
							<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-edit"></i> Update User</button>
						</div>
						<?php
    } 

// Fin de la boucle pour l'affichage des donnée dans la base de donnée
    $req->closeCursor();

}

catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>
					</form>
				</div>
			</div>
		</div>
	</div>
		
	</div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>
<?php

 if (isset($_POST['submit']))
 {

    $serveur = "localhost";
    $dbname = "espace_admin_s2t";
    $user = "root";
    $pass = "";
    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $username=$_POST["id"];
        $username=$_POST["username"];
        $email=$_POST["useremail"];
        $password = $_POST['password'];
		$role = $_POST['role'];

        echo "vous avez modifiez l'utilisateur";
		header('location:admin-home.php');
       $query = $dbco->prepare("UPDATE masterlogin set username= :username , email= :email, password=:password,role=:role WHERE id=:id");
	   $query->bindParam(':id',$id);
	   $query->bindParam(':username',$username);
       $query->bindParam(':email',$email);
       $query->bindParam(':password',$password);
       $query->bindParam('role',$role);
       
   
        $query->execute(array(
			':id' => $id,
            ':username' => $username,
           ':email' => $email,
           ':password' => $password,
           ':role' => $role,
           
        )); 
        
}
 
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
   //  echo'no id'; 

 }

?>

