<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="passport">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
        if (isset($_POST['submit'])) {
            $passportName = $_FILES['passport']['name'];
            $passportTmp = $_FILES['passport']['tmp_name'];

            $passportInfo = pathinfo($passportName);
            $passportExtension = $passportInfo['extension'];
            $allowedExtension = ['jpg', 'png', 'bmp', 'jpeg'];

            $upload_directory = "uploads/";

            if($_FILES['passport']['error'] > 0) {
                echo "Something went wrong. Unable to upload file";
            }
            else if($_FILES['passport']['size'] > 5242880) {
                echo "File is too large. Please select maximum of 5MB";
            }
            else if(!in_array($passportExtension, $allowedExtension)) {
                echo "File extension ($passportExtension) is not allowed. Only ". implode(",", $allowedExtension)." are allowed";
            }
            else {
                $renameFile = date("YmdHis").'.png'; // 2023
                $finalFilePath = $upload_directory.$passportName; //Real file name
                $finalFilePath = $upload_directory.$renameFile; //Modified file name
                $isMoveFile = move_uploaded_file($passportTmp, $finalFilePath);

                if($isMoveFile) {
                    echo "File uploaded successfully";
                } else {
                    echo "Error uploading file";
                }
            }

        }
    ?>
</body>
</html>