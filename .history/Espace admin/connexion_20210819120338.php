<?php
session_start();
 $serveur = "localhost";
 $dbname = "espace_admin_s2t";
 $user = "root";
 $pass = "";
     //On se connecte à la BDD
    $pdo=  new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $pass=$_POST['password'];
$query = $pdo->prepare("SELECT * FROM admin WHERE username='$username' and password='$pass'");
$query->execute();
 while($row=$query->fetch()){
          switch ($row['role']){
            case 'admin':
              header("location:blabla.html");
            break;
            case 'user':
             echo " erreur";
          }
    }
  }
?>

