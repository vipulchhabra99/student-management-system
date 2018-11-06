<?php

    $server='localhost';
    $user='vipul';
    $password='abcd@1234';
    $db='student-management';

    $conn=mysqli_connect($server,$user,$password,$db);


    if(!$conn)
    {
        die("CONNECTION FAILED ! : ".mysqli_connect_error());
    }