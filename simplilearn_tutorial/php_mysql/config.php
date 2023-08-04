<?php
    // if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    //     $con = mysqli_connect('localhost', 'root', '', 'simpli-tutorial') or die("Connection Failed: ".mysqli_connect_error());
    //     if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bgroup'])) {
    //         $name = $_POST['name'];
    //         $email = $_POST['email'];
    //         $phone = $_POST['phone'];
    //         $bgroup = $_POST['bgroup'];

            // $query = "INSERT INTO users (names, email, phone, bgroup) VALUES ('$name', '$email', '$phone', '$bgroup')";
            // $query_success = mysqli_query($con, $query);
            // if($query_success) {
            //     echo 'Entry Successful';
            // } else {
                // echo "Error occurred";
//             }
//         }
//     }

    $host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "mydb";

    $conn = new mysqli($host, $db_user, $db_pass, $db_name);
    if ($conn->connect_error) {
        die("Connection  failed:".$conn->connect_error);
    }
?>