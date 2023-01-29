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

        if ($_POST['archive-id'] == 0) {

            $assignID = $_POST['assign-id'];

            $sql = "UPDATE `assignment` SET `Archived`='1' WHERE `Assign_ID` = $assignID";

            $connection->query($sql);
            header("Location: home.php");

        } elseif ($_POST['archive-id'] == 1) {

            $assignID = $_POST['assign-id'];

            $sql = "UPDATE `assignment` SET `Archived`='0' WHERE `Assign_ID` = $assignID";

            $connection->query($sql);
            header("Location: home.php");

        }
    }

    function archiveQuiz() {
        global $connection;

        if ($_POST['archive-id'] == 0) {

            $quizID = $_POST['quiz-id'];

            $sql = "UPDATE `quiz` SET `Archived`='1' WHERE `Quiz_ID` = $quizID";

            $connection->query($sql);
            header("Location: home.php");

        } elseif ($_POST['archive-id'] == 1) {

            $quizID = $_POST['quiz-id'];

            $sql = "UPDATE `quiz` SET `Archived`='0' WHERE `Quiz_ID` = $quizID";

            $connection->query($sql);
            header("Location: home.php");

        }
    }

    function archiveAssessment() {
        global $connection;

        if ($_POST['archive-id'] == 0) {

            $assessmentID = $_POST['assessment-id'];

            $sql = "UPDATE `assessment` SET `Archived`='1' WHERE `Assessment_ID` = $assessmentID";

            $connection->query($sql);
            header("Location: home.php");

        } elseif ($_POST['archive-id'] == 1) {

            $assessmentID = $_POST['assessment-id'];

            $sql = "UPDATE `assessment` SET `Archived`='0' WHERE `Assessment_ID` = $assessmentID";

            $connection->query($sql);
            header("Location: home.php");

        }
    }

    function archiveExam() {
        global $connection;

        if ($_POST['archive-id'] == 0) {

            $examID = $_POST['exam-id'];

            $sql = "UPDATE `exam` SET `Archived`='1' WHERE `Exam_ID` = $examID";

            $connection->query($sql);
            header("Location: home.php");

        } elseif ($_POST['archive-id'] == 1) {

            $examID = $_POST['exam-id'];

            $sql = "UPDATE `exam` SET `Archived`='0' WHERE `Exam_ID` = $examID";

            $connection->query($sql);
            header("Location: home.php");

        }
    }

    function archiveProject() {
        global $connection;

        if ($_POST['archive-id'] == 0) {

            $projectID = $_POST['project-id'];

            $sql = "UPDATE `project` SET `Archived`='1' WHERE `Project_ID` = $projectID";

            $connection->query($sql);
            header("Location: home.php");

        } elseif ($_POST['archive-id'] == 1) {

            $projectID = $_POST['project-id'];

            $sql = "UPDATE `project` SET `Archived`='0' WHERE `Project_ID` = $projectID";

            $connection->query($sql);
            header("Location: home.php");

        }
    }
?>