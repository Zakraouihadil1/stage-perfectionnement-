<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset='utf-8'>
    </head>
    <body>
    <?php
session_start();
$serveur = "localhost";
    $dbname = "espace_admin_s2t";
    $user = "root";
    $pass = "";
    
        //On se connecte à la BDD
       $bdd=  new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    
        
    
if(isset($_GET['id']) AND !empty($_GET['id'])){
     $getserv=$_GET['id'];
     $recserv=$bdd->prepare('SELECT * FROM masterlogin WHERE id =? ');
     $recserv->execute(array($getserv));
     if($recserv->rowCount()>0){
         $deletserv=$bdd->prepare('DELETE FROM masterlogin WHERE id =?');
         $deletserv->execute(array($getserv));
         header('location:admin-home.php');
     }
    }
?>
    </body>
</html>