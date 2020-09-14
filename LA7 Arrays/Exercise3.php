<html>
<head>
    <title>Exercise 3</title>
</head>
<body>
<br>
<?php

function perfectSquare($value) {
    if ($value > 0 and $value <= 100) {
        $root = sqrt($value);
        return floor($root)*floor($root);
    }
    return "Value is not within 1-100.";
}

$arr = array (
        0 => array ("num" => $_POST["num1"], "square" => perfectSquare($_POST["num1"])),
        1 => array ("num" => $_POST["num2"], "square" => perfectSquare($_POST["num2"])),
        2 => array ("num" => $_POST["num3"], "square" => perfectSquare($_POST["num3"])),
        3 => array ("num" => $_POST["num4"], "square" => perfectSquare($_POST["num4"])),
        4 => array ("num" => $_POST["num5"], "square" => perfectSquare($_POST["num5"]))
);

for ($i = 0; $i < 5; $i++) {
    echo "<br>The perfect square closest to ".$arr[$i]["num"]." is ".$arr[$i]["square"];
}

?>


</body>
</html>