

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
    $req = $bdd->prepare('SELECT url, title, description FROM events WHERE id =:id ');
	
	$id = $_GET['id'];
    $req->execute(array( ':id' => $id));
		
	while ($infos = $req->fetch())
    {
    ?>

<!--Formulaire avec les champs préremplis-->

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
        <input type="file"  name="url" value="<?php echo $infos['url'];?>">
        <label for="name">Title</label>
        <input type="text" name="title" placeholder=""  value="<?php echo $infos['title'];?>">

        <label for="created">Description</label>
        <input type="text" name="description" placeholder=" "  value="<?php echo $infos['description'];?>">

        <input type="submit" value="Update" name="Update">
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
       header('Refresh: 1; URL = user-home.php');

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

