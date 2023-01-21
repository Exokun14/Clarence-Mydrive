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

                    <p onclick="showAssignmentTab()" id="assign-title">Assignments</p>
                    <p onclick="showQuizTab()" id="quiz-title">Quizzes</p>
                    <p onclick="showAssessmentTab()" id="assessment-title">Assessments/Lab</p>
                    <p onclick="showExamTab()" id="exam-title">Term Exams</p>
                    <p onclick="showProjectTab()" id="project-title">Project</p>
                    <p onclick="showUploadTab()" id="upload-title">Upload File</p>

                </div>

                <div class="home-tab-content">

                        <div id="assign-tab">

                            <p>Assignments go here</p>

                        </div>

                        <div id="quiz-tab">

                            <p>Quizzes go here</p>
                            
                        </div>

                        <div id="assessment-tab">

                            <p>Assessments go here</p>

                        </div>

                        <div id="exam-tab">

                            <p>Exams go here</p>

                        </div>

                        <div id="project-tab">

                            <p>Projects go here</p>

                        </div>

                        <div id="upload-tab">

                            <p>Uploads go here</p>

                        </div>

                </div>

            </div>

        </div>

        <script src="../Javascript/home-tabs.js"></script>

    </body>

</html>