<?php

$id = $_GET['id']; 

// echo $sid;

// connection start
include('conn.php');

// run sql query
$sql = "DELETE FROM green_engineering WHERE id= $id";
$result = mysqli_query($conn, $sql);

// connection close
mysqli_close($conn);

// change location
header("location: products.php")

?>