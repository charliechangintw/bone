<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Stopwatch Web</title>
</head>
<body>
    <p id="timer">00:00:00</p>
    <button id="startPauseBtn" onclick="startPause()">Start</button>
    <button id="resetBtn" onclick="reset(); saveTimeToDatabase();">Reset</button>

    <!-- 添加隱藏的表單 -->
    <form id="timeForm" action="save_time.php" method="POST" style="display: none;">
        <input type="hidden" name="time" id="timeInput">
        <input type="submit" value="Submit">
    </form>

    <script>
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
            document.getElementById("startPauseBtn").textContent = "Pause";
        }

        function pauseTimer() {
            clearInterval(timerInterval);
            isRunning = false;
            document.getElementById("startPauseBtn").textContent = "Resume";
        }

        function reset() {
            clearInterval(timerInterval);
            elapsedTime = 0;
            isRunning = false;
            document.getElementById("startPauseBtn").textContent = "Start";
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
</body>
</html>
