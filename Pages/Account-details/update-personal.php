<?php
    session_start();
?>

<!DOCTYPE html>
<html>

    <meta name="viewport" content="width=decive-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Styles/update-details.css">
    <link rel="stylesheet" href="../../Styles/home-user.css">
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
                    <p onclick="location.href='../account-details.php'">ACCOUNT INFORMATION</p>
                    <p onclick="location.href='../logout.php'">LOG OUT</p>
                </div>

            </div>

    </div>

    </head>

    <body>

        <div class='update-container'>
            <div>
                <h1 id='update-header'>UPDATE PERSONAL INFORMATION</h1>
                <h3 id='update-sub-header'>You can update you personal details here summoner.<h3>

                <form action='update-personal-backend.php' class='form' id='form-personal' enctype='multipart/form-data' method='POST'>

                    <?php
                        require '../../Backend/database-connection.php';

                        $sql = "SELECT * FROM `personal_detail` WHERE `Account_Number` = '". $_SESSION['Account_Number'] . "'";
                        $result = $connection->query($sql);

                        $Fname = '';
                        $Mname = '';
                        $Lname = '';

                        if($result->num_rows > 0) 
                        {
                            while ($row = $result->fetch_assoc()) 
                            {
                                if($row['First_Name'])
                                {
                                    $Fname = $row['First_Name'];
                                }

                                if($row['Middle_Name'])
                                {
                                    $Mname = $row['Middle_Name'];
                                }

                                if($row['Last_Name'])
                                {
                                    $Lname = $row['Last_Name'];
                                }
                            }
                        }

                        echo "
                            <div>
                                <label for='Fname'>First Name: </label>
                                <input name='Fname' id='input-field-small' type='text' value='$Fname' placeholder='Your first name summoner.' required></input>
                            </div>

                            <div>
                                <label for='Fname'>Last Name: </label>
                                <input name='Lname' id='input-field-small' type='text' value='$Lname' placeholder='Your last name summoner.'></input>
                            </div>

                            <div>
                                <label for='Fname'>Middle Name: </label>
                                <input name='Mname' id='input-field-small' type='text' value='$Mname' placeholder='Your middle name summoner.' required></input>
                            </div>
                        ";

                        /*<div>
                            <label for='Fname'>Profile Picture: </label>
                            <input id='input-field-small' type='file' required></input>
                        </div>*/

                    ?>

                    <img id='pic' src='../../Pics/vex.webp'></img>
                    <p>“Death is the true meaning of life. Whoa! That's deep.”<p>

                    <div class='options-container'>
                        <div class="get-started">
                            <div class="get-started-button">
                                <a href='../account-details.php' id="get-started-button">CANCEL</a>
                            </div>
                        </div>

                        <div class="get-started">
                            <div class="get-started-button">
                                <a onclick="submitPersonal()" id="get-started-button">UPDATE</a>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>

        <script src='../../Javascript/update-user-account.js'></script>
    </body>