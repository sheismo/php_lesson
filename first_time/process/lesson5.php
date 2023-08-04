<?php
    session_start();

    if(isset($_SESSION["message"])) {
        echo $_SESSION["message"];
        unset($_SESSION["message"]);
    }

    if(isset($_SESSION["video"])) {
        echo "<video style='width:500px;height:500px;margin:auto;' src='".$_SESSION["video"]."' controls autoplay></video>";
        unset($_SESSION["video"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            width: 50%;
            max-width:700px;
            padding: 10px;
            margin: 50px auto;
            border: 10px solid red;
        }
    </style>
</head>
<body>
    <div>
        <!-- <video src="video.mp4" controls autoplay></video> -->

        <form action="lesson5script.php" method="post" enctype="multipart/form-data">
            <input type="file" name="myvideo">
            <button name="submit" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>