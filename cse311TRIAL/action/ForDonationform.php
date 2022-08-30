<?php

    require '../classes/DonorClass.php';

    if (!isset($_SESSION)) session_start();
    
    $isUserLoggedIn = false;
    if(isset($_SESSION['logged_in'])){
        $isUserLoggedIn = true;
    }

    
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

    $roadNo = $_POST['road_no'];
    $houseNo = $_POST['house_no'];
    $zip = $_POST['zip_code'];
    $city = $_POST['city'];
    $address = $roadNo . ', ' . $houseNo . ', ' . $zip . ', ' . $city . '. ';
     

    $ft = $_POST['dfeet'];
    $inch = $_POST['dinch'];
    $height = heightConvert($ft, $inch);
    $minHeight = 1.4732;

    $weight = $_POST['dweight'];
    $minWeight = 50;

    $prevDisease = $_POST['disease'];
    $condition = 'NOT OK';
    if($height > $minHeight && $weight > $minWeight && $prevDisease=='No'){
        $condition = 'OK';
    }


    $bloodGroup = $_POST['blood_type'];

    $gender = $_POST['gender'];




    $donor = new Donor();

    // if($isUserLoggedIn){
    //     $donor->getPreviousInfo($email);
    //     $sep = explode(' ', $donor->getName());
    //     $FirstName =$sep[0];
    //     $lastName = $sep[1];
    // }else{
        $donor->setName($name);
        $donor->setUserName($uName);
        $donor->setDoB($dob);
        $donor->setHeight($height);
        $donor->setWeight($weight);
        $donor->setemailId($email);
        $donor->setPhoneNumber($phoneNumber);
        $donor->setAddress($address);
        $donor->setHeight($height);
        $donor->setWeight($weight);
        $donor->setBloodGroup($bloodGroup);
        $donor->setGender($gender);

        $donor->setConditionStatus($condition);

        if($condition == 'OK'){
            $userExist = $donor->isUserExist($email);
            if($userExist==false){
                $donor->insertIntoDatabase();
            }
            else if($condition != 'OK'){
                echo "<script language=javascript>
                alert('Please!! You are not eligible to donate blood.');
                window.location.href = '../donationform.php';
            </script>";
            }
            else{ 
                echo "<script language=javascript>
                alert('Error! This Email is already taken!');
                window.location.href = '../Login.php';
            </script>";
            }
            
        }
    //}

    function heightConvert($ft, $inch){
        $meters = ($ft * 0.3048) + ($inch * 0.0254);
        return $meters;
    }

?>