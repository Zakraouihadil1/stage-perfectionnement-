<?php

 if (isset($_POST['submit']))
 {

    $serveur = "localhost";
    $dbname = "espace_admin_s2t";
    $user = "root";
    $pass = "";
    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $username=$_POST["username"];
        $email=$_POST["useremail"];
        $password = $_POST['password'];
		$role = $_POST['role'];

        echo "vous avez modifiez l'utilisateur";
       $query = $dbco->prepare("UPDATE masterlogin set username= :username , email= :email, password=:password,role=:role WHERE id=:id");
	   $query->bindParam(':id',$id);
	   $query->bindParam(':username',$username);
       $query->bindParam(':email',$email);
       $query->bindParam(':password',$password);
       $query->bindParam('role',$role);
       
   
        $query->execute(array(
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