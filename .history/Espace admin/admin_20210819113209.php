<?php
session_start();
 $serveur = "localhost";
 $dbname = "grh";
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
              header("location:index.html");
            break;
            case 'user':
             echo " erreur";
          }
    }
  }
?>



<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="admin.css">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    </head>
    <body>    
        
        <nav class="navbar navbar-expand-lg  fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand " href="#page-top">
                    <img src="../images/Logo-S2T png.png" width="160px" height="110px">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                        
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Accueil</a></li>
                      <div class="dropdown">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Le technopark</a></li>
        <br>
        <br>
                        <div class="dropdown-content">
                          <a href="./presentation.html">Présentation</a>
                          <a href="./actualites.html">Actualités</a>
                          <a href="#">Link 3</a>
                        </div>
                      </div> 
                      <div class="dropdown">
                         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                         <br>
        <br>
                        <div class="dropdown-content">
                          <a href="#">infrastructure & Logistique</a>
                          <a href="#">Processus d'accompagnement</a>
                          <a href="#"> Espace de Conférences</a>
                        </div>
                        </div>
                        <div class="dropdown">
                         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">S'implanter</a></li>
                         <br>
                         <br>
                                         <div class="dropdown-content">
                                           <a href="#">Pépinière d'entreprises</a>
                                           <a href="#"> Cyberparcs régionaux</a>
                                           <a href="#"> Espace entreprises</a>
                                         </div>
                                         </div>
                                         <div class="dropdown">
        
                         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Annuaires</a></li>
                         <br>
                         <br>
                                         <div class="dropdown-content">
                                           <a href="#">Elgazala Technopark</a>
                                           <a href="#"> Manouba Technopark</a>
                                           <a href="#"> Cyberpark</a>
                                         </div>
                                         </div>
                         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Nous Contacter</a></li>
                         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Tech Transfer</a></li>                              
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="screen">
                <div class="screen__content">
                    <form class="login">
                        <div class="login__field">
                            <i class="login__icon fas fa-user"></i>
                            <input type="text" class="login__input" placeholder="User name / Email">
                        </div>
                        <div class="login__field">
                            <i class="login__icon fas fa-lock"></i>
                            <input type="password" class="login__input" placeholder="Password">
                        </div>
                        <button class="button login__submit">
                            <span class="button__text">Log In Now</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>				
                    </form>
                    <div class="social-login">
                        <h3>log in via</h3>
                        <div class="social-icons">
                            <a href="#" class="social-login__icon fab fa-instagram"></a>
                            <a href="#" class="social-login__icon fab fa-facebook"></a>
                            <a href="#" class="social-login__icon fab fa-twitter"></a>
                        </div>
                    </div>
                </div>
                <div class="screen__background">
                    <span class="screen__background__shape screen__background__shape4"></span>
                    <span class="screen__background__shape screen__background__shape3"></span>		
                    <span class="screen__background__shape screen__background__shape2"></span>
                    <span class="screen__background__shape screen__background__shape1"></span>
                </div>		
            </div>
        </div>




    </body>
</html>