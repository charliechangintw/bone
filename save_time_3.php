<?php
function get_mysql(){return new mysqli('localhost', 'root', '', 'bone');}
$mysqli = get_mysql();
mysqli_set_charset($mysqli, "utf8");

// echo $_POST['time'];
$time = $_POST['time'];
date_default_timezone_set('Asia/Taipei');// 設定時區
$now_date = date("Y/n/j"); 
$now_time = date("H:i:s");    

$sql = "INSERT INTO record (`date`, `end_time`, `total_time`, `sport_id`)
VALUES ('$now_date', '$now_time', '$time', '3')";
// echo $sql;
$result = $mysqli->query($sql);

header("Refresh:0;url=sport_3.php");
?>