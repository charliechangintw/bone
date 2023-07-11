<?php


function get_mysql() {
    $mysqli = new mysqli('127.0.0.1:3306', 'root', '', 'bone');
    mysqli_set_charset($mysqli, "utf8");
    return $mysqli;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取表单数据
    $newName = $_POST["newName"];
    $newAge = $_POST["newAge"];
    $newWeight = $_POST["newWeight"];
    $newOstai = $_POST["newOstai"];
    $newRisk = $_POST["newRisk"];

    // 更新数据库中的个人信息
    $mysqli = get_mysql();
    $id = 1; // 假设您在会话中存储了当前用户的姓名
    $sql = "UPDATE `personal` SET  name='$newName', age=$newAge, weight=$newWeight, ostai=$newOstai, risk='$newRisk' WHERE id='$id'";
    echo $sql;
    if ($mysqli->query($sql)) {
        header("refresh:0;url=./personal.php");
    } else {
        echo "更新个人信息时发生错误: " . $mysqli->error;
    }

    // 关闭数据库连接
    $mysqli->close();
}
?>
