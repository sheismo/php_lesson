<?php
    echo "My Homepage"."<br>";
    echo "The current time is: ".date('H:i:s', time())."<br>";
    
    // $current_time = $_SERVER['REQUEST_TIME'];
    // $expiry_time =  time() + 180;
    // $difference = $expiry_time - $current_time;
    // echo $difference;

    // file_put_contents("user_activity.txt", "user_log_time: ".$current_time . "\n", FILE_APPEND);
    // $user_log_time = nl2br(file_get_contents("log.txt"));

    // if ($expiry$user_log_time)

    // * this checks if the file exists & retrieves the time from it
    // * if the file does not exist, it creates it and adds the current time to it
    $filename = "log.txt";

    if (file_exists($filename)) {
        $savedTime = intval(file_get_contents($filename));
    } else {
        $savedTime = time();
        file_put_contents($filename, $savedTime);
    }

    $currentTime = time();
    $interval = 180;

    // * this will check if the current time exceeds the interval
    if ($currentTime - $savedTime >= 10) {
        echo 'hello world';
        // ! set a new time
        $newTime = time();
        file_put_contents($filename, $newTime);
    }

?>