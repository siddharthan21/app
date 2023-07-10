<?php
function load_templete($name) {
    include $_SERVER["DOCUMENT_ROOT"]."/app/templete/$name.php";

} 

function valid_login($username,$password){
    
    if($username =="sid@abc.com" and $password =="12345"){
        return true;
    }
    else{
        return false;
    }
}

function siginup($username, $password, $email, $phone)
{
    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "my-secret-password";
    $dbname = "auth";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO authen (username, password, email, phoneno, blocked,active)
VALUES ('$username', '$password' , '$email' ,'$phone', '0', '1')";
if ($conn->query($sql) === TRUE) {
 $result = true;
} else {
    $result = false;
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
return $result;
}
?>
