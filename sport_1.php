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
        <!-- datatables -->
            <link rel="stylesheet" href="./addons/datatables.min.css">
            <link rel="stylesheet" type="text/css" href="./DataTables/datatables.min.css"/>
            <script type="text/javascript" src="./DataTables/datatables.min.js"></script>
                <!-- 本機端引入jquery -->
                <script src="./js/jquery3.6.0.js"></script>
                <script type="text/javascript" src="./js/jquery.min.js"></script>
                <!-- 網路引入jquery -->
                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <!-- datatables -->
        <!-- Pose Detection -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/p5.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/addons/p5.dom.min.js"></script>
            <script src="https://unpkg.com/ml5@latest/dist/ml5.min.js" type="text/javascript"></script>
        <!-- Pose Detection -->
        <style>
            .btn-secondary {
                --bs-btn-bg: #dc3545;
            }
            .font {
                font-family:'Times New Roman','標楷體';
            }
            .element_center {
                display: flex; 
                justify-content: center; 
                align-items: center;
            }
            /* 側邊功能按鈕樣式 */
            .f_btn {
                font-size: 25px; 
                border-radius: 8px; 
                padding-top: 10px; 
                padding-bottom: 10px;
                padding-right: 0px;
                padding-left: 0px;
                border: 2px solid #9dbfbb;
                background-color: #ffffff;
            }
            .f_btn_select {
                font-size: 25px; 
                border-radius: 8px; 
                padding-top: 10px; 
                padding-bottom: 10px;
                padding-right: 0px;
                padding-left: 0px;
                border: 2px solid #9dbfbb;
                background-color: #9dbfbb;
                color: #ffffff;
            }
            .time_btn {
                font-size: 25px; 
                border-radius: 8px; 
                /* padding-top: 10px; 
                padding-bottom: 10px; */
                padding-right: 0px;
                padding-left: 0px;
                border: 2px solid #9dbfbb;
                background-color: #ffffff;
                width: 30%;
            }
        </style>
        <script>// 計時器程式碼
            let timerInterval;
            let startTime;
            let elapsedTime = 0;
            let isRunning = false;
            let timerValue = "00:00:00";
            function startPause() {
                if (isRunning) {
                    pauseTimer();
                } else {
                    startTimer();
                }
            }
            function startTimer() {
                startTime = Date.now() - elapsedTime;
                timerInterval = setInterval(updateTimer, 10);
                isRunning = true;
                document.getElementById("startPauseBtn").textContent = "暫停";
            }
            function pauseTimer() {
                clearInterval(timerInterval);
                isRunning = false;
                document.getElementById("startPauseBtn").textContent = "繼續";
            }
            function reset() {
                clearInterval(timerInterval);
                elapsedTime = 0;
                isRunning = false;
                document.getElementById("startPauseBtn").textContent = "開始";
                document.getElementById("timer").textContent = "00:00:00";
            }
            function updateTimer() {
                const currentTime = Date.now();
                elapsedTime = currentTime - startTime;
                timerValue = formatTime(elapsedTime);
                displayTime(timerValue);
            }
            function formatTime(time) {
                const hours = Math.floor((time / (1000 * 60 * 60)) % 24).toString().padStart(2, "0");
                const minutes = Math.floor((time / (1000 * 60)) % 60).toString().padStart(2, "0");
                const seconds = Math.floor((time / 1000) % 60).toString().padStart(2, "0");
                return `${hours}:${minutes}:${seconds}`;
            }
            function displayTime(time) {
                document.getElementById("timer").textContent = time;
            }
            function saveTimeToDatabase() {
                const time = timerValue;
                document.getElementById("timeInput").value = time; // 設置表單的值
                document.getElementById("timeForm").submit(); // 提交表單
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
                    <div class="row element_center font" style="margin-top: 2%; font-size: 25px;">
                            <div class="col element_center" style="justify-content: right;">
                                <button class="time_btn" id="startPauseBtn" onclick="startPause()">開始</button>
                            </div>
                            <div class="col element_center stopwatch" style="font-size: 35px;">
                                <p id="timer" style=" margin-bottom: 0px; ">00:00:00</p>
                            </div>
                            <div class="col element_center">
                                <button class="time_btn" id="resetBtn" onclick="reset(); saveTimeToDatabase();">完成</button>
                            </div>
                            <!-- 添加隱藏的表單 -->
                            <form id="timeForm" action="save_time_1.php" method="POST" style="display: none;">
                                <input type="hidden" name="time" id="timeInput">
                                <input type="submit" value="Submit">
                            </form>
                        <div class="col element_center">
                            動作錯誤
                        </div>
                    </div>
                    <div class="row element_center" style="margin-top: 2%;">
                        <div class="col-4">
                            <div class="row element_center font" style="margin-top: 0%;">
                                <a href="./sport_1.php" class="element_center" style="text-decoration: none !important;">
                                    <button class="f_btn_select" style="width: 60%;">
                                        原地抬膝踏步
                                    </button>
                                </a>
                            </div>
                            <div class="row element_center font" style="margin-top: 10%;">
                                <a href="./sport_2.php" class="element_center" style="text-decoration: none !important;">
                                    <button class="f_btn" style="width: 60%;">
                                        原地小跑步
                                    </button>
                                </a>
                            </div>
                            <div class="row element_center font" style="margin-top: 10%;">
                                <a href="./sport_3.php" class="element_center" style="text-decoration: none !important;">
                                    <button class="f_btn" style="width: 60%;">
                                        原地上下跳
                                    </button>
                                </a>
                            </div>
                            <div class="row element_center font" style="margin-top: 10%;">
                                <a href="./sport_4.php" class="element_center" style="text-decoration: none !important;">
                                    <button class="f_btn" style="width: 60%;">
                                        原地開合跳
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row element_center font" style="border: 5px solid #9dbfbb; border-radius:20px; background-color:#9dbfbb;">
                                <p class="row element_center" style="font-size: 25px; font-weight: bold; margin-bottom: 0px;">
                                    原地抬膝踏步
                                </p>
                                <p class="row element_center" style="font-size: 20px;">
                                    檢測前先測出受測者髂前上棘與臏骨中點連線之二分之一處，並在牆上貼上膠布作為註記。受測者面向牆壁盡快做原地踏步動作，每次踏步前膝蓋都必須抬到標示高度。
                                </p>
                                <p class="row element_center" style="">
                                    <iframe width="160" height="200" 
                                        src="https://www.youtube.com/embed/GHVW1QV6Ph4" title="YouTube video player" frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                        allowfullscreen>
                                    </iframe>
                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row element_center font" style="border: 5px solid #9dbfbb; border-radius:20px; background-color:#9dbfbb; margin-left: 0px;">
                                <!-- <script>
                                    let video;
                                    let poseNet;
                                    let poses = [];
                                    function setup() {
                                        createCanvas(640, 480);
                                        video = createCapture(VIDEO);
                                        video.size(width, height);
                                        // Create a new poseNet method with a single detection
                                        poseNet = ml5.poseNet(video, modelReady);
                                        // This sets up an event that fills the global variable "poses"
                                        // with an array every time new poses are detected
                                        poseNet.on("pose", function(results) {
                                            poses = results;
                                            console.log(poses);
                                        });
                                        // Hide the video element, and just show the canvas
                                        video.hide();
                                    }
                                    function modelReady() {
                                        console.log("Model Ready");
                                    }
                                    function draw() {
                                        image(video, 0, 0, width, height);
                                        // We can call both functions to draw all keypoints and the skeletons
                                        drawKeypoints();
                                        drawSkeleton();
                                    }
                                    // A function to draw ellipses over the detected keypoints
                                    function drawKeypoints() {
                                        // Loop through all the poses detected
                                        for (let i = 0; i < poses.length; i += 1) {
                                            // For each pose detected, loop through all the keypoints
                                            const pose = poses[i].pose;
                                            for (let j = 0; j < pose.keypoints.length; j += 1) {
                                            // A keypoint is an object describing a body part (like rightArm or leftShoulder)
                                            const keypoint = pose.keypoints[j];
                                            // Only draw an ellipse is the pose probability is bigger than 0.2
                                            if (keypoint.score > 0.2) {
                                                fill(255, 0, 0);
                                                noStroke();
                                                ellipse(keypoint.position.x, keypoint.position.y, 10, 10);
                                            }
                                            }
                                        }
                                    }
                                    // A function to draw the skeletons
                                    function drawSkeleton() {
                                        // Loop through all the skeletons detected
                                        for (let i = 0; i < poses.length; i += 1) {
                                            const skeleton = poses[i].skeleton;
                                            // For every skeleton, loop through all body connections
                                            for (let j = 0; j < skeleton.length; j += 1) {
                                            const partA = skeleton[j][0];
                                            const partB = skeleton[j][1];
                                            stroke(255, 0, 0);
                                            line(partA.position.x, partA.position.y, partB.position.x, partB.position.y);
                                            }
                                        }
                                    }
                                </script> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 內頁 -->
                <br><br>
            </div>
        </div>
        <footer>
            Copyright © 2023 CSMU-MI <br> All rights reserved.Web Design by CSMU-MI WSH Lab
        </footer>
    </body>
</html>