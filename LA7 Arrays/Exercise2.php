<html>
<head>
    <title>Exercise 2</title>
</head>
<body>
<br>
The first number is: <?php echo $_POST["num1"]; ?> <br>
The second number is: <?php echo $_POST["num2"]; ?> <br>
The third number is: <?php echo $_POST["num3"]; ?> <br><br>

<?php

function divisible($value) {
    if (($value % 3 == 0) and ($value % 5 == 0)) {
        return true;
    }
    return false;
}

$arr = array($_POST["num1"], $_POST["num2"], $_POST["num3"]);

$count = 0;

for ($i=0; $i < count($arr); $i++) {
    if (divisible($arr[$i])) {
        echo $arr[$i]."<br>";
        $count++;
    }
}

echo "<br>".$count." numbers are divisible by 3 and 5.";

?>


</body>
</html>