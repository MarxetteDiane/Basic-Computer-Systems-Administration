
<html>
<body>
<br>
First Number is <?php echo $_POST["num1"]; ?> <br>
Second Number is <?php echo $_POST["num2"]; ?> <br> <br>

<?php

function evenSum($sum) {
    for ($i=$_POST["num1"]+1; $i<$_POST["num2"]; $i++) {
        if ($i%2 == 0) {
            $sum = $sum + $i;
        }
    }
    return $sum;
}
$sum = 0;


echo "Sum of all even integers in (".$_POST["num1"].", ".$_POST["num2"].") is ".evenSum($sum);
?>


</body>
</html>

