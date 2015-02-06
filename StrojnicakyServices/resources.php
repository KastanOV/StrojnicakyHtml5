<?php header('Access-Control-Allow-Origin: *');
    $servername = "wm29.wedos.net";
    $username = "a28170_jerabek";
    $password = "lithium1";
    $dbname = "d28170_jerabek";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    
//    $sql = "SELECT login,fname,lname,oec FROM `users` where login = ? and password = ?";
//
//    $stmt = $conn->prepare($sql);
//    $stmt->bind_param('ss',$login,$password);
//    
//    $stmt->execute();
//    $stmt->bind_result($col1,$col2,$col3,$col4);
//    echo "[";
//    while($stmt->fetch()) {
//        echo "{ \"name: \" ". $col1."";
//    }
//    $conn->close();
?>

