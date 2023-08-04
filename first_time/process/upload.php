<?php
    session_start();
    if(isset($_SESSION["feedback_message"])) {
        echo $_SESSION["feedback_message"];
        unset($_SESSION["feedback_message"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    
</body>
</html>