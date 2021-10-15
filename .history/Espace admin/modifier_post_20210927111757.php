<?php

 if (isset($_POST['submit']))
 {

    $serveur = "localhost";
    $dbname = "espace_admin_s2t";
    $user = "root";
    $pass = "";
    $bdd = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $username=$_POST["username"];
        $email=$_POST["useremail"];
        $password = $_POST['password'];
		$role = $_POST['role'];

        echo "vous avez modifiez l'utilisateur";
        header('location:admin-home.php');
       $req = $bdd->prepare("UPDATE masterlogin set username= :username , email= :email, password=:password,role=:role WHERE id=:id");
	   $req->bindParam(':username',$username);
       $req->bindParam(':email',$email);
       $req->bindParam(':password',$password);
       $req->bindParam('role',$role);
       
   
        $req->execute(array(
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