<?php

if(isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $operator = $_POST['operator'];
    $num2 = $_POST['num2'];

    $validateNum1 = filter_var($num1, FILTER_VALIDATE_FLOAT);
    $validateNum2 = filter_var($num2, FILTER_VALIDATE_FLOAT);

    if (!$validateNum1 OR !$validateNum2) {
        echo "Please provide 2 whole numbers";
    }
    else {
        switch ($operator){
            case '+':
                $result = $validateNum1 + $validateNum2;
            break;
            case '-':
                $result = $validateNum1 - $validateNum2;
            break;
            case '*':
                $result = $validateNum1 * $validateNum2;
            break;
            case '/':
                $result = round(($validateNum1 / $validateNum2), 2);
            break;
            default:
                $result = '' ;
            break;
        }
        echo (float) $result;
        // var_dump($result);
    }
}

?>

<form action="#" method="POST">
    <input type="text" name="num1" placeholder="Enter a number">
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="num2" placeholder="Enter another number">
    <button name="submit" >Submit</button>
</form>