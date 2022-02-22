<?php

$mode = "dev";

mysqli_report(MYSQLI_REPORT_ALL);
try {
  $con = mysqli_connect("localhost", "root", "5800", "testdb2");
  mysqli_set_charset($con, "utf8");

  mysqli_query($con, "
  CREATE TABLE IF NOT EXISTS `task1` (
    `id` int NOT NULL AUTO_INCREMENT,
    `author` varchar(255) CHARACTER SET utf8 NOT NULL,
    `comment` text CHARACTER SET utf8 NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
");
} catch (Exception $e) {
  http_response_code(500);
  if ($mode == "prod") {
    echo "Internal Server Error";
    // TODO: write $e->getMessage() to logfile
  } else {
    echo "Field to connect : " . $e->getMessage();
  }
  exit;
} 
