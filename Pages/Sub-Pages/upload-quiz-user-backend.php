<?php
    session_start();
    
    require '../../Backend/database-connection.php';

    $uploadsDirectory = "../../Uploads/quiz-uploads-user";
    $counter = 0;
    $fileCount = $_POST['file-count'];
    $num = $_SESSION['num'];

    while ($counter < $fileCount) 
    {
        $user = $_SESSION['Account_Number'];
        $counter += 1;
        $file = $_FILES['file-' . strval($counter)]['name'];
        $tempName = $_FILES['file-' . strval($counter)]['tmp_name'];

        if ($file != null) 
        {
            $sql = "INSERT INTO upload_quiz(Quiz_ID, Upload_Category, Upload_Content, Uploaded_By)
            VALUES ('$num', 'Quiz',  '$file',  '$user')";

            if(mysqli_query($connection, $sql))
            {
                move_uploaded_file($tempName, $uploadsDirectory. '/' . $file);
            }
            
        }
    }

    header("Location: uploaded-quiz.php");
?>