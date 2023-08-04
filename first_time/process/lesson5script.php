<?php
    session_start();

    if(isset($_POST["submit"])) {
        processUpload($_FILES["myvideo"]);
    }

    function processUpload(array $myVideo) {
        $video_name = $myVideo["name"];
        $video_tmp_location = $myVideo["tmp_name"];
        $video_type = pathinfo($video_name)["extension"];

        $upload_directory = "videos/";

        if ($myVideo["error"] > 0) {
            $_SESSION["message"] = "Error uploading file";
            header("location:".$_SERVER["HTTP_REFERER"]);
            die();
        } else if ($video_type !== "mp4") {
            $_SESSION["message"] = "Only mp.4 files allowed";
            header("location:".$_SERVER["HTTP_REFERER"]);
            die();
        } else {
            print_r ($video_type);
            if(!is_dir($upload_directory)) {
                mkdir($upload_directory);
            }

            $video_final_location = $upload_directory.$video_name;
            $file_upload_successful = move_uploaded_file($video_tmp_location, $video_final_location);

            if ($file_upload_successful) {
                $_SESSION["video"] = $video_final_location;
                $_SESSION["message"] = "Video uploaded successfully.";       
            } else {   
                $_SESSION["message"] = "Video not uploaded, try again";
            }
            header("location:".$_SERVER["HTTP_REFERER"]);
            die();
        }
        

    }
?>