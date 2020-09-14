<html>
<head>
    <title>Cabato, Marxette Diane G.</title>
</head>
<body>
<?php
//define variable and assign a value
$a = 3;
$b = 4;
$c = 5;
$s = ($a+$b+$c)/2;
echo "Area of a Triangle given the Three Sides<br><br>
        a = ".$a."<br>
        b = ".$b."<br>
        c = ".$c."<br><br>";
$area = sqrt($s*($s-$a)*($s-$b)*($s-$c));
echo "The semi-perimeter of the triangle is ".$s." units and its area is ".$area." sq. units.";
?>
</body>
</html>