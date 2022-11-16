<?php
include('./constant/connect.php');

$sql = "SELECT*from medicine order by med_name ASC";
$result = mysqli_query($db2, $sql);