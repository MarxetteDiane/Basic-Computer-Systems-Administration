<html>
<head>
    <title>Exercise 1</title>
</head>
<body>
<br>
The first number is: <?php echo $_POST["num1"]; ?> <br>
The second number is: <?php echo $_POST["num2"]; ?> <br>
The third number is: <?php echo $_POST["num3"]; ?> <br>
The fourth number is: <?php echo $_POST["num4"]; ?> <br>
The fifth number is: <?php echo $_POST["num5"]; ?> <br>

<?php

function sum($arr) {
    $sum = 0;
    for ($i =0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    return $sum;
}

function average($arr, $sum) {
    return $sum / count($arr);
}

$arr = array($_POST["num1"], $_POST["num2"], $_POST["num3"], $_POST["num4"], $_POST["num5"]);
sort($arr);
echo "<br>The sum is " . sum($arr);
echo "<br>The average of the inputs is " . average($arr,sum($arr));
echo "<br>The lowest value is " . $arr[0];

?>


</body>
</html>


