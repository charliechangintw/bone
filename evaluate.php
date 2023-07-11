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
        <link rel="shortcut icon" href="./image/bone_icon.ico" type="image/x-icon">
        <style>
            .btn-secondary {
                --bs-btn-bg: #dc3545;
            }
            .font {
                font-family:'Times New Roman','標楷體';
                font-weight: bold;
            }
            .element_center {
                display: flex; 
                justify-content: center; 
                align-items: center;
            }
        </style>
        <script>
            function eval(){
                var age = document.getElementById("age").value;
                var weight = document.getElementById("weight").value;
                var ostai = ((age-weight)*0.2).toFixed(2);
                if (age == '' || weight == ''){
                    document.getElementById("ostai_value").innerHTML = "請完整填寫年齡體重";
                }else if (age <= 0 || age >= 120 || weight <= 0){
                    document.getElementById("ostai_value").innerHTML = "請輸入正常範圍的數值!";
                }else{
                    if(ostai >= 2){
                        document.getElementById("ostai_value").innerHTML = "<span style='color:red'>" + "高度風險區(" + ostai + ")" + "</span>";
                    }else if(ostai >= -1 && ostai < 2){
                        document.getElementById("ostai_value").innerHTML = "<span style='color:orange'>" + "中度風險區(" + ostai + ")" + "</span>";
                    }else{
                        document.getElementById("ostai_value").innerHTML = "<span style='color:green'>" + "低度風險區(" + ostai + ")" + "</span>";
                    }
                }
            }
        </script>
    </head>
    <body>
        <div class="wrapper">
            <div class="content">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
                <!--header-->
                <header>
                    <div class="container">
                        <div class="row">
                            <div class="col-8" style="margin-top: 15px; font-size: 40px;">
                                預防骨質疏鬆輔助系統
                            </div>
                            <div class="col-3" style="margin-top: 15px; ">
                                <div class="dropdown-center" style="float: right;">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                        style="font-size: 20px; --bs-btn-bg: rgb(157, 191, 187);--bs-btn-active-bg:rgb(157, 191, 187);--bs-btn-border-color:white;">
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
                <!--header-->
                <!-- 內頁 -->
                <div class="container">
                    <div class="row" style="margin-top: 2%; display: flex; justify-content: center; align-items: center;">
                        <img src="./image/OSTAi_new.png" style="width: 35%;">
                    </div>
                    <div class="row" style="margin-top: 2%;">
                        <div class="col" >
                            <div class="row element_center font" style="margin-left: 55%; font-size: 20px;">
                                請輸入年齡：
                            </div>
                            <div class="row element_center font" style="margin-top: 1%; margin-left: 55%; font-size: 20px;">
                                請輸入體重：
                            </div>
                            <div class="row element_center font" style="margin-top: 1%; margin-left: 55%; font-size: 20px;">
                                您的OSTAi為：
                            </div>
                        </div>
                        <div class="col" >
                            <div class="row element_center font" style="width: 30%; font-size: 15px;">
                                <input type="number" id="age">
                            </div>
                            <div class="row element_center font" style="width: 30%; margin-top: 1%; font-size: 15px;">
                                <input type="number" id="weight">
                            </div>
                            <div class="row element_center font" style="margin-top: 1%; font-size: 20px;">
                                <p id="ostai_value" style="margin-bottom: 0px;"> </p>
                            </div>
                        </div>
                    </div>
                    <div class="row element_center font" style="margin-top: 1%;">
                        <button onclick="eval()" style="width: 10%; border-radius: 8px; border: #9dbfbb; background-color: #9dbfbb;
                            font-size: 25px; font-weight: bold;">
                            評估
                        </button>
                    </div>
                </div>
                <!-- 內頁 -->
                <br><br><br>
            </div>
        </div>
        <footer>
            Copyright © 2023 CSMU-MI <br> All rights reserved.Web Design by CSMU-MI WSH Lab
        </footer>
    </body>
</html>