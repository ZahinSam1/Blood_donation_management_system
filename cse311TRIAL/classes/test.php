<?php
    require 'connectionClass.php';

    $db = new connection();
    $con = $db->connect();
    $query = "SELECT Employee_ID, First_Name FROM employees";

    $result = mysqli_query($con, $query);

    //$info = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result)){
        while($info = mysqli_fetch_assoc($result)){
            echo $info['Employee_ID'] . "      " . $info['First_Name'];
            echo '<br>';
        }
    }
    


?>