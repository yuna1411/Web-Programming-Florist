<?php

    $databaseHost = 'localhost';
    $databaseName = 'businessprofile';
    $databaseUsername ='root';
    $databasePassword = '';

    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    if(!$mysqli){
        die("Gagal Terkoneksi!");
    } 
?>