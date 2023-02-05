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
            require 'display.php';
            require '../Backend/database-connection.php';
        ?>

        <div class="home-content">

            <div class="user-profile">

                <img src="../Pics/profile.jpg" alt="" id="profile-picture">

                <div class="user-info">

                    <p id="user-number">
                        2020102399
                    </p>

                </div>

                <div class="user-info">

                    <p>
                        <img src="../Pics/person.png" alt="" class="icons">
                    </p>

                    <p id="user-info-data">
                        John Clarence O. Joven
                    </p>

                </div>

                <div class="user-info">

                    <p>
                        <img src="../Pics/course.png" alt="" class="icons">
                    </p>

                    <p id="user-info-data">
                        Bachelor of Science Major in Information Technology
                    </p>

                </div>

                <div class="user-info">

                    <p>
                        <img src="../Pics/location.png" alt="" class="icons">
                    </p>

                    <p id="user-info-data">
                        Paombong, Bulacan
                    </p>

                </div>

                <div class="user-info">

                    <p>
                        <img src="../Pics/phone.png" alt="" class="icons">
                    </p>

                    <p id="user-info-data">
                        09212684748
                    </p>

                </div>

            </div>

            <div class="home-tabs-container">

                <div class="home-tabs">

                    <p onclick="showAssignmentTab()" class="home-tab-buttons" id="assign-title">Assignments</p>
                    <p onclick="showQuizTab()" class="home-tab-buttons"  id="quiz-title">Quizzes</p>
                    <p onclick="showAssessmentTab()" class="home-tab-buttons" id="assessment-title">Assessments/Lab</p>
                    <p onclick="showExamTab()" class="home-tab-buttons" id="exam-title">Term Exams</p>
                    <p onclick="showProjectTab()" class="home-tab-buttons" id="project-title">Project</p>
                    <p onclick="showArchiveTab()" class="home-tab-buttons" id="archive-title">Archives</p>
                    <p onclick="showUploadTab()" class="home-tab-buttons" id="upload-title">Upload File</p>

                </div>

                <div class="home-tab-content">

                        <div class="home-tab" id="assign-tab">
                            
                            <div class="inner-tab-content" id="assignment-content">
                                "I am Ashe, Daughter of Grena! Warmother of the Avarosans!".
                            </div>
                            

                        </div>

                        <div class="home-tab" id="quiz-tab">

                            <div class="inner-tab-content" id="quiz-content">
                                "I am Ashe, Daughter of Grena! Warmother of the Avarosans!".
                            </div>
                            
                        </div>

                        <div class="home-tab" id="assessment-tab">

                            <div class="inner-tab-content" id="assessment-content">
                                "I am Ashe, Daughter of Grena! Warmother of the Avarosans!".
                            </div>

                        </div>

                        <div class="home-tab" id="exam-tab">

                            <div class="inner-tab-content" id="exam-content">
                                "I am Ashe, Daughter of Grena! Warmother of the Avarosans!".
                            </div>

                        </div>

                        <div class="home-tab" id="project-tab">

                            <div class="inner-tab-content" id="project-content">
                                "I am Ashe, Daughter of Grena! Warmother of the Avarosans!".
                            </div>

                        </div>

                        <div class="home-tab" id="archive-tab">

                            <div class="inner-tab-content">

                                <div id="archive-assignment">
                                    "I am Ashe, Daughter of Grena! Warmother of the Avarosans!".
                                    "Nasa 1 ka"
                                </div>

                                <div id="archive-quiz">
                                    "I am Ashe, Daughter of Grena! Warmother of the Avarosans!".
                                    "Nasa 2 ka"
                                </div>

                                <div id="archive-assessment">
                                    "I am Ashe, Daughter of Grena! Warmother of the Avarosans!".
                                    "Nasa 3 ka"
                                </div>

                                <div id="archive-exam">
                                    "I am Ashe, Daughter of Grena! Warmother of the Avarosans!".
                                    "Nasa 4 ka"
                                </div>

                                <div id="archive-project">
                                    "I am Ashe, Daughter of Grena! Warmother of the Avarosans!".
                                    "Nasa 5 ka"
                                </div>

                            </div>

                        </div>

                        <div id="upload-tab">

                            <div class="home-tab" id = "upload-assignment-tab">

                                <form id="upload-form" name="upload-assigment-form" enctype="multipart/form-data" action="../Backend/upload.php" method="POST">

                                    <fieldset>
                                        <legend>Upload Assignment</legend>

                                        <section>

                                            <p>
                                                <label for="assign-no">Assignment No. </label>
                                                <input type="int" name="assign-no"  maxlength="4" size="4" required/>

                                                <label>Assignment Title: </label>
                                                <input type="text" name="assign-title" maxlength="50" size="50" required/>
                                            </p>

                                        </section>

                                        <section>

                                            <p>
                                                <label for="assign-file">Upload File:</label>
                                                <input type="file" name="assign-file" id="assign-file" required/>
                                            </p>

                                        </section>

                                    </fieldset>

                                    <footer id="upload-button">

                                        <label for="upload-assign">Upload Assignment</label>
                                        <input type="submit" name="upload-assign" value="Upload"/>

                                    </footer>

                                </form>
                                <!--
                                <form name="upload-assigment-form" action="../Backend/download.php" method="POST">

                                    <footer>
                                        <label>
                                            <input type="submit" name="download-assign" value="Download"/>
                                        </label>
                                    </footer>

                                </form> -->

                            </div>

                            <div class="home-tab" id = "upload-quiz-tab">

                                <form id="upload-form" name="upload-quiz-form" enctype="multipart/form-data" action="../Backend/upload.php" method="POST">

                                    <fieldset>
                                        <legend>Upload Quiz</legend>

                                        <section>

                                            <p>
                                                <label for="quiz-no">Quiz No. </label>
                                                <input type="int" name="quiz-no"  maxlength="4" size="4" required/>

                                                <label>Quiz Title: </label>
                                                <input type="text" name="quiz-title" maxlength="50" size="50" required/>
                                            </p>

                                        </section>

                                        <section>

                                            <p>
                                                <label for="quiz-file">Upload File:</label>
                                                <input type="file" name="quiz-file" id="quiz-file" required/>
                                            </p>

                                        </section>

                                    </fieldset>

                                    <footer id="upload-button">

                                        <label for="upload-quiz">Upload Quiz</label>
                                        <input type="submit" name="upload-quiz" value="Upload"/>

                                    </footer>

                                </form>

                            </div>

                            <div class="home-tab" id = "upload-assessment-tab">

                                <form id="upload-form" name="upload-assessment-form" enctype="multipart/form-data" action="../Backend/upload.php" method="POST">

                                    <fieldset>
                                        <legend>Upload Assessment</legend>

                                        <section>

                                            <p>
                                                <label for="assessment-no">Assessment No. </label>
                                                <input type="int" name="assessment-no"  maxlength="4" size="4" required/>

                                                <label>Assessment Title: </label>
                                                <input type="text" name="assessment-title" maxlength="50" size="50" required/>
                                            </p>

                                        </section>

                                        <section>

                                            <p>
                                                <label for="assessment-file">Upload File:</label>
                                                <input type="file" name="assessment-file" id="assessment-file" required/>
                                            </p>

                                        </section>

                                    </fieldset>

                                    <footer id="upload-button">

                                        <label for="upload-assessment">Upload Assessment</label>
                                        <input type="submit" name="upload-assessment" value="Upload"/>

                                    </footer>

                                </form>

                            </div>

                            <div class="home-tab" id = "upload-exam-tab">

                                <form id="upload-form" name="upload-exam-form" enctype="multipart/form-data" action="../Backend/upload.php" method="POST">

                                    <fieldset>
                                        <legend>Upload Exam</legend>

                                        <section>

                                            <p>
                                                <label for="exam-no">Exam No. </label>
                                                <input type="int" name="exam-no"  maxlength="4" size="4" required/>

                                                <label>Exam Title: </label>
                                                <input type="text" name="exam-title" maxlength="50" size="50" required/>
                                            </p>

                                        </section>

                                        <section>

                                            <p>
                                                <label for="exam-file">Upload File:</label>
                                                <input type="file" name="exam-file" id="exam-file" required/>
                                            </p>

                                        </section>

                                    </fieldset>

                                    <footer id="upload-button">

                                        <label for="upload-exam">Upload Exam</label>
                                        <input type="submit" name="upload-exam" value="Upload"/>

                                    </footer>

                                </form>

                            </div>

                            <div class="home-tab" id = "upload-project-tab">

                                <form id="upload-form" name="upload-project-form" enctype="multipart/form-data" action="../Backend/upload.php" method="POST">

                                    <fieldset>
                                        <legend>Upload Project</legend>

                                        <section>

                                            <p>
                                                <label for="project-no">Project No. </label>
                                                <input type="int" name="project-no"  maxlength="4" size="4" required/>

                                                <label>Project Title: </label>
                                                <input type="text" name="project-title" maxlength="50" size="50" required/>
                                            </p>

                                        </section>

                                        <section>

                                            <p>
                                                <label for="project-file">Upload File:</label>
                                                <input type="file" name="project-file" id="project-file" required/>
                                            </p>

                                        </section>

                                    </fieldset>

                                    <footer id="upload-button">

                                        <label for="upload-project">Upload Assignment</label>
                                        <input type="submit" name="upload-project" value="Upload"/>

                                    </footer>

                                </form>

                            </div>
                            

                        <div>

                </div>

            </div>

        </div>

        <script>
            function displayAssignmentContent() {
                let content = "<?php displayAssignment() ?>";
                document.getElementById("assignment-content").innerHTML = content;
            }

            function displayQuizContent() {
                let content = "<?php displayQuiz() ?>";
                document.getElementById("quiz-content").innerHTML = content;
            }

            function displayAssessmentContent() {
                let content = "<?php displayAssessment() ?>";
                document.getElementById("assessment-content").innerHTML = content;
            }

            function displayExamContent() {
                let content = "<?php displayExam() ?>";
                document.getElementById("exam-content").innerHTML = content;
            }

            function displayProjectContent() {
                let content = "<?php displayProject() ?>";
                document.getElementById("project-content").innerHTML = content;
            }

            function displayAssignmentArchive() {
                let content = "<?php displayAssignmentArchive() ?>";
                document.getElementById("archive-assignment").innerHTML = content;
            }

            function displayQuizArchive() {
                let content = "<?php displayQuizArchive() ?>";
                document.getElementById("archive-quiz").innerHTML = content;
            }

            function displayAssessmentArchive() {
                let content = "<?php displayAssessmentArchive() ?>";
                document.getElementById("archive-assessment").innerHTML = content;
            }

            function displayExamArchive() {
                let content = "<?php displayExamArchive() ?>";
                document.getElementById("archive-exam").innerHTML = content;
            }

            function displayProjectArchive() {
                let content = "<?php displayProjectArchive() ?>";
                document.getElementById("archive-project").innerHTML = content;
            }

        </script>
        <script src="../Javascript/home-tabs.js"></script>

    </body>

</html>