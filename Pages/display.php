<?php
    function displayAssignment() {
        require '../Backend/database-connection.php';

        global $connnection;

        $sql = "SELECT `Assign_No`, `Assign_Title`, `Assign_Type`, `Content`, `Upload_By`, 
        `Upload_Date`, `User_ID` FROM `assignment`";

        $result = $connection->query($sql);

        echo "<table>" .
        "<td>Assign_No</td>" .
        "<td>Assign_Title</td>" .
        "<td>Assign_Type</td>" .
        "<td>Content</td>" .
        "<td>Upload_By</td>" .
        "<td>Upload_Date</td>" .
        "<td>Actions</td>";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>".
                    "<td>" . $row['Assign_No'] . "</td>" .
                    "<td>" . $row['Assign_Title'] . "</td>" .
                    "<td>" . $row['Assign_Type'] . "</td>" .
                    "<td>" . $row['Content'] . "</td>" .
                    "<td>" . $row['Upload_By'] . "</td>" .
                    "<td>" . $row['Upload_Date'] . "</td>" .
                    "<td>" .
                        "<button>View</button></br>" .
                        "<button>Edit</button></br>" .
                        "<button>Archive</button></br>" .
                        "<a href='../Uploads/Assignments/" . $row['Content'] . "' download>Download</a></br>".
                    "</td>" .
                    "</tr>";
            }
        
            echo "</table>";
            
        } else {
            echo "<p>Assignments go here..</p>";
        }
        
    }

    function displayQuiz() {
        require '../Backend/database-connection.php';

        global $connnection;

        $sql = "SELECT `Quiz_No`, `Quiz_Title`, `Quiz_Type`, `Content`, `Upload_By`, 
        `Upload_Date`, `User_ID` FROM `quiz`";

        $result = $connection->query($sql);


        echo "<table>" .
        "<td>Quiz_No</td>" .
        "<td>Quiz_Title</td>" .
        "<td>Quiz_Type</td>" .
        "<td>Content</td>" .
        "<td>Upload_By</td>" .
        "<td>Upload_Date</td>" .
        "<td>Actions</td>";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>".
                    "<td>" . $row['Quiz_No'] . "</td>" .
                    "<td>" . $row['Quiz_Title'] . "</td>" .
                    "<td>" . $row['Quiz_Type'] . "</td>" .
                    "<td>" . $row['Content'] . "</td>" .
                    "<td>" . $row['Upload_By'] . "</td>" .
                    "<td>" . $row['Upload_Date'] . "</td>" .
                    "<td>" .
                        "<button>View</button></br>" .
                        "<button>Edit</button></br>" .
                        "<button>Archive</button></br>" .
                        "<a href='../Uploads/Quizzes/" . $row['Content'] . "' download>Download</a></br>".
                    "</td>" .
                    "</tr>";
            }
        
            echo "</table>";
            
        } else {
            echo "<p>Quizzes go here..</p>";
        }
       
    }

    function displayAssessment() {
        require '../Backend/database-connection.php';

        global $connnection;

        $sql = "SELECT `Assessment_No`, `Assessment_Title`, `Assessment_Type`, `Content`, `Upload_By`, 
        `Upload_Date`, `User_ID` FROM `assessment`";

        $result = $connection->query($sql);

        echo "<table>" .
        "<td>Assessment_No</td>" .
        "<td>Assessment_Title</td>" .
        "<td>Assessment_Type</td>" .
        "<td>Content</td>" .
        "<td>Upload_By</td>" .
        "<td>Upload_Date</td>" .
        "<td>Actions</td>";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>".
                    "<td>" . $row['Assessment_No'] . "</td>" .
                    "<td>" . $row['Assessment_Title'] . "</td>" .
                    "<td>" . $row['Assessment_Type'] . "</td>" .
                    "<td>" . $row['Content'] . "</td>" .
                    "<td>" . $row['Upload_By'] . "</td>" .
                    "<td>" . $row['Upload_Date'] . "</td>" .
                    "<td>" .
                        "<button>View</button></br>" .
                        "<button>Edit</button></br>" .
                        "<button>Archive</button></br>" .
                        "<a href='../Uploads/Assessments/" . $row['Content'] . "' download>Download</a></br>".
                    "</td>" .
                    "</tr>";
            }
        
            echo "</table>";
            
        } else {
            echo "<p>Assessments go here..</p>";
        }
       
    }

    function displayExam() {
        require '../Backend/database-connection.php';

        global $connnection;

        $sql = "SELECT `Exam_No`, `Exam_Title`, `Exam_Type`, `Content`, `Upload_By`, 
        `Upload_Date`, `User_ID` FROM `exam`";

        $result = $connection->query($sql);


        echo "<table>" .
        "<td>Exam_No</td>" .
        "<td>Exam_Title</td>" .
        "<td>Exam_Type</td>" .
        "<td>Content</td>" .
        "<td>Upload_By</td>" .
        "<td>Upload_Date</td>" .
        "<td>Actions</td>";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>".
                    "<td>" . $row['Exam_No'] . "</td>" .
                    "<td>" . $row['Exam_Title'] . "</td>" .
                    "<td>" . $row['Exam_Type'] . "</td>" .
                    "<td>" . $row['Content'] . "</td>" .
                    "<td>" . $row['Upload_By'] . "</td>" .
                    "<td>" . $row['Upload_Date'] . "</td>" .
                    "<td>" .
                        "<button>View</button></br>" .
                        "<button>Edit</button></br>" .
                        "<button>Archive</button></br>" .
                        "<a href='../Uploads/Exams/" . $row['Content'] . "' download>Download</a></br>".
                    "</td>" .
                    "</tr>";
            }
        
            echo "</table>";
            
        } else {
            echo "<p>Exams go here..</p>";
        }
       
    }

    function displayProject() {
        require '../Backend/database-connection.php';

        global $connnection;

        $sql = "SELECT `Project_No`, `Project_Title`, `Project_Type`, `Content`, `Upload_By`, 
        `Upload_Date`, `User_ID` FROM `project`";

        $result = $connection->query($sql);

        echo "<table>" .
        "<td>Project_No</td>" .
        "<td>Project_Title</td>" .
        "<td>Project_Type</td>" .
        "<td>Content</td>" .
        "<td>Upload_By</td>" .
        "<td>Upload_Date</td>" .
        "<td>Actions</td>";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>".
                    "<td>" . $row['Project_No'] . "</td>" .
                    "<td>" . $row['Project_Title'] . "</td>" .
                    "<td>" . $row['Project_Type'] . "</td>" .
                    "<td>" . $row['Content'] . "</td>" .
                    "<td>" . $row['Upload_By'] . "</td>" .
                    "<td>" . $row['Upload_Date'] . "</td>" .
                    "<td>" .
                        "<button>View</button></br>" .
                        "<button>Edit</button></br>" .
                        "<button>Archive</button></br>" .
                        "<a href='../Uploads/Projects/" . $row['Content'] . "' download>Download</a></br>".
                    "</td>" .
                    "</tr>";
            }
        
            echo "</table>";
            
        } else {
            echo "<p>Projects go here..</p>";
        }
       
    }
?>