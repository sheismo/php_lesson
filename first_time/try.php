<?php
session_start();
$data = [
    [
        "username" => "zainab",
        "password" => "1234"
    ],
    [
        "username" => "Test User 2",
        "password" => "1234"
    ]
];

$username = $_POST['username'];
$password = $_POST['password'];

// Validation & Sanitization

for($i = 0; $i < count($data); $i++ ) {
    if($data[$i]['username'] == $username){
        $user = $data[$i];
        break;
    }
}

if (isset($user)) {
    $_SESSION['user'] = $user;
    header("Location: test.php");
} else {
    echo "User not found";
}