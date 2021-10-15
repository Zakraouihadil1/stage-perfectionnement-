<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $username=$_POST['username']; 
    $email=$_POST['email'];
    $password=$_POST['password'];
    $type=$_POST['type'];
   $sql="INSERT INTO masterlogin (username,email,password,role) 
   VALUES ('$username','$email','$password','$type')";
   $result=mysqli_query($db,$sql);
   if($result){
       echo "data inserted succefully";
       header('Refresh: 1; URL = user-home.php');
   } else{
     echo " error!!";
 
   }
 }

?>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Add User</title>

	

	<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
<div class="container" style="margin-top:120px">


	

<div class="card">

    <div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Add User</strong> <a href="admin-home.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Users</a></div>

    <div class="card-body">

        

        <div class="col-sm-6">

            <h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>

            <form method="post">

                <div class="form-group">

                    <label>User Name <span class="text-danger">*</span></label>

                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter user name" required>

                </div>

                <div class="form-group">

                    <label>User Email <span class="text-danger">*</span></label>

                    <input type="email" name="email" id="useremail" class="form-control" placeholder="Enter user email" required>

                </div>

                <div class="form-group">

                    <label>Password <span class="text-danger">*</span></label>

                    <input type="password"  name="password" id="password" class="form-control" placeholder="Enter your password" required>

                </div>
                <div class="form-group">

                 <label class="col-sm-3 control-label">Select role</label>

                 <input type="text"  name="type"  class="form-control" placeholder="Enter a role" required>



</div>

                <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9 m-t-15">


                 <button type="submit" name="submit"  value="Register" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Add User</button>



                </div>

            </form>

        </div>

    </div>

</div>

        
        
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
<script src="https://www.solodev.com/_/assets/phone/jquery.mobilePhoneNumber.js"></script>




</body>

</html>



