<?php
session_start ();

// On récupère nos variables de session
 if ((!isset($_SESSION['username'])) || !isset($_SESSION['password']))
{
	header("location: login.php");
}


include 'connection.php';

if(isset($_POST['Add'])){
    $target_dir = "images/";
    $target_file = $target_dir . basename($_POST["url"]);
    $title=$_POST['title'];
    $description=$_POST['description'];
    $descriptiondétaillées=$_POST['descriptiondétaillées'];

   $sql="INSERT INTO events (url,title,description,descriptiondétaillées) 
   VALUES ('$target_file','$title','$description','$descriptiondétaillées')";
   $result=mysqli_query($db,$sql);
   if($result){
       echo "data inserted succefully";
   } else{
     echo " error!!";
 
   }
 }

?>

<html>
    <head>
        <title></title>
       <link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
    <nav class="navtop">
    	<div>
    		<h1>Event Info</h1>
            <a href="user-home.php"><i class="fas fa-home"></i>Home</a>
    	</div>
    </nav>
    <div class="content update">
	<h2>Add Event</h2>
    <form  method="post">
    <label for="name">Url picture</label>
    <input type="file" class="form-control-file" name="url">
        <label for="name">Title</label>
        <input type="text" name="title" placeholder="enter title" >

        <label for="created">Description</label>
        <input type="text" name="description" placeholder=" enter description" >
       <label for="created"> Description détaillées</label>
        <input type="text" name="descriptiondétaillées" placeholder=" enter description" >


        <input type="submit" value="Add" name="Add">
    </form>
    
</div>


</body>
    </html>

