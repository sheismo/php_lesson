<?php
    if(isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $operator = $_POST['operator'];
        $num3 = $_POST['num3'];

        $result = $num1." ".$operator." ".$num2;

        echo $result;
    }
?>