//Check whether a number is divisible by 5
<html>
<body>
<br>
The Number is <?php echo $_POST["num"]; ?> <br> <br>

<?php

if ($_POST["num"] % 5 == 0) {
    echo "It is divisible by 5.";
} else {
    echo "It is not divisible by 5.";
}
?>
</body>
</html>