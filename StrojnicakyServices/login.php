<?php require 'resources.php';

$login = htmlspecialchars($_GET["login"]);
$password = htmlspecialchars($_GET["password"]);

$login1 = $conn->real_escape_string($login);
$password1 = $conn->real_escape_string($password);

    $sql = "SELECT * FROM `users` where login = '$login1' and password = '$password1'"; //where login = ? and password = ?

    $result = $conn->query($sql);
    $rows = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    } 
    print json_encode($rows);
    $conn->close();
?>

