<?php

 if (isset($_POST['submit']))
 {

    $serveur = "localhost";
    $dbname = "espace_admin_s2t";
    $user = "root";
    $pass = "";
    $$bdd = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $username=$_post["username"];
        $email=$_post["useremail"];
        $password = $_post['password'];
		$role = $_post['role'];

        echo "vous avez modifiez l'utilisateur";
       $req = $bdd->prepare("UPDATE masterlogin set username= :username , email= :email, password=:password,role=:role WHERE id=:id");
	   $req->bindParam(':id',$id);
	   $req->bindParam(':username',$username);
       $req->bindParam(':email',$email);
       $req->bindParam(':password',$password);
       $req->bindParam('role',$role);
       
   
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