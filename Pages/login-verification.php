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


        $sql = "SELECT `Email` FROM `user_account` WHERE `Email` = '". $userName . "'" .
        "AND `Password` = '" . $userPassword . "'";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) 
        {
            getAccountDetails($userName, $userPassword);
            getPersonalDetails();
            header("Location: home-user.php");
        } 
        else 
        {
            header("Location: login.php");
        }

    }

    function getAccountDetails($userName, $userPassword) 
    {
        global $connection;

        $sql = "SELECT * FROM `user_account` WHERE `Email` = '". $userName . "'" .
        "AND `Password` = '" . $userPassword . "'";
        $result = $connection->query($sql);

        while($row = $result->fetch_assoc()) 
        {
            $_SESSION["Account_Number"] = $row["Account_Number"];
            $_SESSION["Email"] = $row["Email"];
        }
    }

    function getPersonalDetails() 
    {
        global $connection;

        $sql = "SELECT * FROM `personal_detail` WHERE `Account_Number` = '". $_SESSION["Account_Number"] . "'";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
                $_SESSION["First_Name"] = $row["First_Name"];
                $_SESSION["Last_Name"] = $row["Last_Name"];
                $_SESSION["Middle_Name"] = $row["Middle_Name"];
            }
        }
        else 
        {
            $_SESSION["First_Name"] = null;
            $_SESSION["Last_Name"] = null;
            $_SESSION["Middle_Name"] = null;
        }
    }

?>