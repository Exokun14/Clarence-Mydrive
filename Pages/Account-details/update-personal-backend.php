<?php
    session_start();
    require '../../Backend/database-connection.php';

    $sql = "SELECT * FROM `personal_detail` WHERE `Account_Number` = '". $_SESSION['Account_Number'] . "'";
    $result = $connection->query($sql);

    $Fname = $_POST['Fname'];
    $Mname = $_POST['Mname'];
    $Lname = $_POST['Lname'];

    if($result->num_rows > 0) 
    {
        while ($row = $result->fetch_assoc()) 
        {
            if($row['First_Name'])
            {
                $_SESSION['First_Name'] = $Fname;
                $query = "UPDATE `personal_detail` SET `First_Name`='". $Fname . "' 
                WHERE `Account_Number` = '" . $_SESSION['Account_Number'] . "'";
                $connection->query($query);
            }
            else
            {
                $_SESSION['First_Name'] = $Fname;
                $query = "UPDATE `personal_detail` SET `First_Name`='". $Fname . "' 
                WHERE `Account_Number` = '" . $_SESSION['Account_Number'] . "'";
                $connection->query($query);
            }

            if($row['Middle_Name'])
            {
                $_SESSION['Middle_Name'] = $Mname;
                $query = "UPDATE `personal_detail` SET `Middle_Name`='". $Mname . "' 
                WHERE `Account_Number` = '" . $_SESSION['Account_Number'] . "'";
                $connection->query($query);
            }
            else
            {
                $_SESSION['Middle_Name'] = $Mname;
                $query = "UPDATE `personal_detail` SET `Middle_Name`='". $Mname . "' 
                WHERE `Account_Number` = '" . $_SESSION['Account_Number'] . "'";
                $connection->query($query);
            }

            if($row['Last_Name'])
            {
                $_SESSION['Last_Name'] = $Lname;
                $query = "UPDATE `personal_detail` SET `Last_Name`='". $Lname . "' 
                WHERE `Account_Number` = '" . $_SESSION['Account_Number'] . "'";
                $connection->query($query);
            }
            else
            {
                $_SESSION['Last_Name'] = $Lname;
                $query = "UPDATE `personal_detail` SET `Last_Name`='". $Lname . "' 
                WHERE `Account_Number` = '" . $_SESSION['Account_Number'] . "'";
                $connection->query($query);
            }
        }

        header('Location: ../account-details.php');
    }
    else
    {
        $accountNumber = $_SESSION['Account_Number'];
        $sql = "INSERT INTO personal_detail(Account_Number, First_Name, Middle_Name, Last_Name)
        VALUES ('$accountNumber', '$Fname',  '$Mname',  '$Lname')";
        $connection->query($sql);

        $_SESSION['First_Name'] = $Fname;
        $_SESSION['Middle_Name'] = $Mname;
        $_SESSION['Last_Name'] = $Lname;

        header('Location: ../account-details.php');
    }
?>