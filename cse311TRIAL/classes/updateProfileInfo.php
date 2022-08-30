<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    require 'UserClass.php';

    $user = new user();
    $goinEmail = $_SESSION['emailID'];
    
    $fName = $_POST['first_name'];
    $lName = $_POST['last_name'];
    $name = $fName . ' ' . $lName;
    $uName = $fName.'_'.$lName;

    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $dob = $year. '-' . $month . '-' . $day;

    $email = $_POST['email_address'];
    $phoneNumber = $_POST['phone_no'];

    $bloodGroup = $_POST['blood_type'];

    $address = $_POST['address'];

    
    
    $user->setUserName($uName);
    $user->setName($name);
    $user->setPhoneNumber($phoneNumber);
    $user->setAddress($address);
    $user->setBloodGroup($$bloodGroup);
    $user->setDoB($dob);

    $user->UpdateInfoInDatabase($user->getId(), $user->getemailID());
    echo "<script language=javascript>
                window.location.href = '../welcome.php';
            </script>";


?>