
<html>
<body>
<br>
The first Number is <?php echo $_POST["num1"]; ?> <br>
The second Number is <?php echo $_POST["num2"]; ?> <br> <br>

<?php

function gcd() {
    $gcd = 1;
    for($i=1; $i<=$_POST["num1"] and $i <= $_POST["num2"]; $i++) {
        if($_POST["num1"]%$i==0 and $_POST["num2"]%$i==0) $gcd = $i;
    }
    if ($gcd == 1) echo "No common divisor";
    else echo "The greatest common divisor is ". $gcd;
}

if ($_POST["num1"] < 0) echo "<br>The first number is negative. Can't find a common divisor.";
else if ($_POST["num2"] < 0) echo "<br>The second number is negative. Can't find a common divisor.";
else {
    gcd();
}
?>

</body>
</html>

