<?php
    require '../classes/DonorClass.php';

    $donor = new Donor();
    $donor->setName("DABI");
    echo $donor->getName();


?>