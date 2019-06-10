<?php
include 'connection.php';

$sql="SELECT * FROM images WHERE title LIKE '{$_POST["searchInput"]}'";
        
$query=  mysqli_query($con,$sql)or die(mysqli_error($con));
        
$row=mysqli_fetch_array($query);

echo "Imagine: <img src=".$row['image']."><br/>";

?>