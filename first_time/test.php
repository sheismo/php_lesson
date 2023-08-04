<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <?php
        echo "Hello world";
        echo "<br>"."<p>I am learning PHP</p>";
        echo "<strong>Please enter your name</strong>";
        if(!isset($_SESSION['user'])) {
            echo "
            <form action='try.php' method='POST'>
                <input id='name' name='username' type='text' placeholder='your name'>
                <input id='password' name='password' type='password' placeholder='your password'>
                <button id='btn'>Login</button>
            </form>";

        } else {
            $username = $_SESSION['user']['username'];
            echo "<p>Hey, $username</p>";
            echo "<a href='logout.php'>Logout</a>";
        }

        echo "<br>"."Hello "."<span id='greet'>user</span>"."<br>";
        # echo "Hello";
        /*
        This is a multiline comment
        in PHP
        */

        // variables
        $name = "John";
        echo $name."<br>";

        //constants
        define("age", 35);
        echo age;

        //data types
        $string = "This is PHP code";
        $int = 56;
        $x = 56.78;
        $y = true;
        $arr = [1, 2, 3, 4, 5];

        # variable scopes
        // global scope
        $person = "<p>John Mak</p>";
        function greetPerson () {
            global $person;
            echo $person;
        }
        greetPerson();

        //local scope
        $age = 89;
        function getAge() {
            $age = 67;
            echo $age;
        }
        getAge();

        // variable variables
        $text = "dog";
        $cat = "<p>It is a white cat</p>";
        $dog = "<p>It is a brown dog</p>";
        echo $$text;

        #Operators

        //Arithmetic Operators
        $a = 10;
        $b = 5;
        //addition
        echo $a + $b;
        //subtraction
        echo $a - $b;
        //multiplication
        echo $a * $b;
        //division
        echo $a / $b;

        // Form Handling

        $x = 56;
        $y = 78;
        
        
    ?>

    <script>
        // const userName = document.getElementById('name');
        // document.getElementById('btn').addEventListener('click', (event) => {
        //     if (userName.value !== '') {
        //         console.log('button clicked')
        //         console.log(userName.value)
        //         userName.value = ""
        //     } else {
        //         console.log('please enter your name')
        //     }
        // });
    </script>

</body>
</html>


<!-- // $gender = "Male";
// echo "I am a ".$gender . "<br>";
// echo "I am a $gender";

// $name = "Joe";
// echo "<br>".$name."<br>";

// $age = 70;

// $confirmAge = $age <= 50 ? true : false;
// var_dump($confirmAge);

// $price = (float) 5100.54;

// echo $price;

// $numbers = [1, 7, 10, 5, 8];

// print_r($numbers);

// $location = "ibadan";
// echo "<br>".$location; -->