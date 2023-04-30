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
            <div class="tab-content">
                <div class='results'>
                    <h1>NICE! YOUR FILE HAS BEEN SUCCESSFULLY UPLOADED!</h1>
                    <img id='results-pic' src="../../Pics/aphelios.webp"></img>
                    <h3>Your quiz has been submitted to the administrator for checking..</h3>
                    <p>"The 'best' is wherever I decide to set the bar each day." </p>

                    <a href='../home-user.php' id='mark-as-done'>PROCEED</a>
                </div>
                
            </div>

        </div>

    </body>

</html>