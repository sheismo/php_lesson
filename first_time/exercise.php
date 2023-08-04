<?php
    session_start();
   if(isset($_SESSION['error_message'])) {
        echo $_SESSION['error_message'];
        unset($_SESSION['error_message']);    
   }
?>

<form method="post" action="process/submit.php">
    <input type="text" name="quantity" placeholder="Enter quantity" >
    <button type="submit" name="generateQty">Submit</button>
</form>

<form action="process/submit.php" method="POST">
    <input type="text" name="email" placeholder="Enter your email">
    <select name="category">
        <option value="Student">Student</option>
        <option value="Employed">Employed</option>
        <option value="Unemployed">Unemployed</option>
    </select>
    <button type="submit" name="sendEmail">Submit</button>
</form>
