<?php 

    $host = 'qwick';
    $username = 'root';
    $password = '';

    $userInputPassword = $_GET['newpassword'];
    
    $connection = mysqli_connect($host, $username, $password);

    if (!$connection) die("Error : " . mysqli_error());

    $DBQuery = "USE Users";
    mysqli_query($connection, $DBQuery);

    // Select data from database
    $Query = "SELECT * FROM UsersData";

    if($result = mysqli_query($connection, $Query)) 
	{
		foreach($result as $row) {
			$userLogin = $row['UserLogin'];
            $userPassword = $row['UserPassword'];
		}
	}

    $Query = "INSERT INTO UserData(UserLogin, UserPassword) VALUES ('$userLogin', '$userInputPassword')"

    if (mysqli_query($connection, $Query)) echo "Data Changed Successfully";
    else echo "Error : " . mysqli_error($connection);

?>