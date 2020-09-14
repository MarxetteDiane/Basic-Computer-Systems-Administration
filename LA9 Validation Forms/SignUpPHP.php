<html>
<head>
    <title>Registration Form</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<?php
//open the connection
$sqlConnect = mysqli_connect("localhost","root","");
if(!$sqlConnect) {
    die();
}

//choose the database
$selectDB = mysqli_select_db($sqlConnect,'DB1');
if(!$selectDB) {
    die("Can't find the database!".mysqli_error());
}
// define variables and set to empty values
$LastNameErr = $FirstNameErr = $UserNameErr = $PasswordErr = $CPasswordErr = $EmailErr = "";
$LastName = $FirstName = $UserName = $Password = $CPassword = $Email = "";
$username = "----";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["LastName"])) {
        $LastNameErr = "Last name is required";
    } else {
        $LastName = test_input($_POST["LastName"]);
    }

    if (empty($_POST["FirstName"])) {
        $FirstNameErr = "First name is required";
    } else {
        $FirstName = test_input($_POST["FirstName"]);
    }

    if (empty($_POST["UserName"])) {
        $UserNameErr = "UserName is required";
    } else {
        $UserName = test_input($_POST["UserName"]);
    }

    if (empty($_POST["Password"])) {
        $PasswordErr = "Password is required";
    } else {
        $Password = test_input($_POST["Password"]);
    }

    if (empty($_POST["CPassword"])) {
        $CPasswordErr = "Must confirm password";
    } else {
        $CPassword = test_input($_POST["CPassword"]);
    }

    if (empty($_POST["Email"])) {
        $EmailErr = "";
    } else {
        $Email = test_input($_POST["Email"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Sign Up</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Last Name: <input type="text" name="LastName">
    <span class="error">* <?php echo $LastNameErr;?></span>
    <br><br>
    First Name: <input type="text" name="FirstName">
    <span class="error">* <?php echo $FirstNameErr;?></span>
    <br><br>
    Email: <input type="text" name="Email">
    <span class="error">* <?php echo $EmailErr;?></span>
    <br><br>
    UserName: <input type="text" name="UserName">
    <span class="error">* <?php echo $UserNameErr;?></span>
    <br><br>
    Password: <input type="password" name="Password">
    <span class="error">* <?php echo $PasswordErr;?></span>
    <br><br>
    Confirm Password: <input type="password" name="CPassword">
    <span class="error">* <?php echo $CPasswordErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Register">
</form>
<form action= "LogIn.html">
    <input type="submit" value="Log In" />
</form>

<?php
$result_out = mysqli_query($sqlConnect,"select * from Records where UserName = '$UserName'");
while($VD=mysqli_fetch_array($result_out)) {
    $username = $VD["UserName"];
}

if ($UserName == $username) {
    echo "Username is not available.";
} else if ($Password == $CPassword) {
    $sql = "insert into Records (LastName,FirstName,UserName,Password,Email)
            values ('$LastName','$FirstName','$UserName','$Password','$Email')";
    mysqli_query($sqlConnect,$sql);
    echo "Successfully registered.";
} else {
    echo "Password does not match.";
}
?>

</body>
</html>