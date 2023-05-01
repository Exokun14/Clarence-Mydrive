<?php
    session_start();
    require '../../Backend/database-connection.php';

    $title = $_POST['Award_Title'];
    $date = $_POST['Award_Date'];
    $description = $_POST['Description'];

    $accountNumber = $_SESSION['Account_Number'];

    $sql = "INSERT INTO awards(Account_Number, Award_Title, Description, Date)
    VALUES ('$accountNumber', '$title',  '$date',  '$description')";
    $connection->query($sql);

    header('Location: ../account-details.php');
?>