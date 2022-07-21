<?php
    $num1 = isset($_POST["num1"]) ?$_POST["num1"] : NULL;
    $num2 = isset($_POST["num2"]) ?$_POST["num2"] : NULL;

    $total = (int)$num1 + (int)$num2;
?>


<h1><?php echo $total;?></h1>
