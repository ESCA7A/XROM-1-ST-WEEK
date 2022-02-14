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

try {
if ($con->query($query) === true) {

    print("New record created successfully");
    
} else {
    echo "Error: " . $con->error;
}

} catch (Exception $e) {
    echo ($e->getMessage());
}
