<html>
<head>
    <title>Exercise 4</title>
</head>
<body>
<br>
<?php

$arr = array (
    0 => array ("ProductID" => $_POST["id1"],
                "ProductName" => $_POST["name1"],
                "ProductPrice" => $_POST["price1"],
                "StocksLeft" => $_POST["stocks1"]),
    1 => array ("ProductID" => $_POST["id2"],
                "ProductName" => $_POST["name2"],
                "ProductPrice" => $_POST["price2"],
                "StocksLeft" => $_POST["stocks2"]),
    2 => array ("ProductID" => $_POST["id3"],
                "ProductName" => $_POST["name3"],
                "ProductPrice" => $_POST["price3"],
                "StocksLeft" => $_POST["stocks3"]),
    3 => array ("ProductID" => $_POST["id4"],
                "ProductName" => $_POST["name4"],
                "ProductPrice" => $_POST["price4"],
                "StocksLeft" => $_POST["stocks4"])
);

$byPrice = array_column($arr,"ProductPrice");
array_multisort($byPrice,SORT_DESC,$arr);

echo "Products arranged by price in descending order<br>";

for ($i = 0; $i < 4; $i++) {
    echo "<br>".$arr[$i]["ProductName"]." (".$arr[$i]["ProductID"].") costs Php ".number_format((float)$arr[$i]["ProductPrice"],2,'.','')." with ".$arr[$i]["StocksLeft"]." stocks left";
}

$byStocks = array_column($arr,"StocksLeft");
array_multisort($byStocks,SORT_ASC,$arr);

echo "<br><br>Products arranged by stocks left in ascending order<br>";

for ($i = 0; $i < 4; $i++) {
    echo "<br>".$arr[$i]["ProductName"]." (".$arr[$i]["ProductID"].") costs Php ".number_format((float)$arr[$i]["ProductPrice"],2,'.','')." with ".$arr[$i]["StocksLeft"]." stocks left";
}

?>

</body>
</html>