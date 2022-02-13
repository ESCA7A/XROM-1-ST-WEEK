<?php

require "connect.php";

$author = $_POST["author"];
$comment = $_POST["comment"];

for ($i = 0; $i < strlen($author)-1; $i++) {
    if (is_numeric($author[$i])) {
        exit('enter without numbers');
    }
}

$query = "INSERT INTO task1 VALUES (id,'$author','$comment',CURRENT_TIMESTAMP)";

if ($con->query($query) === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
