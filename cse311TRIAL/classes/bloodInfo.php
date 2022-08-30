<?php
    require 'connectionClass.php';

    $con = new connection();
    $db = $con->connect();

    $query = "SELECT * FROM blood";
    $result = mysqli_query($db, $query);
    
    // if(mysqli_num_rows($result))
    //     while($row = mysqli_fetch_assoc($result))


?>