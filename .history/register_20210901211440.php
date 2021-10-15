
<?php
include '../S2T/espace admin/connection.php';
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname']; 
    $lastname=$_POST['lastname'];
    $birthdate=$_POST['birthdate'];
    $gender=$_POST['gender'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
   
    
   $sql="INSERT INTO registration (firstname,lastname,birthdate,gender,phonenumber,email) 
   VALUES ('$firstname','$lastname','$birthdate','$gender','$phonenumber','$email')";
   $result=mysqli_query($db,$sql);
   if($result){
     echo("<section id='success'>
     <div class='icon'>
       <i class='fa fa-smile-o' aria-hidden='true'></i>
     </div>
     <h1>Successfully submited!</h1>
     <p>Take a seat and wait your response.</p>
     <p>It won't take long. We promise!</p>
     <i class='fa fa-times succ' aria-hidden='true'></i>
</section>
");
} else{
     echo " error!!";
 
   }
 }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Educational registration form</title>
    <script src="https://use.fontawesome.com/80976cfcfc.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width , initial-scale=1">
    <style>


section{
  min-height:100px;
  max-width:400px;
  background-color:#fff;
  margin:40px auto;
  -webkit-box-shadow: 10px 10px 28px 1px rgba(0,0,0,0.75);
  -moz-box-shadow: 10px 10px 28px 1px rgba(0,0,0,0.75);
  box-shadow: 10px 10px 28px 1px rgba(0,0,0,0.75);
  position:relative;
  .fa-times{
    position:absolute;
    right:7px;
    top:7px;
    font-size:1.3em;
    cursor:pointer;
  }
  .icon{
    padding:18px;
    margin-right:10px;
    float:left;
   
  }
  h1,p{
    font-family:'Work Sans';
  }
  h1{
    font-size:0.8em;
    font-weight:bolder;
    padding-top:15px;
    padding-bottom:5px;
  }
  p{
    font-size:0.8em;
    padding-top:6px;
  }
}
#success .icon{
    background-color:#29D885;
  }



       .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
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
li a{
  color:black;
}
.container  a:hover{
  text-decoration:none;

}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
       html, body {
      min-height: 100%;
      }
     body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background:white;
      box-shadow: 0 2px 4px 0 #00337E 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid black;
      }
      input::placeholder {
      color: black;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: 
      #00337E ;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item,  {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #00337E ; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
     
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
      h6{
  color:#fff;
  font-size:16px;
  margin-top:5px;
  letter-spacing:2px;
  margin-left: 50px;
  text-decoration: underline;
}

.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  text-align: justify;
  padding-left:0;
  list-style:none
}

.footer-links a
{  font-weight:bold;

  color:white;
  text-decoration: none;
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}

.footer-links li {
        display: inline-block;
            margin-left: 50px;
}


