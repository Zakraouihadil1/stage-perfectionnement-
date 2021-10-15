

<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
 if ((!isset($_SESSION['username'])) || !isset($_SESSION['password']))
{
	header("location: login.php");
}
else {
	

	// On teste pour voir si nos variables ont bien été enregistrées
	echo '<html>';
	echo '<head>';
	echo '<title>Page de notre section Admin</title>';
	echo '</head>';
    echo'<div class="cards">';
	echo '  <div class="container">';
	echo ' Bonjour et bienvenue  '.'<b style="color:red;">'.$_SESSION['username'].'</b> ';
	echo '<br />';
	echo '<br />';
	echo '<br />';
	// On affiche un lien pour fermer notre session
	echo '<a href="./logout.php" style="color:green;"><b>Déconnection</b></a>';
	echo'</div>';
	echo'</div>';


}
?>

<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	
	<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<style>
	.cards {
		margin-top:20px;
		margin-left:20px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 15%;
}

.cards:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
	</style>

</head>

<body>
	
<div class="container"   style="margin-top:40px" >
		<div class="card">
			<div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Browse User</strong> <a href="add-users.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Users</a></div>
			<div class="card-body">
			</div>
			</div>
		</div>
<!---- Afficher tous les services ---->
<?php
// Connection au serveur Mysql

$chaine = 'mysql:host=localhost; dbname=espace_admin_s2t';
$utilisateur = 'root';
$motDePasse = '';

try
{
    $bdd = new PDO( $chaine, $utilisateur, $motDePasse);
  //  $req=" SELECT * FROM membre ";
   // $cbdd
}
catch (Exception $e)
{
        die('Echec lors de la connexion : ' . $e->getMessage());
}


$recupservices=$bdd->query('SELECT * FROM masterlogin');
if($recupservices->rowCount() ==0){
  echo "<p>table vide</p>";
}
else{
  echo" <table id='customers' class='table table-striped table-bordered'>";
			echo"	<thead>";
			echo"<tr class='bg-primary text-white'>";


echo " <th>id</th> <th>username</th> <th> email</th> <th> password</th><th>role</th>><th colspan='2' class='text-center'>Action</th>  ";
echo"</tr>";
echo"</thead>";
echo"<tbody>";

while($services=$recupservices->fetch()){
    


     echo "<td>";
	 echo $services['id'];
	 echo "</td><td>";
        echo $services['username'];
        echo "</td><td>";
        echo $services['email'];
        echo "</td><td>";
        echo $services['password'];
        echo "</td><td>";
		echo $services['role'];
        echo "</td><td>";
		
     
		
        
        echo "<a  href='delete-users.php?id=".$services['id']."'  class='text-danger'><i class='fa fa-fw fa-trash'></i>Delete</a>";
        echo "</td><td>";
        echo "<a href='edit-users.php?id=".$services['id']."'><i class='fa fa-fw fa-edit'></i> Update</a>";

        echo "</td>";
echo"</tbody>";

}
}


?>




   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
	<script src="https://www.solodev.com/_/assets/phone/jquery.mobilePhoneNumber.js"></script>
	<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>
    
</body>
</html>
