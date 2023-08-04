<?php
    include "config.php";

    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];

        $query = "DELETE FROM 'users' WHERE 'id' = '$user_id'";
        $result = $conn->query($query);

        if($result == TRUE) {
            echo "Record deleted successfully.";
        } else {
            echo "Error:" - $query."<br>"-$conn->error;
        }
    }
>?