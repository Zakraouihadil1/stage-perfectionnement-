<?php

$db=new mysqli('localhost','root','','espace_admin_s2t');
if($db){
  //echo "db connected";
}
else{
  die(mysqli_error($db));
}

?>