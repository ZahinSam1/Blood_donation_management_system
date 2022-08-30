<?php
    //require '../classes/connectionClass.php';
    require '../classes/UserClass.php';

    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $uName = $Fname . '_' . $Lname;

    $Email = $_POST['Email'];
    $password = $_POST['password'];
    $password = md5($password);

    $con = new connection();
    $user1 = new user();
    $db = $con->connect();   
    
        $user1->setName($Fname . ' ' . $Lname);
        $user1->setUserName($uName);
        $user1->setemailId($Email);
        $user1->setPassword($password);


        $query = "INSERT INTO users(Email_ID, Password, User_Name, Name, DoB, Height, Weight, Phone_Number, Address, Blood_Group, Gender) 
    VALUES('{$user1->getemailID()}', 
        '{$user1->getPassword()}',
        '{$user1->getUserName()}',
        '{$user1->getName()}',
        '{$user1->getDob()}',
        {$user1->getHeight()},
        {$user1->getWeight()},
        '{$user1->getPhoneNumber()}',
        '{$user1->getAddress()}',
        '{$user1->getBloodGroup()}',
        '{$user1->getGender()}')";




        // echo $user->getemailID(); 
        // echo $user->getPassword();
        // echo $user->getUserName();
        // echo $user->getName();
        // echo $user->getDob();
        // echo $user->getHeight();
        // echo $user->getWeight();
        // echo $user->getPhoneNumber();
        // echo $user->getAddress();
        // echo $user->getBloodGroup();
        // echo $user->getGender();

        $result = mysqli_query($db, $query);
        if($result){
            echo "<script language=javascript>
                alert('successfully Registered!');
                window.location.href='../login.html? success=1'
            </script>";
        }else{
            //echo "Failed! This Email is taken! User Another";
            // $user1->popUpMsg("Failed! This Email is taken! User Another");
            echo "<script language=javascript>
                alert('Failed! This Email is taken! User Another.');
            </script>";
        
        }

    //}else{
    //    echo "<script>alert('This Email Already Exists');</script>";
    //}

    $con->close();

?>