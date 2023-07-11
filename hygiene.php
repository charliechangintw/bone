<?php 
    function get_mysql(){
        $mysqli = new mysqli('127.0.0.1:3306', 'root', '', 'bone');
        mysqli_set_charset($mysqli, "utf8");
        return $mysqli;
    }
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
                <content>
                    <style>
                                        
                        a {
                            text-decoration: none;
                        }
                        a:hover {
                            text-decoration: underline;
                        }
                    </style>

                    </style>
                    <div class="row" >
                        
                        <div class="col" style="  margin-top:5%; margin-left: 5%;  margin-right: 5%;  width: 450px; height: 500px; background-color: #9DBFBB; border-radius: 50px; ">
                            <div class="row" style=" display: flex; justify-content: center; text-align: center;">
                                <img src="./image/video.png" style="width: 150px; height: 130px; margin-top: 5%;">
                                <span style="width: 200px; height: 100px; font-size: 35px; font-weight: bold; margin-top: 14%;">衛教影片</span>
                                
                                <div class="row" style=" display: flex; justify-content: center; text-align: center; margin-top: 5%; margin-bottom: 5%;" >

                                    <?php
                                        $mysqli = get_mysql();
                                        // $v_id = 1;
                                        $sql = "SELECT * FROM `video` 
                                        -- WHERE `v_id` = $v_id 
                                        ";
                                        $result=$mysqli->query($sql);
                                        while ($row = $result->fetch_assoc()){

                                            echo '<a href="'.$row["v_src"].'" target="windows" ><h3 style="color: black; margin-bottom: 5%;">'.$row["v_name"].'</h3></a>';
                                       
                                            
                                        }
                                    ?>  

                                </div>    
                            </div>    
                        </div>
                        <div class="col"  style=" margin-right:10%; margin-top: 5%;" name="windows" >
                            

                           <iframe width="560" height="500" name="windows" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                
                           

                        </div>
                   </div>
                </content>
            </div>
        </div>
        <footer>
            Copyright © 2023 CSMU-MI <br> All rights reserved.Web Design by CSMU-MI WSH Lab
        </footer>
    </body>