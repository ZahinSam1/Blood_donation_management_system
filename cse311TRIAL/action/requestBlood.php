<?php
    include '../classes/PatientClass.php';

    $con = new connection();
    $db = $con->connect();


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

    $gender = $_POST['gender'];

    $disease = $_POST['disease'];

    $patient = new patient();

    $patient->setName($name);
    $patient->setUserName($uName);
    $patient->setDoB($dob);
    $patient->setemailId($email);
    $patient->setPhoneNumber($phoneNumber);
    $patient->setBloodGroup($bloodGroup);
    $patient->setGender($gender);
    $patient->setDisease($disease);
    $patient->setRecieveLocation($address);

    $patient->PinsertIntoDatabase();
    echo "<script language=javascript>
                window.location.href = '../accept.php';
            </script>";

?>