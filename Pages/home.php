<!DOCTYPE html>
<html>

    <link rel="stylesheet" href="../Styles/main.css">

    <head>

        <div class="header">
            <h1>My Drive</h1>
            <p id="welcome-message">Welcome! Clarence Joven</p>
        </div>

    </head>

    <body>
        <?php
            require '../Backend/database-connection.php';
        ?>

        <div class="home-content">

            <div class="user-profile">

                <img src="../Pics/profile.jpg" alt="" id="profile-picture">

                <p>2020102399</p>
                <p>John Clarence O. Joven</p>
                <p>Bachelor of Science Major in Information Technology</p>
                <p>Paombong, Bulacan</p>
                <p>09212684748</p>

            </div>

            <div class="home-tabs-container">

                <div class="home-tabs">

                    <p onclick="showAssignmentTab()" class="home-tab-buttons" id="assign-title">Assignments</p>
                    <p onclick="showQuizTab()" class="home-tab-buttons"  id="quiz-title">Quizzes</p>
                    <p onclick="showAssessmentTab()" class="home-tab-buttons" id="assessment-title">Assessments/Lab</p>
                    <p onclick="showExamTab()" class="home-tab-buttons" id="exam-title">Term Exams</p>
                    <p onclick="showProjectTab()" class="home-tab-buttons" id="project-title">Project</p>
                    <p onclick="showUploadTab()" class="home-tab-buttons" id="upload-title">Upload File</p>

                </div>

                <div class="home-tab-content">

                        <div class="home-tab" id="assign-tab">

                            <p>Assignments go here</p>

                        </div>

                        <div class="home-tab" id="quiz-tab">

                            <p>Quizzes go here</p>
                            
                        </div>

                        <div class="home-tab" id="assessment-tab">

                            <p>Assessments go here</p>

                        </div>

                        <div class="home-tab" id="exam-tab">

                            <p>Exams go here</p>

                        </div>

                        <div class="home-tab" id="project-tab">

                            <p>Projects go here</p>

                        </div>

                        <div class="home-tab" id="upload-tab">

                            <p>Uploads go here</p>

                        </div>

                </div>

            </div>

        </div>

        <script src="../Javascript/home-tabs.js"></script>
        <script src="../Javascript/jquery-3.6.3.js"></script>

    </body>

</html>