<?php 
    function get_mysql(){
        $mysqli = new mysqli('127.0.0.1:3306', 'root', '', 'bone');
        mysqli_set_charset($mysqli, "utf8");
        return $mysqli;
    }
       
    
    /*   
        $data = mysqli_fetch_array($result);
                              
        
    /*
    $mysqli = get_mysql();

    if($mysql->connect_errno){
        echo "bad connection!!<br/>";
        exit;
    }else{
        echo "connection OK!!<br/>";
    }

  
    $sql = "SELECT * FROM personal" WHERE name = $name;
    $
    if(!$result = $mysqli->query($sql)){
        echo "bad query!!<br/>";
        exit;
    }else{
        echo "query OK!!<br/>";
    }
      */
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <title>預防骨質疏鬆輔助系統</title>


      

       
    </head>
    <body>
        <div class="wrapper">
            <div class="content">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
                <!--header-->
                <header>
                    <div class="container">
                        <div class="row">
                            <div class="col-8" style="margin-top: 15px;">
                                預防骨質疏鬆輔助系統
                            </div>
                            <div class="col-3" style="margin-top: 15px; ">
                                <div class="dropdown-center" style="float: right;">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                        style="--bs-btn-bg: rgb(157, 191, 187);--bs-btn-active-bg:rgb(157, 191, 187);--bs-btn-border-color:white;">
                                      使用者：張升誠
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">登出</a></li>
                                    </ul>
                                  </div>
                            </div>
                            <div class="col-1" style="margin-top: 15px;">
                                <a href="index.html"><img src="./image/home.svg" style="width: 49px; float: right;"></a>
                            </div> 
                        </div>        
                    </div>  
                </header>
                <div class="container">
                    <div class="col" style="display:float; justify-content: center; text-align: center;">
                        
                        
                        <form method="POST" action="./toggleedit.php" >
                        <div class="col" style=" margin-top: 5%; margin-right: 25%; margin-left: 25%; height: 500px; background-color: #9DBFBB; border-radius: 50px; padding: 2%; " >

                            <div class="row" style="margin-top: 3%; margin-bottom:5%; display: flex; justify-content: center; text-align: center;">
                                <img src="./image/personal.png" style="width:25%; margin-right: 5%;">
                                <button type="submit"  name="save-button" style="background-color: #9DBFBB; border-color: black; border-radius: 20px; font-size: 30px; color: black; width:30%;  margin-top:3%;">儲存</button>
                            </div>
                            
                                
                                
                            
                                <?php
                                    $mysqli = get_mysql();
                                    $id = 1;
                                    $sql = "SELECT * FROM `personal` WHERE `id` = $id";
                                    $result=$mysqli->query($sql);
                                    while ($row = $result->fetch_assoc()){

                                        echo '<p style="  font-size: 25px; font-weight: bold;">姓名：<input type="text"  style="width:160px;" id="newName" name="newName" value="' . $row["name"] . '"></p>';
                                        echo '<p style="  font-size: 25px; font-weight: bold;">年齡：<input type="text" style="width:160px; id="newAge" name="newAge" value="' . $row["age"] . '"></p>';
                                        echo '<p style=" font-size: 25px; font-weight: bold;">體重：<input type="text" style="width:160px; id="newWeight" name="newWeight" value="' . $row["weight"] . '"></p>';
                                        echo '<p style=" font-size: 25px; font-weight: bold;">OSTAi：<input type="text" style="width:160px; id="newOstai" name="newOstai" value="' . $row["ostai"] . '"></p>';
                                        echo '<p style=" font-size: 25px; font-weight: bold;">風險區：<input type="text" style="width:160px; id="newRisk" name="newRisk" value="' . $row["risk"] . '"></p>';

                                        
                                    }
                                ?>  
                                
                            </div>
                            
                        </form>
                    </div>        
                </div>
                <br>
            </div>
        </div>
        <footer>
            Copyright © 2023 CSMU-MI <br> All rights reserved.Web Design by CSMU-MI WSH Lab
        </footer>
    </body>
