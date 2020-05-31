<?php 

require 'db.php';

$id=$_GET['id'];

$qs="DELETE FROM people WHERE id=$id";

mysqli_query($connect,$qs);

?>