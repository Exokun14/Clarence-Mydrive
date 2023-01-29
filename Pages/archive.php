<?php
    require '../Backend/database-connection.php';

    if(isset($_POST['archive-assignment-form'])) {

        archiveAssignment();

    } elseif (isset($_POST['archive-quiz-form'])) {

        archiveQuiz();

    } elseif (isset($_POST['archive-assessment-form'])) {

        archiveAssessment();

    } elseif (isset($_POST['archive-exam-form'])) {

        archiveExam();

    } elseif (isset($_POST['archive-project-form'])) {

        archiveProject();

    }

    function archiveAssignment() {
        global $connection;

        $assignID = $_POST['assign-id'];

        $sql = "UPDATE `assignment` SET `Archived`='1' WHERE `Assign_ID` = $assignID";

        $connection->query($sql);
        header("Location: home.php");
    }

    function archiveQuiz() {
        global $connection;

        $quizID = $_POST['quiz-id'];

        $sql = "UPDATE `quiz` SET `Archived`='1' WHERE `Quiz_ID` = $quizID";

        $connection->query($sql);
        header("Location: home.php");
    }

    function archiveAssessment() {
        global $connection;

        $assessmentID = $_POST['assessment-id'];

        $sql = "UPDATE `assessment` SET `Archived`='1' WHERE `Assessment_ID` = $assessmentID";

        $connection->query($sql);
        header("Location: home.php");
    }

    function archiveExam() {
        global $connection;

        $examID = $_POST['exam-id'];

        $sql = "UPDATE `exam` SET `Archived`='1' WHERE `Exam_ID` = $examID";

        $connection->query($sql);
        header("Location: home.php");
    }

    function archiveProject() {
        global $connection;

        $projectID = $_POST['project-id'];

        $sql = "UPDATE `project` SET `Archived`='1' WHERE `Project_ID` = $projectID";

        $connection->query($sql);
        header("Location: home.php");
    }
?>