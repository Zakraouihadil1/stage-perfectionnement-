
              
  <html>
<head>
</title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<meta name="viewport" content="width=device-width , initial-scale=1">

<style>
  		

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

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.logo{
margin-top: 10px;
margin-left:-40px;
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
  .container {
    display: flex;
}

.container__sidebar {
    width: 30%;
}

.container__main {
    /* Take the remaining width */
    flex: 1;
    margin-left:100px;

    /* Make it scrollable */
    overflow: auto;
}
.button {
    /* Center the content */
    align-items: center;
    display: flex;
    flex-direction: row;
    justify-content: center;
}
 .event:hover{
    object-fit: cover;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    -ms-transition: all .2s ease-in-out;
    -webkit-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
    </style>
</head>
<body>

         <!-- Navigation-->
  <nav class="navbar navbar-expand-lg  fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand " href="#page-top" style="float:left;">
            <img class="logo" src="images/Logo-S2T png.png" width="150px" height="110px">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
                
        <div class="collapse navbar-collapse" id="navbarResponsive"  style="margin-top:70px;" >
            <ul class="navbar-nav text-uppercase ml-auto">
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../S2T/index.php">Accueil</a></li>
              <div class="dropdown">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Le technopark</a></li>
                <div class="dropdown-content">
                  <a href="./presentation.html">Présentation</a>
                  <a href="./actualites.html">Actualités</a>
                  <a href="#">Evenements/Agenda</a>
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
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./contact.html">Nous Contacter</a></li>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Tech Transfer</a></li>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./espace admin/login.php">Espace admin</a></li>


                 



                
               

            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <!-- Sidebar -->
    <aside class="container__sidebar">
    <?php 
          $serveur = "localhost";
          $dbname = "espace_admin_s2t";
          $user = "root";
          $pass = "";
          $id=$_GET['id'];
          //On se connecte à la BDD
          $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
          $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $req="select * from events WHERE id=$id";
          $res=$dbco->query($req);
          if($res->rowCount() ==0){
            echo "<p>table vide</p>";
          }
          else{
            while($ligne=$res->fetch()){
              echo("
              <div class='col-xl-4 col-md-6 d-flex align-items-stretch' data-aos='zoom-in' style='margin-top:200px;'>
              <div class='icon-box'>
              
              <img class='event' src='".$ligne['url']."'  alt='...' height='400px' width='370px'>
              <h3 style='color:#00337E; font-size: 22px; font-weight:bold;'>".$ligne['title']."</h3>

                <br>
                <br>
                <br>
                
                </div>
                
                

           
                </div>
              
              
          
            
           </aside>

    <!-- Main -->
    <main class='container__main' style='margin-top:200px;'>
    <p >".$ligne['descriptiondétaillées']."</p>
    <button class='btn btn-info' style='background-color:#00337E;'>
    <a href='register.php' style='color:white; '><i class='fa fa-fw fa-edit'></i> je participe à cet evenement</a></button>
    <br> <p style='margin-top:0px; position:absolute; color:green; font-weight:bold;'> Date: </p> <p style='width:55%; margin-left:40px;' > " .$ligne['description']."  </p><p style='margin-top:-38px; color:red; font-weight:bold;'> Lieu:</p>


</main>
");
}

        }
?>
</div>
</body>
 </html>


 