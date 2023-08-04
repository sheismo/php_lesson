<?php
    if(isset($_REQUEST['name']) || isset($_REQUEST['age'])) {
        echo "HI ".$_REQUEST['name']."<br/>";
        echo "Your age is ".$_REQUEST['age']."<br>";

        exit();
    }
?>

<html>
    <body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
            Name: <input type="text" name="name" />
            <br>
            Age: <input type="text" name="age" />
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>