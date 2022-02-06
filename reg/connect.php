<?php

    $connect = mysqli_connect('localhost', 'root', '', 'registry');

    if (!$connect) {
        die('Error connect to DataBase');
    }