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
        <style>
            .btn-secondary {
                --bs-btn-bg: #dc3545;
            }
            .font {
                font-family:'Times New Roman','標楷體';
            }
            .element_center {
                /* display: flex;  */
                justify-content: center; 
                align-items: center;
            }
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
            .record_table{
                width: 90%;
                color:black; 
                text-align: center;
                margin-left: 5%;
            }
            /* dataTables裡面有些元素不需要 */
                /* .dataTables_length,  */
                .dataTables_filter, 
                .dataTables_info,
                /* .dataTables_paginate,  */
                /* .paging_simple_numbers,  */
                /* .paginate_button,  */
                .current,
                .current { display: none; }
            /* dataTables padding 設定0 */
                .dataTables_wrapper, .no-footer{
                    padding:0px;
                }   
            /* dataTables樣式設定 */
                .dataTables_length{
                    margin-left: 5%;
                }
                .dataTables_length, 
                .dataTables_paginate, 
                .paging_simple_numbers, 
                .paginate_button{
                    font-size:20px;
                }
                .dataTables_paginate,.paging_simple_numbers{
                    display: flex; 
                    justify-content: flex-end;
                    color: black !important;
                    margin-right: 3%;
                }
                .paginate_button, .previous, .next, .disabled{
                    color: black !important;
                    text-decoration: none !important;
                    color: black !important;
                    margin-right: 3%;
                }
            /* dataTables樣式設定 */
        </style>
        <script>
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
                    <div class="row element_center" style="margin-top: 2%;">
                        <div class="col-4">
                            <div class="row element_center font" style="margin-top: 10%;">
                                <a href="./record_1.php" class="element_center" 
                                    style="display: flex; text-decoration: none !important;">
                                    <button class="f_btn" style="width: 60%;">
                                        原地抬膝踏步
                                    </button>
                                </a>
                            </div>
                            <div class="row element_center font" style="margin-top: 10%;">
                                <a href="./record_2.php" class="element_center" 
                                    style="display: flex; text-decoration: none !important;">
                                    <button class="f_btn" style="width: 60%;">
                                        原地小跑步
                                    </button>
                                </a>
                            </div>
                            <div class="row element_center font" style="margin-top: 10%;">
                                <a href="./record_3.php" class="element_center" 
                                    style="display: flex; text-decoration: none !important;">
                                    <button class="f_btn_select" style="width: 60%;">
                                        原地上下跳
                                    </button>
                                </a>
                            </div>
                            <div class="row element_center font" style="margin-top: 10%;">
                                <a href="./record_4.php" class="element_center" 
                                    style="display: flex; text-decoration: none !important;">
                                    <button class="f_btn" style="width: 60%;">
                                        原地開合跳
                                    </button>
                                </a>
                            </div>
                        </div>
                        <!-- 表格datatables https://www.wfublog.com/2020/03/table-search-filter-jquery-datatables.html -->
                        <script type="text/javascript" src="./DataTables/datatables.min.js"></script>
                        <script type="text/javascript">
                            $(document).ready( function () {
                                $('#record_table').DataTable(
                                    { language: 
                                        { 
                                            "emptyTable": "尚無資料", 
                                            "processing": "處理中...",
                                            "loadingRecords": "載入中...",
                                            "lengthMenu": "每頁顯示  _MENU_ 筆資料",
                                            "zeroRecords": "無搜尋結果",
                                            "info": "_START_ 至 _END_ / 共 _TOTAL_ 筆",
                                            "infoEmpty": "尚無資料",
                                            "infoFiltered": "(從 _MAX_ 筆資料過濾)",
                                            "infoPostFix": "",
                                            "search": "搜尋:",
                                            "paginate": { "first": "首頁", "last": "末頁", "next": "下一頁", "previous": "前一頁" }, 
                                            "aria": { "sortAscending": ": 升冪", "sortDescending": ": 降冪" } ,
                                        } 
                                    }
                                );
                            } );
                        </script>
                        <!-- 表格內容 -->
                        <div class="col-8 element_center font" style="font-size: 25px;">
                            <div class="row element_center">
                                <table id="record_table" class="display record_table">
                                    <style>td{text-align: center}</style>
                                    <thead>
                                        <tr style="background-color: #9dbfbb; border-color:#9dbfbb; border-width: 1px;">
                                            <th>日期</th>
                                            <th>開始時間</th>
                                            <th>結束時間</th>
                                            <th>運動時長</th>
                                            <th>錯誤次數</th>
                                        </tr>
                                    <thead>
                                    <tbody>
                                        <?php
                                            //連線資料庫
                                            function get_mysql(){return new mysqli('localhost', 'root', '', 'bone');}
                                            $mysqli = get_mysql();
                                            mysqli_set_charset($mysqli, "utf8");
                                            //sql查詢語法
                                            $sql = "
                                                select * 
                                                from record
                                                where sport_id = 3";
                                            // echo $sql;
                                            $result = $mysqli->query($sql);
                                            $sendbackarray = array();
                                            while ($catch = $result->fetch_assoc()){
                                                echo '<tr style="border-color:#9dbfbb; border-width: 1px;">';
                                                // 計算開始時間
                                                $pass = strtotime($catch['total_time']);
                                                $end = strtotime($catch['end_time']);
                                                $start = $end - $pass;
                                                $startTime = date('H:i:s',$start);
                                                // 資料庫中的時間精度有到秒，但是只需顯示時跟分，所以要拆字串
                                                $new_start_time = explode(':', $startTime)[0].':'.explode(':', $startTime)[1];
                                                $new_end_time = explode(':', $catch['end_time'])[0].':'.explode(':', $catch['end_time'])[1];
                                                $new_total_time = explode(':', $catch['total_time'])[0].':'.explode(':', $catch['total_time'])[1];
                                        ?>
                                            <!-- <tr style="border-color:#9dbfbb; border-width: 1px;"> -->
                                                <td><?php echo $catch['date']; ?></td>
                                                <td>
                                                    <?php 
                                                        echo $new_start_time; 
                                                        // echo $startTime; 
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php 
                                                        echo $new_end_time; 
                                                        // echo $catch['end_time']; 
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php 
                                                        echo $new_total_time;
                                                        // echo $catch['total_time']; 
                                                    ?>分鐘
                                                </td>
                                                <td>
                                                    <?php 
                                                        if($catch['wrong'] == null){echo '0';}
                                                        else{echo $catch['wrong'];}
                                                    ?>
                                                    次
                                                </td>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                        <!-- <tr style="border-color:#9dbfbb; border-width: 1px;">
                                            <td>2023/03/30</td>
                                            <td>12:00</td>
                                            <td>12:00</td>
                                            <td>20分鐘</td>
                                            <td>12次</td>
                                        </tr> -->

                                    </tbody>
                                </table>
                            </div>
                        </div>
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