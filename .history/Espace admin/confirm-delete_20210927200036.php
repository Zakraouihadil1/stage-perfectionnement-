


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
    		<a href="read.php"><i class="fas fa-address-book"></i>Contacts</a>
    	</div>
    </nav>
    <div class="content delete">
	<h2>Delete Contact #</h2>
	<p>Are you sure you want to delete Event #<?php echo $_GET['id'] ?>?</p>
    <div class="yesno">
        <a href="delete-user.php?id=<?=$contact['id']?>&confirm=yes">Yes</a>
        <a href="delete-event.php?id=<?=$contact['id']?>&confirm=no">No</a>
    </div>
</div>

</body>
    </html>




    

