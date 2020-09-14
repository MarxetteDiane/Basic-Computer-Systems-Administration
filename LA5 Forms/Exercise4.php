
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

if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    $sp = ($a+$b+$c)/2;
    $area = sqrt($sp*($sp-$a)*($sp-$b)*($sp-$c));
    echo "The sides satisfy the Triangle Inequality Theorem. 
    The semi-perimeter is ".$sp." units and the area is ".$area." sq. units.";
} else {
    echo "Not a triangle. No area to show.";
}
?>
</body>
</html>