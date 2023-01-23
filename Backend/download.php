<?php

    require 'database-connection.php';

    if (isset($_POST['upload-assign'])) {
      
    }

    function upload($var1, $var2, $var3) {
      global $connection;





    }

    function uploadAssigment() {
      

      upload();
    }
    
    /*
    global $connection;
    
    $sql = "SELECT Test_Name, Test_File FROM test WHERE Test_ID = 4";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $testName = $row['Test_Name'];
        $testImage = $row['Test_File'];
        echo $testName;

        echo "<img src='../Uploads/" . $testImage . "'>";
        echo "<a href='../Uploads/" . $testImage . "' download=' " .$testName. ".jpeg'>
              Download
            </a>";
        //echo "<img style='width:100px; height:100px;' id ='locationImage' src='data:image/jpeg;base64," . base64_encode($testImage)."'>";
      }
    } */
    //$image = $row['image']; 
    //header('Content-Type: image/jpeg'); 


?>
