
<html>
    <head>
        <title></title>
       <link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>


    <nav class="navtop">
    	<div>
    		<h1>Events Info</h1>
            <a href="user-home.php"><i class="fas fa-home"></i>Home</a>
    	</div>
    </nav>
    <div class="content update">
	<h2>Update Event #</h2>
    <form  method="get">
        <label for="id">ID</label>
        <input type="text" name="id" placeholder="" value="<?php echo $_GET['id'] ?>" id="id">
        <label for="name">Url picture</label>
        <input type="file"  name="url" value="">
        <label for="name">Title</label>
        <input type="text" name="title" placeholder=""  value="<?php echo $services['title'] ?>">

        <label for="created">Description</label>
        <input type="text" name="description" placeholder=" "  value="<?php echo $_GET['description'] ?>">

        <input type="submit" value="Update" name="Update">
    </form>
   
</div>

</body>
    </html>


    <?php

 if (isset($_GET['Update']))
 {

    $serveur = "localhost";
    $dbname = "espace_admin_s2t";
    $user = "root";
    $pass = "";
    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $recupservices=$bdd->query('SELECT * FROM events');
    $services=$recupservices->fetch();
    
        $id = $_GET['id'];
        $url=$_GET["url"];
        $title=$_GET["title"];
        $description = $_GET['description'];
       
        echo "vous avez modifiez l'evenement";
       $query = $dbco->prepare("UPDATE events set url= :url , title= :title, description=:description WHERE id=:id");
	   $query->bindParam(':id',$id);
	   $query->bindParam(':url',$url);
       $query->bindParam(':title',$title);
       $query->bindParam(':description',$description);
       
   
        $query->execute(array(
			':id' => $id,
            ':url' => $url,
           ':title' => $title,
           ':description' => $description,
           
        )); 
        
}
 
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
   //  echo'no id'; 

 }

?>



