<?php
    require '../Backend/database-connection.php';

    session_start();

    if(isset($_POST['login-form-submit'])) 
    {
        verifyLogin();
    }

    function verifyLogin() 
    {
        global $connection;
        $userName = $_POST['user-name'];
        $userPassword = $_POST['user-password'];


        $sql = "SELECT `Email` FROM `admin_account` WHERE `Email` = '". $userName . "'" .
        "AND `Password` = '" . $userPassword . "'";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) 
        {
            getAccountDetails($userName, $userPassword);
            header("Location: home-admin.php");
        } 
        else 
        {
            header("Location: login-admin.php");
        }
    }

    function getAccountDetails($userName, $userPassword) 
    {
        global $connection;

        $sql = "SELECT * FROM `admin_account` WHERE `Email` = '". $userName . "'" .
        "AND `Password` = '" . $userPassword . "'";
        $result = $connection->query($sql);

        while($row = $result->fetch_assoc()) 
        {
            $_SESSION["Account_Number"] = $row["Account_Number"];
            $_SESSION["Email"] = $row["Email"];
        }
    }

?>