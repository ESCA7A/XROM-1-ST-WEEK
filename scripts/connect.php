<?php

$con = mysqli_connect('localhost', 'mysql', 'mysql', 'testdb2');
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

if (mysqli_errno($con)) {
    echo 'Field to connect : ' . mysqli_error($con);
}
