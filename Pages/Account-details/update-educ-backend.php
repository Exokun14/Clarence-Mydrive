<?php
    session_start();
    require '../../Backend/database-connection.php';

    $sql = "SELECT * FROM `education` WHERE `Account_Number` = '". $_SESSION['Account_Number'] . "'";
    $result = $connection->query($sql);

    $secondary = $_POST['Secondary'];
    $tertiaryCourse = $_POST['Tertiary'];
    $tertiarySchool = $_POST['Tertiary_School'];
    $postGradCourse = $_POST['Post_Grad'];
    $postGradSchool = $_POST['Grad_School'];

    if($result->num_rows > 0) 
    {
        while ($row = $result->fetch_assoc()) 
        {
            if($row['Secondary'])
            {
                $query = "UPDATE `education` SET `Secondary`='". $secondary . "' 
                WHERE `Account_Number` = '" . $_SESSION['Account_Number'] . "'";
                $connection->query($query);
            }
            else
            {
                $query = "UPDATE `education` SET `Secondary`='". $secondary . "' 
                WHERE `Account_Number` = '" . $_SESSION['Account_Number'] . "'";
                $connection->query($query);
            }

            if($row['Tertiary_Course'])
            {
                $query = "UPDATE `education` SET `Tertiary_Course`='". $tertiaryCourse . "' 
                WHERE `Account_Number` = '" . $_SESSION['Account_Number'] . "'";
                $connection->query($query);
            }
            else
            {
                $query = "UPDATE `education` SET `Tertiary_Course`='". $tertiaryCourse . "' 
                WHERE `Account_Number` = '" . $_SESSION['Account_Number'] . "'";
                $connection->query($query);
            }

            if($row['Post_Graduate_Course'])
            {
                $query = "UPDATE `education` SET `Post_Graduate_Course`='". $postGradCourse . "' 
                WHERE `Account_Number` = '" . $_SESSION['Account_Number'] . "'";
                $connection->query($query);
            }
            else
            {
                $query = "UPDATE `education` SET `Post_Graduate_Course`='". $postGradCourse . "' 
                WHERE `Account_Number` = '" . $_SESSION['Account_Number'] . "'";
                $connection->query($query);
            }

            if($row['Post_Graduate_School'])
            {
                $query = "UPDATE `education` SET `Post_Graduate_School`='". $postGradSchool . "' 
                WHERE `Account_Number` = '" . $_SESSION['Account_Number'] . "'";
                $connection->query($query);
            }
            else
            {
                $query = "UPDATE `education` SET `Post_Graduate_School`='". $postGradSchool . "' 
                WHERE `Account_Number` = '" . $_SESSION['Account_Number'] . "'";
                $connection->query($query);
            }
        }

        header('Location: ../account-details.php');
    }
    else
    {
        $accountNumber = $_SESSION['Account_Number'];
        $sql = "INSERT INTO education(Account_Number, Secondary, Tertiary_Course, Tertiary_School, Post_Graduate_Course, Post_Graduate_School)
        VALUES ('$accountNumber', '$secondary',  '$tertiaryCourse', '$tertiarySchool',  '$postGradCourse', '$postGradSchool')";
        $connection->query($sql);

        header('Location: ../account-details.php');
    }
?>