<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset='utf-8'>
    </head>
    <body>
    <?php
    session_start();
    $serveur = "localhost";
        $dbname = "espace_admin_s2t";
        $user = "root";
        $pass = "";
$pdo =  new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
$msg = '';
// Check that the contact ID exists
if (isset($_GET['id'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM masterlogin WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM masterlogin WHERE id = ?');
            $stmt->execute([$_GET['id']]);
            $msg = 'You have deleted the user!';
        } else {
            // User clicked the "No" button, redirect them back to the read page
            header('Location: admin-home.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>
    <div class="content delete">
	<h2>Delete Contact #<?=$contact['id']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Are you sure you want to delete contact #<?=$contact['id']?>?</p>
    <div class="yesno">
        <a href="delete.php?id=<?=$contact['id']?>&confirm=yes">Yes</a>
        <a href="delete.php?id=<?=$contact['id']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>
    <?php

?>
    </body>
</html>

