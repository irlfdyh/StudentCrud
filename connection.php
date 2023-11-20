<?php
    $connection = mysqli_connect("localhost:3306", "root", "", "uk_student");

    if (!$connection) {
        die('Connection failed' . mysqli_connect_error());
    }