


<html>
    <head>
        <title></title>
       <link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
    <nav class="navtop">
    	<div>
    		<h1>User Info</h1>
            <a href="admin-home.php"><i class="fas fa-home"></i>Home</a>
    	</div>
    </nav>
    <div class="content delete">
	<h2>Delete User #</h2>
	<p>Are you sure you want to delete User #<?php echo $_GET['id'] ?>?</p>
    <div class="yesno">
        <a href="delete-user.php?id=<?=$getserv['id']?>&confirm=yes">Yes</a>
        <a href="delete-event.php?id=<?=$contact['id']?>&confirm=no">No</a>
    </div>
</div>

</body>
    </html>






