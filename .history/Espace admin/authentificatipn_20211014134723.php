<?php

 $serveur = "localhost";
 $dbname = "espace_admin_s2t";
 $user = "root";
 $pass = "";

     //On se connecte à la BDD
    $pdo=  new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
if(isset($_POST['submit'])){


    $username=$_POST['username'];
    $pass=$_POST['password'];
$query = $pdo->prepare("SELECT * FROM masterlogin WHERE username='$username' and password='$pass'");
if (isset($_POST['username']) && isset($_POST['password'])) {

  if(($_POST['username']='') && ($_POST['password']='') ){
echo 'Enter password '
  }

		// on la démarre :
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];

$query->execute();
 while($row=$query->fetch()){
          switch ($row['role']){
            case 'admin':
              header("location:admin-home.php");
            break;
            case 'user':
header('location:user-home.php');       
   }
    }
  }
  
  }
  

?>