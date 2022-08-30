<?php
    session_start();
    //require '../classes/connectionClass.php';
    require 'UserClass.php';


    $user = new user();

    $goinEmail = $_SESSION['emailID'];
    $user->getPreviousInfo($goinEmail);


    
    
    
    // echo $user->getId();
    // echo '<br>';
    // echo $user->getemailId();
    // echo '<br>';
    // echo $user->getUserName();
    // echo '<br>';
    // echo $user->getName();
    // echo '<br>';
    // echo $user->getHeight();
    // echo '<br>';
    // echo $user->getWeight();
    // echo '<br>';
    // echo $user->getPhoneNumber();
    // echo '<br>';
    // echo $user->getAddress();
    // echo '<br>';
    // echo $user->getBloodGroup();
    // echo '<br>';
    // echo $user->getDoB();
    // echo '<br>';
    // echo $user->getGender();
    // echo '<br>';

    // $user->setId($row['ID']);
    // $user->setemailId($row['Email_ID']);
    // $user->setUserName($row['User_Name']);
    // $user->setName($row['Name']);
    // $user->setHeight($row['Height']);
    // $user->setWeight($row['Weight']);
    // $user->setPhoneNumber($row['Phone_Number']);
    // $user->setAddress($row['Address']);
    // $user->setBloodGroup($row['Blood_Group']);
    // $user->setDoB($row['DoB']);
    // $user->setGender($row['Gender']);



?>