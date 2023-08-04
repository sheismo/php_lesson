<?php
    if(isset($_GET['name']) || isset($_GET['age'])) {
        echo "Hi ".$_GET['name']."<br>";
        echo "Your age is ".$_GET['age']." years";
        exit();
    }
?>

<html>
    <body>
        <form action="<?php $_PHP_SELF ?>"method="GET">
            Name: <input type="text" name="name" />
            <br>
            Age: <input type="text" name="age" />
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>