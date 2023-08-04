<?php
    session_start();

    if(isset($_POST['submit'])) {
        uploadFile($_FILES);
    }

    function uploadFile(array $uploadedInfo) {
        $uploadedInfo = $uploadedInfo['image'];
        $upload_directory = "images/";

        $imageName = $uploadedInfo["name"];
        $imageTempPath = $uploadedInfo["tmp_name"];

        $imageExtension = pathinfo($imageName)["extension"];
        $allowedExtensions = ['png', 'jpg', 'jpeg', 'bmp'];

        if($uploadedInfo["error"] > 0) {
            $_SESSION["feedback_message"]  = "Something went wrong, unable to upload file";
            header("location:".$_SERVER['HTTP_REFERER']);
            die();

        } else if ($uploadedInfo["size"] > 5242880) {
            $_SESSION["feedback_message"]  = "File size should not be larger than 5MB!";
            header("location:".$_SERVER['HTTP_REFERER']);
            die();

        } else if (!in_array($imageExtension, $allowedExtensions)) {
            $_SESSION["feedback_message"]  = "The extension ($imageExtension) is not allowed. Only "
            .implode(',', $allowedExtensions)
            ." are allowed";
            header("location:".$_SERVER['HTTP_REFERER']);
            die();

        } else {
            if(!is_dir($upload_directory)) {
               mkdir($upload_directory);
            }
            
            $imageFinalPath = $upload_directory.date("YmdHis").".png";
            $uploadSuccess = move_uploaded_file($imageTempPath, $imageFinalPath);  

            if($uploadSuccess) {
                $_SESSION["feedback_message"] = "File uploaded successfully.";
            } else {
                $_SESSION["feedback_message"] = "Error - could not upload file.";
            }

            header("location:".$_SERVER['HTTP_REFERER']);
            die();
        }
    }
?>
