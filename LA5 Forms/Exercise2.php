
<html>
<body>
<br>
First Grade is <?php echo $_POST["first"]; ?> <br>
Second Grade is <?php echo $_POST["second"]; ?> <br>
Third Grade is <?php echo $_POST["third"]; ?> <br>
Fourth Grade is <?php echo $_POST["fourth"]; ?> <br>
Fifth Grade is <?php echo $_POST["fifth"]; ?> <br> <br>

<?php

$sum = $_POST["first"] + $_POST["second"] + $_POST["third"] + $_POST["fourth"] + $_POST["fifth"];
$ave = $sum / 5;

$fail = 0;
if ($_POST["first"] < 70)  $fail+=1;
if ($_POST["second"] < 70)  $fail+=1;
if ($_POST["third"] < 70)  $fail+=1;
if ($_POST["fourth"] < 70)  $fail+=1;
if ($_POST["fifth"] < 70)  $fail+=1;
if ($fail == 0) {
    echo "The average is: " . $ave;
    echo "<br>";
} else {
    echo "The have " . $fail . " failing grade/s";
    echo "<br>";
}
?>
</body>
</html>

