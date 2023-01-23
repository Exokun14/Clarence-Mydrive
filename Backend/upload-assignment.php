<?php

    require 'database-connection.php';

    global $connection;

    $fileTitle = "Testing";
    $fileName = $_FILES["assign-file"]["name"];
    $tempName = $_FILES["assign-file"]["tmp_name"];

    $uploadsDirectory = '../Uploads/';

    move_uploaded_file($tempName, $uploadsDirectory. '/' . $fileName);

    $sql = "INSERT INTO test(Test_Name, Test_File) 
    VALUES ('$fileTitle', '$fileName')";
    
    //$stmt = $connection->prepare($sql);
    //$stmt->bind_param("sb", $fileTitle, $fileName);
    //$stmt->execute();

    if (mysqli_query($connection, $sql)) {
        echo "Yehey";
    } else {
        echo "not yehey";
    }
?>