<?php  

include "db_conn.php";

$sql = "SELECT * FROM cats ORDER BY id DESC";
$result = mysqli_query($conn, $sql);