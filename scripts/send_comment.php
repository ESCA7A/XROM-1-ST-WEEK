<?php

require "connect.php";

$author = $_POST["author"];
$comment = $_POST["comment"];
$arr = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];

for ($i = 0; $i < count($arr); $i++) {
    if (stristr($author, $arr[$i]) !== false) {
        exit('enter without numbers');
    }
}

$query = "INSERT INTO task1 VALUES (id,'$author','$comment',CURRENT_TIMESTAMP)";

if ($con->query($query) === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
