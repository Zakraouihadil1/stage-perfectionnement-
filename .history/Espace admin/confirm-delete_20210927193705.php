


 <form action="test.php" method="GET">

<input type="text" name="Delete_This" value="<?php if (isset($_GET['Delete_This'])) echo $_GET['Delete_This']?>">
<input type="submit" name="Deleting" value="Delete this">

<?php
    // If the deleting button is pressed
    if (isset($_GET['Deleting']))
    {

        $DeleteThis = $_GET['Delete_This'];

       ?> 
        <script type='text/javascript'>
            if (confirm('Are you sure you want to delete <?php echo $DeleteThis ?> ?'))
                alert('<?php echo $DeleteThis ?> deleted');
                 <?php
                   $sql_delete="DELETE FROM table WHERE Name like '".$DeleteThis ."'";
                   mysqli_query($db,$sql_delete);
                ?>
           else
            alert('Not deleted');


        </script>               
<?php } ?>
</form>
