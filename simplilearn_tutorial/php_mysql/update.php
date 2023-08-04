<?php
    include "config.php";

    if(isset($_POST['update'])) {
        $user_id = $POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];

        $query = "UPDATE 'users' SET 'firstname' = '$firstname', 'lastname' = '$lastname', 'email' = '$email', 'password' = '$password', 'gender' = '$gender' WHERE 'id' = '$user_id'";
        $result = $conn->query($query);

        if ($result == TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: ".$query."<br>".$conn->connect_error;
        }
    }

    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];

        $query = "SELECT * FROM 'users' WHERE 'id' = '$user_id'";
        $result = $conn->query($query);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $user_id = $row['id'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $email = $row['email'];
                $gender = $row['gender'];
                $password = $row['password'];
            }
        ?>
            <h2>User Update Form</h2>
            <form action="" method="post">
                <fieldset>
                    <legend>Personal Information:</legend>

                    <label for="firstname">First Name:</label>
                    <input type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>" required>
                    <input type="hidden" name="user_id" value="<?php echo $id; ?>"><br><br>

                    <label for="lastname">Last Name:</label>
                    <input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>" required><br><br>

                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?php echo $email; ?>" required><br><br>

                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" value="<?php echo $password; ?>" required><br><br>

                    <label for="gender">Gender:</label>
                    <input type="radio" name="gender" id="gender" value="Male" <?php if($gender == 'Male') { echo "checked"; } ?> required>
                    <input type="radio" name="gender" id="gender" value="Female" <?php if($gender == 'Female') { echo "checked"; } ?> required><br><br>

                    <input type="submit" name="submit" value="Submit">
                </fieldset>   
            </form>
    <?php        
        } else {
            // If the id value is not valid, redirect the user back to view.php page
            header('Location: view.php');
        }
    }
?>