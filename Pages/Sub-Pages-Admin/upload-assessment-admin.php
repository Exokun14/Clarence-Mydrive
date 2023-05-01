<?php
    session_start();
?>

<!DOCTYPE html>
<html>

    <meta name="viewport" content="width=decive-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Styles/home-admin.css">
    <link rel="stylesheet" href="../../Styles/tabs-user.css">
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

        <div class="tab-content-container-form">
            <p onclick="location.href='assessment-admin.php'" id="back-button-form">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
                </svg>
                Back
            </p>
            <div class="tab-content">
                <h1 id='tab-form-header'>UPLOAD ASSESSMENT TAB</h1>

                <div class='form-holder'>
                    <form class='form-content' id="upload-form" name="upload-assessment-form" enctype="multipart/form-data" action="upload.php" method="POST">

                        <div>
                            <label for="assessment-no">Assessment No. </label>
                            <input id='input-field-small' type="int" placeholder='Input goes here' name="assessment-no"  maxlength="4" size="4" required/>
                        </div>

                        <div>
                            <label>Assessment Title: </label>
                            <input id='input-field-small' type="text" placeholder='Input goes here' name="assessment-title" maxlength="50" size="50" required/>
                        </div>

                        <div>
                            <label>Assessment Description: </label>
                            <input id='input-field-big' type="text" placeholder='Input goes here' name="description" maxlength="50" size="50" required/>
                        </div>

                        <div>
                            <label for="assessment-file">Upload File:</label>
                            <input id='input-field-small' type="file" name="assessment-file" id="assessment-file" required/>
                        </div>

                        <div>
                            <label for="assessment-no">User No. </label>
                            <input id='input-field-small' type="int" placeholder='Input goes here' name="user-id"  maxlength="4" size="4" required/>
                        </div>

                        <div>
                            <input id='submit-button-form' type="submit" name="upload-assessment" value="Upload"/>
                        </div>

                    </form>
                </div>

                <div class='attachment-container'>
                    <img id='tab-description-pic' src='../../Pics/leesin.webp'></img>
                    <div class='attachment-content'>
                        <p id='quote'>'I will struggle, I will fail, but to surrender is a privilege I do not have.'</p>
                        
                    </div>
                </div>
                
            </div>

        </div>

    </body>

</html>