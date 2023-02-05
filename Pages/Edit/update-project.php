<!DOCTYPE html>
<html>

    <link rel="stylesheet" href="../../Styles/main.css">

    <head>

        <div class="header">
            <h1>My Drive</h1>
            <p id="welcome-message">Welcome! Clarence Joven</p>
        </div>

    </head>

    <body>

        <?php

            $fileID = $_POST['project-id'];

            echo "<div class='update-content'> 

                    <div class='update-title'>

                        <h3>Update Title</h3>

                    </div>

                    <div class='update-tab'>

                        <form id='update-form' action='update.php' method='POST'>

                            <input style='display:none' type='int' id='project-id' name='project-id' value='" . $fileID . "'/>

                            </p>
                                <label for='project-title'>Please input new title here</label>
                            </p>

                            <p>
                                <input type='text' id='project-title' name='project-title' maxlength='50' size='50' required/>
                            </p>

                            <p>
                                <input type='submit' name='submit-project' value='submit'/>
                            </p>

                        </form>

                    </div>

                </div>";

        ?>

    </body>

</html>