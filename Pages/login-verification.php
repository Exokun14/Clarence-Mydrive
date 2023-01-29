<?php

    if(isset($_POST['login-form-submit'])) {

        verifyLogin();

    }

    function verifyLogin() {

        require '../Backend/database-connection.php';

        global $connection;
        $userName = $_POST['user-name'];
        $userPassword = $_POST['user-password'];

        $sql = "SELECT `User_ID` FROM `profile` WHERE `Username` = '". $userName . "'" .
        "AND `Password` = '" . $userPassword . "'";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {

            header("Location: home.php");

        } else {

            header("Location: login.php");

        }

    }

?>