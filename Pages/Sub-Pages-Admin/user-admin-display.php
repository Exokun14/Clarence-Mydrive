<?php
    require '../../Backend/database-connection.php';

    function display() 
    {
        global $connection;

        $sql = "SELECT * FROM `user_account`";

        $result = $connection->query($sql);

        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                echo "
                    <div class='tab-content-entry'>
                        <div>
                            <div class='tab-content-title' id='name'>
                                <img id='tab-content-pic' src='../../Pics/quiz.png'></img>
                                <p> " . $row['Email'] . "</p>

                                
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
                    <h3 id='no-work-header'>No works assigned in this category.</h3>
                    <img id='no-work-pic' src='../../Pics/winning.png'></img>
                    <h5 id='no-work-sub-header'>Admins and staff members can assign work to users!</h5>
                    <p>If work is assigned and not showing please report to an administrator!</p>
                </div>
            ";
        }
    }

?>