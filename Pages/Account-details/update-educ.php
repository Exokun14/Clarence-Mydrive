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
                <h1 id='update-header'>UPDATE EDUCATION INFORMATION</h1>
                <h3 id='update-sub-header'>You can update you educational details here summoner.<h3>

                <form action='update-educ-backend.php' class='form' id='form-educ' enctype='multipart/form-data' method='POST'>

                    <?php
                        require '../../Backend/database-connection.php';

                        $sql = "SELECT * FROM `education` WHERE `Account_Number` = '". $_SESSION['Account_Number'] . "'";
                        $result = $connection->query($sql);

                        $secondary = '';
                        $tertiaryCourse = '';
                        $tertiarySchool = '';
                        $postGradCourse = '';
                        $postGradSchool = '';

                        if($result->num_rows > 0) 
                        {
                            while ($row = $result->fetch_assoc()) 
                            {
                                if($row['Secondary'])
                                {
                                    $secondary = $row['Secondary'];
                                }

                                if($row['Tertiary_Course'])
                                {
                                    $tertiaryCourse = $row['Tertiary_Course'];
                                }

                                if($row['Tertiary_School'])
                                {
                                    $tertiarySchool = $row['Tertiary_School'];
                                }

                                if($row['Post_Graduate_Course'])
                                {
                                    $postGradCourse = $row['Post_Graduate_Course'];
                                }

                                if($row['Post_Graduate_School'])
                                {
                                    $postGradSchool = $row['Post_Graduate_School'];
                                }
                            }
                        }

                        echo "
                            <div>
                                <label for='Secondary'>Secondary: </label>
                                <input name='Secondary' id='input-field-small' type='text' value='$secondary' placeholder='High School.'></input>
                            </div>

                            <div>
                                <label for='Tertiary'>Tertiary Course: </label>
                                <input name='Tertiary' id='input-field-small' type='text' value='$tertiaryCourse' placeholder='College course.'></input>
                            </div>

                            <div>
                                <label for='Tertiary_School'>Tertiary School: </label>
                                <input name='Tertiary_School' id='input-field-small' type='text' value='$tertiarySchool' placeholder='College / University.'></input>
                            </div>

                            <div>
                                <label for='Post_Grad'>Post Grad Course: </label>
                                <input name='Post_Grad' id='input-field-small' type='text' value='$postGradCourse' placeholder='Post graduation course.'></input>
                            </div>

                            <div>
                                <label for='Grad_School'>Tertiary School: </label>
                                <input name='Grad_School' id='input-field-small' type='text' value='$postGradSchool' placeholder='College / University.'></input>
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
                                <a onclick="submitEduc()" id="get-started-button">UPDATE</a>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>

        <script src='../../Javascript/update-user-account.js'></script>
    </body>