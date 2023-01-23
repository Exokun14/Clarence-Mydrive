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

                        <div id="upload-tab">

                            <div class="home-tab" id = "upload-assignment-tab">

                                <form id="upload-form" name="upload-assigment-form" enctype="multipart/form-data" action="../Backend/upload-assignment.php" method="POST">

                                    <fieldset>
                                        <legend>Upload Assignment</legend>

                                        <section>

                                            <p>
                                                Hi! Please browse for files using the button below to upload files onto the server. Thank you!
                                            </p>

                                            <p>
                                                <input type="file" name="assign-file" id="assign-file" />
                                            </p>

                                        </section>

                                    </fieldset>

                                    <footer>
                                        <label>
                                            <input type="submit" name="upload-assign" value="Upload"/>
                                        </label>
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

                                <form id="upload-form" name="upload-assigment-form" enctype="multipart/form-data" action="../Backend/upload-assignment.php" method="POST">

                                    <fieldset>
                                        <legend>Upload Quiz</legend>

                                        <section>

                                            <p>
                                                Hello
                                            </p>

                                            <p>
                                                <input type="file" name="assign-file" id="assign-file" />
                                            </p>

                                        </section>

                                    </fieldset>

                                    <footer>
                                        <label>
                                            <input type="submit" name="upload-assign" value="Upload"/>
                                        </label>
                                    </footer>

                                </form>

                            </div>

                            <div class="home-tab" id = "upload-assessment-tab">

                                <form id="upload-form" name="upload-assigment-form" enctype="multipart/form-data" action="../Backend/upload-assignment.php" method="POST">

                                    <fieldset>
                                        <legend>Upload Assessment</legend>

                                        <section>

                                            <p>
                                                Hello
                                            </p>

                                            <p>
                                                <input type="file" name="assign-file" id="assign-file" />
                                            </p>

                                        </section>

                                    </fieldset>

                                    <footer>
                                        <label>
                                            <input type="submit" name="upload-assign" value="Upload"/>
                                        </label>
                                    </footer>

                                </form>

                            </div>

                            <div class="home-tab" id = "upload-exam-tab">

                                <form id="upload-form" name="upload-assigment-form" enctype="multipart/form-data" action="../Backend/upload-assignment.php" method="POST">

                                    <fieldset>
                                        <legend>Upload Exam</legend>

                                        <section>

                                            <p>
                                                Hello
                                            </p>

                                            <p>
                                                <input type="file" name="assign-file" id="assign-file" />
                                            </p>

                                        </section>

                                    </fieldset>

                                    <footer>
                                        <label>
                                            <input type="submit" name="upload-assign" value="Upload"/>
                                        </label>
                                    </footer>

                                </form>

                            </div>

                            <div class="home-tab" id = "upload-project-tab">

                                <form id="upload-form" name="upload-assigment-form" enctype="multipart/form-data" action="../Backend/upload-assignment.php" method="POST">

                                    <fieldset>
                                        <legend>Upload Project</legend>

                                        <section>

                                            <p>
                                                Hello
                                            </p>

                                            <p>
                                                <input type="file" name="assign-file" id="assign-file" />
                                            </p>

                                        </section>

                                    </fieldset>

                                    <footer>
                                        <label>
                                            <input type="submit" name="upload-assign" value="Upload"/>
                                        </label>
                                    </footer>

                                </form>

                            </div>

                        <div>

                </div>

            </div>

        </div>

        <script src="../Javascript/home-tabs.js"></script>
        <script src="../Javascript/jquery-3.6.3.js"></script>

    </body>

</html>