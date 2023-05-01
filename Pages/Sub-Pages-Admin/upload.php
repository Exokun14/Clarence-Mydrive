<?php
    require '../../Backend/database-connection.php';

    session_start();

    if (isset($_POST['upload-assign'])) {
        uploadAssigment();
    } elseif (isset($_POST['upload-quiz'])) {
        uploadQuiz();
    } elseif (isset($_POST['upload-assessment'])) {
        uploadAssessment();
    } elseif (isset($_POST['upload-exam'])) {
        uploadExam();
    } elseif (isset($_POST['upload-project'])) {
        uploadProject();
    }

    function upload($table, $tableNo, $tableName, $tableType, $fileDestination, $tempName, $fileNo, $fileTitle, $fileDescription, $fileType, $fileName, $uploadedBy, $uploadedOn, $archived, $userID) {
        global $connection;

        $table = $table;
        $tableNo = $tableNo;
        $tableName = $tableName;
        $fileDescription = $fileDescription;
        $tableType = $tableType;

        $fileDestination = $fileDestination;
        $fileNo = $fileNo;
        $fileTitle = $fileTitle;
        $fileType;
        $fileName = $fileName;
        $uploadedBy = $uploadedBy;
        $uploadedOn = $uploadedOn;
        $archived = $archived;
        $userID - $userID;

        $uploadsDirectory = $fileDestination;
        move_uploaded_file($tempName, $uploadsDirectory. '/' . $fileName);

        $sql = "INSERT INTO $table($tableNo, $tableName, Description, $tableType, Content, Upload_By, Upload_Date, Archived, User_ID)
        VALUES ('$fileNo', '$fileTitle', '$fileDescription', '$fileType', '$fileName', '$uploadedBy',  '$uploadedOn',  '$archived',  '$userID')";

        if (mysqli_query($connection, $sql)) {
            
            header("Location: ../home-admin.php");

        } else {

            echo "not yehey";

        }


    }

    function uploadAssigment() {
        $table = "assignment";
        $tableNo = "Assign_No";
        $tableName = "Assign_Title";
        $tableType = "Assign_Type";

        $fileDestination = '../../Uploads/assign-uploads-admin';
        $fileNo = $_POST['assign-no'];
        $fileTitle = $_POST['assign-title'];
        $fileDescription = $_POST['description'];
        $fileName = $_FILES['assign-file']['name'];
        $tempName = $_FILES["assign-file"]["tmp_name"];
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $uploadedBy = $_SESSION['Account_Number'];
        date_default_timezone_set('Asia/Manila');
        $uploadedOn = date('d-m-y h:i:s');
        $archived = 0;
        $userID = $_POST['user-id'];

        upload($table, $tableNo, $tableName, $tableType, $fileDestination, $tempName, $fileNo, $fileTitle, $fileDescription, $fileType, $fileName, $uploadedBy, $uploadedOn, $archived, $userID);
    }

    function uploadQuiz() {
        $table = "quiz";
        $tableNo = "Quiz_No";
        $tableName = "Quiz_Title";
        $tableType = "Quiz_Type";

        $fileDestination = '../../Uploads/quiz-uploads-admin';
        $fileNo = $_POST['quiz-no'];
        $fileTitle = $_POST['quiz-title'];
        $fileDescription = $_POST['description'];
        $fileName = $_FILES['quiz-file']['name'];
        $tempName = $_FILES["quiz-file"]["tmp_name"];
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $uploadedBy = "Clarence Joven";
        date_default_timezone_set('Asia/Manila');
        $uploadedOn = date('d-m-y h:i:s');
        $archived = 0;
        $userID = $_POST['user-id'];

        upload($table, $tableNo, $tableName, $tableType, $fileDestination, $tempName, $fileNo, $fileTitle, $fileDescription, $fileType, $fileName, $uploadedBy, $uploadedOn, $archived, $userID);
    }

    function uploadAssessment() {
        $table = "assessment";
        $tableNo = "Assessment_No";
        $tableName = "Assessment_Title";
        $tableType = "Assessment_Type";

        $fileDestination = '../../Uploads/assessment-uploads-admin';
        $fileNo = $_POST['assessment-no'];
        $fileTitle = $_POST['assessment-title'];
        $fileDescription = $_POST['description'];
        $fileName = $_FILES['assessment-file']['name'];
        $tempName = $_FILES["assessment-file"]["tmp_name"];
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $uploadedBy = $_SESSION['Account_Number'];
        date_default_timezone_set('Asia/Manila');
        $uploadedOn = date('d-m-y h:i:s');
        $archived = 0;
        $userID= $_POST['user-id'];

        upload($table, $tableNo, $tableName, $tableType, $fileDestination, $tempName, $fileNo, $fileTitle, $fileDescription, $fileType, $fileName, $uploadedBy, $uploadedOn, $archived, $userID);
    }

    function uploadExam() {
        $table = "exam";
        $tableNo = "Exam_No";
        $tableName = "Exam_Title";
        $tableType = "Exam_Type";

        $fileDestination = '../../Uploads/exam-uploads-admin';
        $fileNo = $_POST['exam-no'];
        $fileTitle = $_POST['exam-title'];
        $fileDescription = $_POST['description'];
        $fileName = $_FILES['exam-file']['name'];
        $tempName = $_FILES["exam-file"]["tmp_name"];
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $uploadedBy = $_SESSION['Account_Number'];
        date_default_timezone_set('Asia/Manila');
        $uploadedOn = date('d-m-y h:i:s');
        $archived = 0;
        $userID= $_POST['user-id'];

        upload($table, $tableNo, $tableName, $tableType, $fileDestination, $tempName, $fileNo, $fileTitle, $fileDescription, $fileType, $fileName, $uploadedBy, $uploadedOn, $archived, $userID);
    }

    function uploadProject() {
        $table = "project";
        $tableNo = "Project_No";
        $tableName = "Project_Title";
        $tableType = "Project_Type";

        $fileDestination = '../../Uploads/project-uploads-admin';
        $fileNo = $_POST['project-no'];
        $fileTitle = $_POST['project-title'];
        $fileDescription = $_POST['description'];
        $fileName = $_FILES['project-file']['name'];
        $tempName = $_FILES["project-file"]["tmp_name"];
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $uploadedBy = $_SESSION['Account_Number'];
        date_default_timezone_set('Asia/Manila');
        $uploadedOn = date('d-m-y h:i:s');
        $archived = 0;
        $userID= $_POST['user-id'];

        upload($table, $tableNo, $tableName, $tableType, $fileDestination, $tempName, $fileNo, $fileTitle, $fileDescription, $fileType, $fileName, $uploadedBy, $uploadedOn, $archived, $userID);
    }
?>