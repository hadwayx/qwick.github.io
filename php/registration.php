<?php

    $userInputLogin = $_GET['login'];
    $userInputPassword = $_GET['password'];
    $host = 'qwick';
    $username = 'root';
    $password = '';

    // Connect to database
    $connection = mysqli_connect($host, $username, $password);

    // Check connection
    if (!$connection) die("Error : " . mysqli_error());

    echo "Connected to Database";

    // Create database
    // $Query = "DROP Database Users";
    // mysqli_query($connection, $Query);

    // $Query = "CREATE Database Users";

    // if (mysqli_query($connection, $Query)) echo "Database Created Successfully";
    // else echo "Error : " . mysqli_error($connection);

    $DBQuery = "USE Users";
    mysqli_query($connection, $DBQuery);

    // Create table
    // $Query = "DROP Table UsersData";
    // mysqli_query($connection, $Query);

    // $Query = "CREATE Table UsersData(UserLogin VARCHAR(17), UserPassword VARCHAR(9))";

    // if (mysqli_query($connection, $Query)) echo "Table Created Successfully";
    // else echo "Error : " . mysqli_error($connection);

    // Insert data to database

    $Query = "INSERT INTO UsersData(UserLogin, UserPassword) VALUES ('$userInputLogin', '$userInputPassword')";

    if (mysqli_query($connection, $Query)) echo "Data Inserted Successfully";
    else echo "Error : " . mysqli_error($connection);

    // Close connect
    mysqli_close($connection);

?>