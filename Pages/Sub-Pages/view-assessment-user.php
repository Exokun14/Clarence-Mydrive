<?php
    session_start();
?>

<!DOCTYPE html>
<html>

    <meta name="viewport" content="width=decive-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Styles/home-user.css">
    <link rel="stylesheet" href="../../Styles/tabs-user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">


    <head>

    <div class="header">
            <h1 onclick="location.href='../home-user.php'">LoL Drive</h1>

            <div class="login-header">

                <?php
                    $Fname = $_SESSION["First_Name"];

                    if($_SESSION["First_Name"] != null)
                    {
                        echo "
                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 16 16'>
                                <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
                                <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z'/>
                            </svg>
                            <p id='login-header-text-b'>Welcome! $Fname</p>
                        ";
                    }
                    else 
                    {
                        echo "
                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 16 16'>
                                <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
                                <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z'/>
                            </svg>
                            <p id='login-header-text-b'>Welcome! User</p>
                        ";
                    }

                ?>

                <div class="options"> 
                    <p>ACCOUNT INFORMATION</p>
                    <p onclick="location.href='../logout.php'">LOG OUT</p>
                </div>

            </div>

    </div>

    </head>

    <body>

        <div class="tab-content-container">
            <p onclick="location.href='assessment-user.php'" id="back-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
                </svg>
                Back
            </p>
            <div class="tab-content">

                    <?php
                        require '../../Backend/database-connection.php';

                        global $connection;
                        $num = $_POST['num'];
                        $title;
                        $description;
                        $uploadBy;
                        $uploadDate;

                        $sql = "SELECT * FROM `assessment` WHERE `Assessment_ID` = '". $num . "'";
                        $result = $connection->query($sql);

                        if ($result->num_rows > 0) 
                        {
                            while($row = $result -> fetch_row())
                            {
                                $title = $row[2];
                                $description = $row[3];
                                $fileType = $row[4];
                                $content = $row[5];
                                $uploadBy = $row[6];
                                $uploadDate = $row[7];
                            }

                            $sql = "SELECT `Email` FROM `admin_account` WHERE `Account_Number` = '". $uploadBy . "'";
                            $result = $connection->query($sql);

                            if ($result->num_rows > 0)
                            {
                                while($row = $result -> fetch_row())
                                {
                                    $uploadBy = $row[0];
                                }
                            }
                        }

                        echo "
                            <h3 id='tab-content-alt-header'> Assessment Title: $title</h3>
                            <div class='view-tab-container'>
                                <h3>Assessment Description:</h3>
                                <p id='tab-description'>$description</p>

                                <div class='attachment-container'>
                                    <img id='tab-description-pic' src='../../Pics/gwen.png'></img>
                                    <div class='attachment-content'>
                                        <p>Here's an attachment for you!</p>
                                        <a href='../../Uploads/assessment-uploads-admin/" .$content. "' download='" .$content. "'>$content</a>
                                    </div>
                                </div>

                                <div class='tab-description-actions'>
                                    <div class='tab-description-actions-empty'>
                                        <p id='add-files'>ADD FILES</p>
                                        <p id='mark-as-done'>MARK AS DONE</p>
                                    </div>

                                </div>

                                <div class='upload-details'>
                                    <p id='upload-by'><b>Uploaded By:</b> $uploadBy </p>
                                    <p id='upload-date'><b>Date Uploaded:</b> $uploadDate </p>
                                </div>

                            <div>
                        ";

                    ?>
                
            </div>

        </div>

    </body>

</html>