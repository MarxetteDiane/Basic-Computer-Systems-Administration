
<html>
<body>
<br>
First Number is <?php echo $_POST["num1"]; ?> <br>
Second Number is <?php echo $_POST["num2"]; ?> <br>
Third Number is <?php echo $_POST["num3"]; ?> <br> <br>

<?php

function median($a, $b, $c) {
    $med = array($a,$b,$c);
    sort($med);
    return $med[1];
}

echo "The median is ".median($_POST["num1"],$_POST["num2"],$_POST["num3"]).".";
?>

</body>
</html>

