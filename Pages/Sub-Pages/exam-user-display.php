<?php
    require '../../Backend/database-connection.php';

    function display() 
    {
        global $connection;

        $sql = "SELECT * FROM `exam` WHERE `User_ID` = '". $_SESSION["Account_Number"] . "'";

        $result = $connection->query($sql);

        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                echo "
                    <div class='tab-content-entry'>
                        <div>
                            <div class='tab-content-title' id='name'>
                                <img id='tab-content-pic' src='../../Pics/exam.png'></img>
                                <p> " . $row['Exam_Title'] . "</p>

                                <form action='view-exam-user.php' method='POST'>
                                    <input id='user-input' type='number' name='num' value='" . $row['Exam_ID'] . "'></input>
                                    <div class='tab-content-actions'>
                                        <input type='submit' name='view-exam' id='submit-button' value='VIEW'</input>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    ";
            }
        }
        else 
        {
            echo "
                <div class='no-work-container'>
                    <h3 id='no-work-header'>Woohoo! No works to be done!</h3>
                    <img id='no-work-pic' src='../../Pics/winning.png'></img>
                    <h5 id='no-work-sub-header'>#WIN STREAK - Let's go Int in League!</h5>
                    <p>Examinations will show up here when assigned! Worry not, you feeder yasuo mid main!</p>
                </div>
            ";
        }
    }

?>