<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.8.0/dist/tf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/posenet@2.2.1/dist/posenet.min.js"></script>

    <script>
        // 初始化 PoseNet
        let net;

        async function initPoseNet() {
        net = await posenet.load();
        console.log("PoseNet 已初始化");
        }

        // 在需要的地方呼叫 initPoseNet() 進行初始化
        initPoseNet();

        const videoElement = document.getElementById("video");
        const canvasElement = document.getElementById("canvas");
        const canvasContext = canvasElement.getContext("2d");

        async function estimatePoses() {
        const pose = await net.estimateSinglePose(videoElement);
        console.log(pose);
        // 在此處進行後續處理或顯示姿勢估計結果

        // 在 Canvas 上繪製姿勢結果
        drawPose(pose);
        }

        function drawPose(pose) {
        // 清除 Canvas
        canvasContext.clearRect(0, 0, canvasElement.width, canvasElement.height);

        // 在 Canvas 上繪製關鍵點和連接線
        pose.keypoints.forEach((keypoint) => {
            const { x, y } = keypoint.position;
            canvasContext.beginPath();
            canvasContext.arc(x, y, 5, 0, 2 * Math.PI);
            canvasContext.fillStyle = "red";
            canvasContext.fill();
        });

        pose.keypoints.forEach((keypoint) => {
            if (keypoint.part !== "nose") {
            const { x, y } = keypoint.position;
            canvasContext.beginPath();
            canvasContext.moveTo(x, y);
            canvasContext.lineTo(pose.keypoints[0].position.x, pose.keypoints[0].position.y);
            canvasContext.lineWidth = 2;
            canvasContext.strokeStyle = "red";
            canvasContext.stroke();
            }
        });

        // 循環呼叫姿勢估計函式
        requestAnimationFrame(estimatePoses);
        }

        // 開始進行姿勢估計
        navigator.mediaDevices.getUserMedia({ video: true })
        .then((stream) => {
            videoElement.srcObject = stream;
            videoElement.onloadedmetadata = () => {
            videoElement.play();
            estimatePoses();
            };
        })
        .catch((error) => {
            console.error("無法獲取視訊流:", error);
        });


    </script>
</head>
<body>
    <video id="video" width="640" height="480" autoplay></video>
    <canvas id="canvas" width="640" height="480"></canvas>

</body>
</html>