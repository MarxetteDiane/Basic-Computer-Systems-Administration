
<html>
<body>
<br>
a is <?php echo $_POST["a"]; ?> <br>
b is <?php echo $_POST["b"]; ?> <br>
c is <?php echo $_POST["c"]; ?> <br> <br>

<?php

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
$D = ($_POST["b"]*$_POST["b"]) - (4 * $_POST["a"] * $_POST["c"]);

if ($D == 0) {
    $root = (-$b + sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
    echo "Number of Real roots: 1";
    echo "<br>Real Roots: ".$root;
} else if ($D < 0) {
    echo "No real root/s";
    echo "<br>";
} else if ($D > 0) {
    $root1 = (-$b + sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
    $root2 = (-$b - sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
    echo "Number of Real roots: 2";
    echo "<br>Real Roots: ".$root1.", ".$root2;
    echo "<br>";
}

?>
</body>
</html>

