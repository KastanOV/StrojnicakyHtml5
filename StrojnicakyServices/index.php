<?php require 'resources.php';
    

    $sql = "SELECT * FROM `users` LIMIT 0, 100";
    $result = $conn->query($sql);
    $rows = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    } else {
        echo "0 results";
    }
    print json_encode($rows);
    $conn->close();

?>

