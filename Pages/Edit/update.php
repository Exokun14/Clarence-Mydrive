<?php

    if (isset($_POST['submit-assign'])) {
        updateAssign();
    } elseif (isset($_POST['submit-quiz'])) {
        updateQuiz();
    } elseif (isset($_POST['submit-assessment'])) {
        updateAssessment();
    } elseif (isset($_POST['submit-exam'])) {
        updateExam();
    } elseif (isset($_POST['submit-project'])) {
        updateProject();
    }

    function updateAssign() {

        require '../../Backend/database-connection.php';

        global $connection;
        $fileTitle = $_POST['assign-title'];
        $fileID = $_POST['assign-id'];

        $sql = "UPDATE `assignment` SET `Assign_Title`='". $fileTitle . "' 
        WHERE `Assign_ID` = $fileID";

        $connection->query($sql);

        header("Location: ../home.php");

    }

    function updateQuiz() {

        require '../../Backend/database-connection.php';

        global $connection;
        $fileTitle = $_POST['quiz-title'];
        $fileID = $_POST['quiz-id'];

        $sql = "UPDATE `quiz` SET `Quiz_Title`='". $fileTitle . "' 
        WHERE `Quiz_ID` = $fileID";

        $connection->query($sql);

        header("Location: ../home.php");

    }

    function updateAssessment() {

        require '../../Backend/database-connection.php';

        global $connection;
        $fileTitle = $_POST['assessment-title'];
        $fileID = $_POST['assessment-id'];

        $sql = "UPDATE `assessment` SET `Assessment_Title`='". $fileTitle . "' 
        WHERE `Assessment_ID` = $fileID";

        $connection->query($sql);

        header("Location: ../home.php");

    }

    function updateExam() {

        require '../../Backend/database-connection.php';

        global $connection;
        $fileTitle = $_POST['exam-title'];
        $fileID = $_POST['exam-id'];

        $sql = "UPDATE `exam` SET `Exam_Title`='". $fileTitle . "' 
        WHERE `Exam_ID` = $fileID";

        $connection->query($sql);

        header("Location: ../home.php");

    }

    function updateProject() {

        require '../../Backend/database-connection.php';

        global $connection;
        $fileTitle = $_POST['project-title'];
        $fileID = $_POST['project-id'];

        $sql = "UPDATE `project` SET `Project_Title`='". $fileTitle . "' 
        WHERE `Project_ID` = $fileID";

        $connection->query($sql);

        header("Location: ../home.php");

    }
?>