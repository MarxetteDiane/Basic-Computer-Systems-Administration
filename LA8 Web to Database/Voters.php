<?php
//open the connection
$sqlConnect = mysqli_connect("localhost","root","");
if(!$sqlConnect) {
    die();
}

//choose the database
$selectDB = mysqli_select_db($sqlConnect,'Data1');
if(!$selectDB) {
    die("Can't find the database!".mysqli_error());
}

?>

    <html>
    <head><title>Voters</title></head>
    <body>
    <h1>Voters Database</h1>

    <?php
    $VoterID = mysqli_real_escape_string($sqlConnect,$_REQUEST["VoterID"]);
    $LastName = mysqli_real_escape_string($sqlConnect,$_REQUEST["LastName"]);
    $FirstName = mysqli_real_escape_string($sqlConnect,$_REQUEST["FirstName"]);
    $Town = mysqli_real_escape_string($sqlConnect,$_REQUEST["Town"]);
    $Age = mysqli_real_escape_string($sqlConnect,$_REQUEST["Age"]);

    if ($Age >= 18) {
        $sql = "insert into VoterDetails (VoterID,LastName,FirstName,Town,Age)
            values ('$VoterID','$LastName','$FirstName','$Town','$Age')";
        mysqli_query($sqlConnect,$sql);
    } else echo "Under 18. Not allowed to register.<br><br>";

    $result_out = mysqli_query($sqlConnect,"select * from VoterDetails order by LastName ASC");

    if(!$result_out) {
        die();
    }

    while($VD=mysqli_fetch_array($result_out)) {
        $voterID = $VD["VoterID"];
        $lname = $VD["LastName"];
        $fname = $VD["FirstName"];
        $town = $VD["Town"];
        $age = $VD["Age"];
        echo $voterID . " " . $lname . " " . $fname . " " . $age . "<br>";
    }

    ?>

    </body>
    </html>

<?php
mysqli_close($sqlConnect);
?>