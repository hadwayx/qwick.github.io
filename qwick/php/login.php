<?php

    $host = 'qwick';
    $username = 'root';
    $password = '';
    $userLogins = array();
    $userPasswords = array();

    // Connect to database
    $connection = mysqli_connect($host, $username, $password);

    // Check connection
    if (!$connection) die("Error : " . mysqli_error());

    echo "Connected to Database";

    $DBQuery = "USE Users";
    mysqli_query($connection, $DBQuery);

    // Select data from database
    $Query = "SELECT * FROM UsersData";

    if($result = mysqli_query($connection, $Query)) 
	{
		foreach($result as $row) {
			array_push($userLogins, $row['UserLogin']);
            array_push($userPasswords, $row['UserPassword']) ;
		}
	}

    for ($i = 0; $i < sizeof($userLogins); $i++)
    {
        for ($j = 0; $j < sizeof($userPasswords); $j++)
        {
            if ($userLogins[$i] == strval($_GET['login']))
            {
                if ($userPasswords[$j] == strval($_GET['password']))
                {
                    header("Location: http://qwick/index.php");
                }
            } else {
                echo "Такого аккаунта не существует! Зарегистрируйтесь.";
            }
        }
    }
    

    // Close connect
    mysqli_close($connection);

?>