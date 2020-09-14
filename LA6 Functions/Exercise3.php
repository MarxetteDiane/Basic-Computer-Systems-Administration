
<html>
<body>
<br>
The Number is <?php echo $_POST["num"]; ?> <br> <br>

<?php

function factors() {
    for ($i=2; $i<= sqrt($_POST["num"]); $i++) {
        while ($_POST["num"]%$i == 0) {
            echo "<br>".$i;
            $_POST["num"]/=$i;
        }
    }
    if ($_POST["num"] > 2)
        echo "<br>".$_POST["num"];
}
if ($_POST["num"] < 2) {
    echo "Please enter a number greater than 2.";
} else {
    echo "Factors:";
    factors();
}
?>

</body>
</html>

