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

<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width , initial-scale=1">
<style>
 @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;	
	font-family: Raleway, sans-serif;
}


.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
img{
margin-top: 20px
  }
  
  li a {
    color: black ;
    font-family: "Lucida Console", "Courier New";
    font-size: 15px ;
    text-align: left ;
    float: right;
    margin-top: 10px;
    text-decoration: underline;
    font-weight: bolder;
	display: inline;
	margin-top:-40px;
  
      }
  
li a:hover {
    color: blue;
    
  }
 
#container{
    width:400px;
    margin:0 auto;
    margin-top:10%;
}
/* Bordered form */
form {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#container h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: #8db4ee;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: #8db4ee;
    border: 1px solid #8db4ee;
}


    </style>
  </head>

  <body>

 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg  fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand " href="#page-top">
            <img src="../images/Logo-S2T png.png" width="140px" height="110px">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
                
        <div class="collapse navbar-collapse" id="navbarResponsive" style="margin-top:40px;">
            <ul class="navbar-nav text-uppercase ml-auto">
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../index.php">Accueil</a></li>
              <div class="dropdown" >
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Le technopark</a></li>
                <div class="dropdown-content">
                  <a href="./presentation.html">Présentation</a>
                  <a href="./actualites.html">Actualités</a>
                  <a href="#">Link 3</a>
                </div>
              </div> 
              <div class="dropdown">
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                <div class="dropdown-content">
                  <a href="#">infrastructure & Logistique</a>
                  <a href="#">Processus d'accompagnement</a>
                  <a href="#"> Espace de Conférences</a>
                </div>
                </div>
                <div class="dropdown">
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">S'implanter</a></li>
                       <div class="dropdown-content">
                                   <a href="#">Pépinière d'entreprises</a>
                                   <a href="#"> Cyberparcs régionaux</a>
                                   <a href="#"> Espace entreprises</a>
                                 </div>
                                 </div>
                                 <div class="dropdown">

                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Annuaires</a></li>
                        <div class="dropdown-content">
                                   <a href="#">Elgazala Technopark</a>
                                   <a href="#"> Manouba Technopark</a>
                                   <a href="#"> Cyberpark</a>
                                 </div>
                                 </div>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/S2T/contact.html">Nous Contacter</a></li>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Tech Transfer</a></li>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#login.php"style="font-weight:bold;text-decoration:underline;">Espace admin</a></li>              


                 



                
               

            </ul>
        </div>
    </div>
</nav>

  <div id="container">
            <!-- zone de connexion -->
            
            <form action="" method="POST">
                <h1>Log In</h1>
                
                <label><b>Username</b></label>
                <input type="text" placeholder="Entrer username" name="username" >
                
                <label><b>password</b></label>
                <input type="password" placeholder="Entrer password" name="password" >

                <input type="submit" name="submit" value='LOGIN' >              
               
            </form>
   </div>
           
  </body>
  
</html>