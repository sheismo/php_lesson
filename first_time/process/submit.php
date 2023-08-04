<?php
session_start();

if(isset($_POST["generateQty"])) {
    $quantity = $_POST["quantity"];
    
    echo generatePin($quantity);

}

if(isset($_POST['sendEmail'])) {
    $userEmail = $_POST['email'];
    $validateEmail = filter_var($userEmail, FILTER_VALIDATE_EMAIL);

    if(!$validateEmail) {
        $_SESSION['error_message'] = "Invalid email address supplied"; //Create a session for error handling...
        header("location: ". $_SERVER['HTTP_REFERER']);
        die();
    }
    
    $sanitizeEmail = filter_var($validateEmail, FILTER_SANITIZE_EMAIL);
    echo "Message sent to:".$sanitizeEmail;

    $userCategory = $_POST['category'];
    echo "<br> You belong to the ". $userCategory." category";
}

function generatePin($quantity = 5) : String {
    
    $validateNumber = filter_var($quantity, FILTER_VALIDATE_INT);
    
    if(!$validateNumber) {
        $_SESSION['error_message'] = "Invalid character supplied"; //Create a session for error handling...
        header("location: ". $_SERVER['HTTP_REFERER']);
        die();
    }

    for($i = 1; $i <= $quantity; $i++) {
        $pin = mt_rand(1111, 9999).'-'.mt_rand(1001, 9099).'-'.mt_rand(1111, 9999).'-'.mt_rand(1001, 9999);
        $pinArray[] = $pin;
        // echo $i . " ==> " . $pin . "<br>";
    }
    return implode(",", $pinArray);
}

?>