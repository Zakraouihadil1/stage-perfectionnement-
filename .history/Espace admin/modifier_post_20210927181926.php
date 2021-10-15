<?php

if (isset($_POST['submit']))
 {

	
	try
		{
            $serveur = "localhost";
            $dbname = "espace_admin_s2t";
            $user = "root";
            $pass = "";
            $bdd = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);	
            /* On récupère les donnée de l'utilisateur séléctioné*/		
		
	$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/*cette requètte préparée sert à modifier les données j'ai rajouté "nouveau" et "nouvelle" au nom des variables mais vous n'êtes pas obligé des faire pareil, c'est juste pour mieux me repérer et comprendre ce que je fais.*/
	
	$req = $bdd->prepare('UPDATE masterlogin SET username = :nouveau_username, email = :nouveau_email, role = :nouveau_role, password = :nouveau_password WHERE id = :id ');
		
	$req->execute(array( 
			'nouveau_username' => $_POST['username'],
			'nouveau_email' => $_POST['useremail'],
			'nouveau_password' => $_POST['password'],
			'nouveau_role' => $_POST['role']
			));			
	    }
	catch(Exception $e)
		{
			die('Erreur:'.$e->getMessage());
		}
	$req->closeCursor();
	     
	echo'<p> votre article a bien été modifié</p>';
 
 

}
?>