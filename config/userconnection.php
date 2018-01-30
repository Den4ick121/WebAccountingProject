<?php
include "dbconfig.php";

$conn = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);
if ($conn->connect_error) {
  die($conn->connect_error);
}

function checkLogin($uusername, $upassword) {
    global $conn;
    $query  = "SELECT * FROM User";
    $result = $conn->query($query);

    if (!$result) {
        die($conn->error);
    }
    if($result->num_rows > 0){
    while($row = mysqli_fetch_array($result)) {
        
        if ($row['username']==$uusername && $row['userpassword']==$upassword) {
            return true;
        }
    }
    }
    return false;
}

?>