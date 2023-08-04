<?php
    include "config.php";

    if(isset($_POST['submit']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['gender']) ) {
        $first_name = $_POST["firstname"];
        $last_name = $_POST["lastname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $gender = $_POST["gender"];
    }

    $query = "INSERT INTO 'users' ('firstname', 'lastname', 'email', 'password', 'gender') VALUES ('$first_name', '$last_name', '$email', '$password', '$gender')";
    $result = $conn->query($query);

    if ($result == TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error:" - $query."<br>".$conn->error;
    }

    $conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<body>
    <h2>Sign up Form</h2>
        <form action="" method="post">
            <fieldset>
                <legend>Personal Information:</legend>

                <label for="firstname">First Name:</label>
                <input type="text" name="firstname" id="firstname" required><br><br>

                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" id="lastname" required><br><br>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required><br><br>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required><br><br>

                <label for="gender">Gender:</label>
                <input type="radio" name="gender" id="gender" value="Male" required>
                <input type="radio" name="gender" id="gender" value="Female" required><br><br><br><br>

                <input type="submit" name="submit" value="Submit">
            </fieldset>   
        </form>
</body>
</html>
