<?php
    require '../classes/connectionClass.php';
    require '../classes/DonorClass.php';

    
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
     

    $ft = $_POST['ft'];
    $inch = $_POST['inch'];
    $height = heightConvert($ft, $inch);
    $minHeight = 1.4732;

    $weight;
    $minWeight = 50;
    $condition = 'NOT OK';
    if($height > $minHeight && $weight > $minWeight){
        $condition = 'OK';
    }


    $bloodGroup;

    $gender;




    $donor = new Donor();

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

    if($condition = 'OK'){
        $userExist = $donor->isUserExist($email);
        if($userExist==false){
            $donor->insertIntoDatabase();
        }else{ 
            echo '<script language=javascript>
            alert("Error! This Email is already taken!");
        </script>';
        }
        
    }



    function heightConvert($ft, $inch){
        $meters = ($ft * 0.3048) + ($inch * 0.0254);
        return $meters;
    }

?>
<script>
    alert('You Have Successfully Registered for Blood donation');
    window.location.href="../accept.html";
</script>