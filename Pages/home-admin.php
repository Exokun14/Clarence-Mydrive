<?php
    session_start();
?>

<!DOCTYPE html>
<html>

    <meta name="viewport" content="width=decive-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/home-admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">


    <head>

    <div class="header">
            <h1 onclick="location.href='get-started.php'">LoL Drive</h1>

            <div class="login-header">

                <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 16 16'>
                    <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
                    <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z'/>
                </svg>
                <p id='login-header-text-b'>Welcome! Admin!</p>

                <div class="options"> 
                    <p onclick="location.href='logout.php'">LOG OUT</p>
                </div>

            </div>

    </div>

    </head>

    <body>

        <?php
            //require 'display.php';
            //require '../Backend/database-connection.php';
        ?>

        <div class="content">
            
            <div class="home-content-header">
                <h1>Actions Board<h1>
            </div>

            <div class="home-content">

                <div class="home-tabs-container">

                    <div class="container-a">

                        <div id="assignment" class="home-tabs">

                            <div class="home-tab-content">
                                <h3 id="home-tabs-header">ASSIGNMENTS</h3>

                                <img class="home-content-pic" src="../Pics/assignment.png"></img>

                                <p>You can access assignments here.</p>

                                <div class="get-started">
                                    <div class="get-started-button">
                                        <a href="Sub-Pages-Admin/assignment-admin.php" id="get-started-button">PROCEED</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="quiz" class="home-tabs">
                            <div class="home-tab-content">
                                <h3 id="home-tabs-header">QUIZZES</h3>

                                <img class="home-content-pic" src="../Pics/quiz.png"></img>

                                <p>You can access quizzes here.</p>

                                <div class="get-started">
                                    <div class="get-started-button">
                                        <a href="Sub-Pages/quiz-user.php" id="get-started-button">PROCEED</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="assessment" class="home-tabs">
                            <div class="home-tab-content">
                                <h3 id="home-tabs-header">ASSESSMENTS</h3>

                                <img class="home-content-pic" src="../Pics/assessment.png"></img>

                                <p>You can access assessments here.</p>

                                <div class="get-started">
                                    <div class="get-started-button">
                                        <a href="Sub-pages/assessment-user.php" id="get-started-button">PROCEED</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="container-b">

                        <div id="exam" class="home-tabs">
                            <div class="home-tab-content">
                                <h3 id="home-tabs-header">EXAMINATIONS</h3>

                                <img class="home-content-pic" src="../Pics/exam.png"></img>

                                <p>You can access exams here.</p>

                                <div class="get-started">
                                    <div class="get-started-button">
                                        <a href="Sub-Pages/exam-user.php" id="get-started-button">PROCEED</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="project" class="home-tabs">
                            <div class="home-tab-content">
                                <h3 id="home-tabs-header">PROJECTS</h3>

                                <img class="home-content-pic" src="../Pics/project.png"></img>

                                <p>You can access projects here.</p>

                                <div class="get-started">
                                    <div class="get-started-button">
                                        <a href="Sub-Pages/project-user.php" id="get-started-button">PROCEED</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="user" class="home-tabs">
                            <div class="home-tab-content">
                                <h3 id="home-tabs-header">USERS</h3>

                                <img class="home-content-pic" src="../Pics/userIcon.png"></img>

                                <p>You can access user details here.</p>

                                <div class="get-started">
                                    <div class="get-started-button">
                                        <a href="Sub-Pages/project-user.php" id="get-started-button">PROCEED</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <script src="../Javascript/home-user.js"></script>

    </body>

</html>