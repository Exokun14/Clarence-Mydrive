<?php
    session_start();
?>

<!DOCTYPE html>
<html>

    <meta name="viewport" content="width=decive-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/account-details.css">
    <link rel="stylesheet" href="../Styles/home-user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">


    <head>

    <div class="header">
            <h1 onclick="location.href='home-user.php'">LoL Drive</h1>

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
                    <p onclick="location.href='account-details.php'">ACCOUNT INFORMATION</p>
                    <p onclick="location.href='logout.php'">LOG OUT</p>
                </div>

            </div>

    </div>

    </head>

    <body>

        <div class='account-details-container'>
        <div id='account-details-header'>
            <h1 id="personal-info-header">ACCOUNT DETAILS</h1>
            <h1 id="education-header">EDUCATION DETAILS</h1>
            <h1 id="award-header">AWARDS' DETAILS</h1>
        </div>

            <div>

                <div class='account-details-content-1'>
                    
                    <div id="personal-info-container">
                        <img draggable='false' id='user-profile' src='../Uploads/Profiles/default.png'></img>

                        <div class='icons'>
                            <div>
                                <div class='icon-container'>
                                    <?php
                                        if ($_SESSION['First_Name'] != null)
                                        {
                                            echo "<p id='icon-container-text'>
                                                    <svg id='icon-container-pic' xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='currentColor' class='bi bi-person-fill' viewBox='0 0 16 16'>
                                                        <path d='M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z'/>
                                                    </svg>
                                                    <p> "
                                                        . $_SESSION['First_Name'] . $_SESSION['Last_Name'] . "
                                                    </p>
                                            </p>";
                                        }
                                        else
                                        {
                                            echo "Not set";
                                        }
                                    ?>
                                </div>
                                
                            </div>

                            <div>
                                <div class='icon-container'>
                                    <?php
                                        if ($_SESSION['First_Name'] != null)
                                        {
                                            echo "<p id='icon-container-text'>
                                                    <svg id='icon-container-pic' xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='currentColor' class='bi bi-envelope-at-fill' viewBox='0 0 16 16'>
                                                        <path d='M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z'/>
                                                        <path d='M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z'/>
                                                    </svg>
                                                    <p>
                                                    " . $_SESSION['Email'] . "
                                                    </p>
                                                </p>";
                                        }
                                        else
                                        {
                                            echo "Not set";
                                        }
                                    ?>
                                </div>

                            </div>

                            <div class='personal-info'>
                            <h3>Personal Information</h3>
                                <div class='icon-container'>
                                    <?php

                                        if ($_SESSION['First_Name'] != null)
                                        {
                                            echo "<p id='icon-container-text'>" . $_SESSION['First_Name'] . "</p>";
                                        }
                                        else
                                        {
                                            echo "Not set";
                                        }

                                        if ($_SESSION['Middle_Name'] != null)
                                        {
                                            echo "<p id='icon-container-text'>" . $_SESSION['Middle_Name'] . "</p>";
                                        }

                                        if ($_SESSION['Last_Name'] != null)
                                        {
                                            echo "<p id='icon-container-text'>" . $_SESSION['Last_Name'] . "</p>";
                                        }
                                        else
                                        {
                                            echo "Not set";
                                        }

                                    ?>
                                </div>
                            </div>

                            <div class='options-container'>
                                <div class="get-started">
                                    <div class="get-started-button">
                                        <a onclick="showEducationDetails()" id="get-started-button">EDUC</a>
                                    </div>
                                </div>
                        
                                <div class="get-started">
                                    <div class="get-started-button">
                                        <a id="get-started-button">UPDATE</a>
                                    </div>
                                </div>

                                <div class="get-started">
                                    <div class="get-started-button">
                                        <a onclick="showAwardDetails()" id="get-started-button">AWARDS</a>
                                    </div>
                                </div>
                            </div>
                    
                        </div>

                    </div>

                    <div id='education-container'>
                        <div class='education'>
                            <h3>EDUCATION<h3>
                            <div id='education'> 
                                <?php
                                    require '../Backend/database-connection.php';

                                    $sql = "SELECT * FROM `education` WHERE `Account_Number` = '". $_SESSION["Account_Number"] . "'";
                                    $result = $connection->query($sql);

                                    $secondarySchool = null;
                                    $tertiaryCourse = null;
                                    $tertiarySchool = null;
                                    $postGradCourse = null;
                                    $postGradSchool = null;

                                    if ($result->num_rows > 0) 
                                    {
                                        while($row = $result->fetch_assoc()) 
                                        {
                                            if($row['Secondary'])
                                            {
                                                $secondarySchool =$row['Secondary'];
                                            }
                                            if($row['Tertiary_Course'] && $row['Tertiary_School']) 
                                            {
                                                $tertiaryCourse = $row['Tertiary_Course'];
                                                $tertiarySchool = $row['Tertiary_School'];
                                            }
                                            if($row['Post_Graduate_Course'] && $row['Post_Graduate_School']) 
                                            {
                                                $postGradCourse = $row['Post_Graduate_Course'];
                                                $postGradSchool = $row['Post_Graduate_School'];
                                            }
                                        }
                                    }

                                    if ($secondarySchool != null) 
                                    {
                                        echo "<div class='educ'>
                                                <p>Secondary: $secondarySchool</p>
                                            </div>";
                                    }
                                    else 
                                    {
                                        echo "<div class='educ'>
                                            <p>Secondary: NOT AVAILABLE</p>
                                        </div>";
                                    }

                                    if ($tertiaryCourse != null) 
                                    {
                                        echo "<div class='educ'>
                                                <p>Tertiary Course: $tertiaryCourse</p>
                                            </div>";
                                        
                                        if ($tertiarySchool != null) 
                                        {
                                            echo "<div class='educ'>
                                                    <p>Tertiary School: $tertiarySchool</p>
                                                </div>";
                                        }
                                        else 
                                        {
                                            echo "<div class='educ'>
                                                <p>Tertiary School: NOT AVAILABLE</p>
                                            </div>";
                                        }
                                    }
                                    else 
                                    {
                                        echo "<div class='educ'>
                                            <p>Tertiary Course: NOT AVAILABLE</p>
                                        </div>";
                                    }

                                    if ($postGradCourse != null) 
                                    {
                                        echo "<div class='educ'>
                                                <p>Post Graduate Course: $postGradCourse</p>
                                            </div>";
                                        
                                        if ($postGradSchool != null) 
                                        {
                                            echo "<div class='educ'>
                                                    <p>Post Graduate School: $postGradCourse</p>
                                                </div>";
                                        }
                                        else 
                                        {
                                            echo "<div class='educ'>
                                                <p>Post Graduate School: NOT AVAILABLE</p>
                                            </div>";
                                        }
                                    }
                                    else 
                                    {
                                        echo "<div class='educ'>
                                            <p>Post Graduate Course: NOT AVAILABLE</p>
                                        </div>";
                                    }
                                ?>

                            </div>
                        </div>

                        <div class='options-container'>
                            <div class="get-started">
                                <div class="get-started-button">
                                    <a onclick="showAccountDetails()" id="get-started-button">ACCOUNT</a>
                                </div>
                            </div>
                    
                            <div class="get-started">
                                <div class="get-started-button">
                                    <a id="get-started-button">UPDATE</a>
                                </div>
                            </div>

                            <div class="get-started">
                                <div class="get-started-button">
                                    <a onclick="showAwardDetails()" id="get-started-button">AWARDS</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id='award-container'>
                        <div class='awards'>
                            <h3>AWARDS / ACCOMPLISHMENTS<h3>
                            <?php
                                require '../Backend/database-connection.php';

                                $sql = "SELECT * FROM `awards` WHERE `Account_Number` = '". $_SESSION["Account_Number"] . "'";
                                $result = $connection->query($sql);

                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc())
                                    {
                                        echo"
                                            <h3>Award Title: " . $row['Award_Title'] . "</h3>
                                            <p>Description: " . $row['Description'] . "</p>
                                            <p>Given on: " . $row['Date'] . "</p>
                                        ";
                                    }
                                }
                                else 
                                {
                                    echo"
                                        <h3>No Rewards Attained!</h3>
                                        <p>Go out and retrive some summoner!</p>
                                    ";
                                }
                            ?>
                        </div>

                        <div class='options-container'>
                            <div class="get-started">
                                <div class="get-started-button">
                                    <a onclick="showEducationDetails()" id="get-started-button">EDUC</a>
                                </div>
                            </div>
                    
                            <div class="get-started">
                                <div class="get-started-button">
                                    <a id="get-started-button">UPDATE</a>
                                </div>
                            </div>

                            <div class="get-started">
                                <div class="get-started-button">
                                    <a onclick="showAccountDetails()" id="get-started-button">ACCOUNT</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <script src='../Javascript/account-details.js'></script>

    </body>

</html>