.social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a {
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:
  #3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
label.radio {
      position: relative;
      display: inline-block;
      padding-top: 4px;
      margin-right: 20px;
      text-indent: 30px;
      overflow: visible;
      cursor: pointer;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background:  #00337E ;
      }
      label.radio:after {
      content: "";
      position: absolute;
      width: 9px;
      height: 4px;
      top: 8px;
      left: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      input[type=radio] {
      display: none;
      }
    </style>
  </head>
  <body>
      <!-- Navigation-->
  <nav class="navbar navbar-expand-lg  fixed-top" id="mainNav" style="background-color:white;">
    <div class="container" >
        <a class="navbar-brand " href="#page-top" style="float:left;">
            <img src="images/Logo-S2T png.png" width="120px" height="100px">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
                
        <div class="collapse navbar-collapse" id="navbarResponsive" style="margin-top:20px;" >
            <ul class="navbar-nav text-uppercase ml-auto">
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../S2T/index.php"style="font-weight:bold; text-decoration:underline;">Accueil</a></li>
              <div class="dropdown">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="" style="font-weight:bold;text-decoration:underline;">Le technopark</a></li>

                <div class="dropdown-content">
                  <a href="../S2T/presentation.html">Présentation</a>
                  <a href="#">Actualités</a>
                  <a href="#">Evenements/Agenda</a>
                </div>
              </div> 
              <div class="dropdown">
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services" style="font-weight:bold;text-decoration:underline;">Services</a></li>

                <div class="dropdown-content">
                  <a href="#">infrastructure & Logistique</a>
                  <a href="#">Processus d'accompagnement</a>
                  <a href="#"> Espace de Conférences</a>
                </div>
                </div>
                <div class="dropdown">
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team" style="font-weight:bold;text-decoration:underline;">S'implanter</a></li>
                 
                                 <div class="dropdown-content">
                                   <a href="#">Pépinière d'entreprises</a>
                                   <a href="#"> Cyberparcs régionaux</a>
                                   <a href="#"> Espace entreprises</a>
                                 </div>
                                 </div>
                                 <div class="dropdown">

                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team"style="font-weight:bold;text-decoration:underline;">Annuaires</a></li>
                                 <div class="dropdown-content">
                                   <a href="#">Elgazala Technopark</a>
                                   <a href="#"> Manouba Technopark</a>
                                   <a href="#"> Cyberpark</a>
                                 </div>
                                 </div>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../S2T/contact.html"style="font-weight:bold;text-decoration:underline;">Nous Contacter</a></li>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact"style="font-weight:bold;text-decoration:underline;">Tech Transfer</a></li>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../S2T/espace admin/login.php"style="font-weight:bold;text-decoration:underline;">Espace admin</a></li>              
               

            </ul>
        </div>
    </div>
</nav>
    <div class="main-block" style="margin-top:90px;">
      <div class="left-part">
        <i class="fas fa-graduation-cap"></i>
        <h1>Register to our Event</h1>
        
      </div>
      <form action="" method="POST">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Register here</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="firstname" placeholder="first name">
          <input class="fname" type="text" name="lastname" placeholder="last name">
          <input class="fname" type="text" name="birthdate" placeholder="birthdate">
          <div class="gender">
          <input type="radio" value="none" id="male" name="gender" checked/>
          <label for="male" class="radio">Male</label>
          <input type="radio" value="none" id="female" name="gender" />
          <label for="female" class="radio">Female</label>
        </div>  
           <input type="text" name="phonenumber" placeholder="Phone number">
        
          <input type="text" name="email" placeholder="Email">
                    
        </div>
        <div class="checkbox">
          <input type="checkbox" name="checkbox"><span>I agree to the <a href="https://www.w3docs.com/privacy-policy">Privacy Poalicy for W3Docs.</a></span>
        </div>
        <button type="submit" name="submit"href="/" style=" padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #00337E ; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      width:100%;
      ">Submit</button>
      </form>
    </div>

    <div> 
  <div style="background-color: #00337E; height:650px ; width:1500px;"></div>
<div style="background-color: rgba(255, 255, 255, 0.555); height: 300px;width: 450px; margin-top: -700px; margin-left: 30px;">
  <img src="images/Logo-S2T png.png" width="160px" height="110px" style="margin-left: 20px;margin-top: 10px;">
  <br>
  <br>


  <p style=" margin-left: 20px; font-size: 19px; font-family:'Ranga'; font-style: italic; ">Smart Tunisian Technoparks,<br> Raoued, Gouvernorat de l'Ariana, Tunisie<br>
    (+216) 71 856 600  <br>
    Voir sur google Map</p>

</div>

<br>
<div style="position:absolute;">
  <h6>MENU PRINCIPAL</h6>
  <ul class="footer-links">
    <li><a href=""> Accueil</a></li>
    <br>
    <li><a href="">Le technopark</a></li>
    <br>
    <li><a href="">Actualités</a></li>
    <br>
    <li><a href="">Evenements/Agenda</a></li>
    <br>
    <li><a href="">S'implanter</a></li>
    <br>
    <li><a href="">Services</a></li>
    <br>
    <li><a href="">Annuaire</a></li>

  </ul>
</div>
<div style="margin-left: 300px;  width: 50%;">
  <h6 style="margin-left: 50px;">LIENS UTILES</h6>
  <ul class="footer-links" >
    <li><a href=""> Ministère des Technologies
      de la <br>Communication et de l'Economie <br>
      Numérique.
      </a></li>
    <br>
    <li><a href="">Ministère du développement 
      et <br> de la coopération Intérnationale.
    </a></li>
    <br>
    <li><a href="">Agence Nationale pour l'Emploie <br>
      et Le Travail Indépendant.
    </a></li>
    <br>
    <li><a href="">APII</a></li>
    <br>
    <li><a href="">FIPA </a></li>
    <br>
    <li><a href="">Entreprise Europe Network</a></li>
    <br>

  </ul>
</div>

<div style="margin-left: 900px;  width: 50%; position:absolute; margin-top:-280px;">
  <h6 style="margin-left: 50px;">LIENS UTILES<h6>
  <ul class="footer-links" >
    <li><a href=""> ANSI
      </a></li>
    <br>
    <li><a href="">CERT
    </a></li>
    <br>
    <li><a href="">CNI
    </a></li>
    <br>
    <li><a href="">Certification</a></li>
    <br>
    <li><a href="">FIPA </a></li>
    <br>
    <li><a href="">L'agence Tunisienne de l'Internet</a></li>
    <br>

  </ul>
</div>
<div class="container" style="margin-top:150px;">
  <div class="row">
    <div class="col-md-8 col-sm-6 col-xs-12">
      <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
   <a href="#" style="color: black; font-weight: bold;">Smart Tunisian Technoparks</a>.
      </p>
    </div>

   
  </div>
</div>
<div style="margin-top: -700px; margin-left: 800px; position:absolute;">
  <h6 style="margin-left: 20px;">   NEWSLETTER</h6>
<div class="container">
  <p style="color: white; font-weight: bold; font-size: 19px;">Vous voulez avoir régulièrement de nos nouvelles ? <br>
  Inscrivez-vous à notre newsLetter.</p><br>
  <input type="text"  style="margin-left: 150px; background-color:white;width:50%;height:11%;  "><button style="background-color: white;" type="button"><b>GO!</b></button>
</div>
</div>
<br>
<br>
  </body>
</html>