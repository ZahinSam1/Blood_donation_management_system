<?php
    //require '../classes/DBFunctionClass.php';
    require '../classes/connectionClass.php';

    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Email = $_POST['Email'];
    $password = $_POST['password'];
    $password = md5($password);


    //$func = new DBFunctions();
    $con = new connection();
    $db = $con->connect();

    // if($db){
    //     echo 'success';
    // }else{
    //     echo 'failed';
    // }

    $uName = $Fname . '_' . $Lname;
    //$okEmail = $func->isUserExist($Email);
    //if($okEmail == false){
        $query = "INSERT INTO users(Email_ID, Password, User_Name) VALUES('$Email', '$password', '$uName')";

        $result = mysqli_query($db, $query);
        if($result){
            echo "<script>alert('successfully Registered!')</script>";
            header("location:../Login.html");
        }else{
            echo "<script>alert('Failed! This Email is taken! User Another')</script>";
        }

    //}
    

    // if($reg){
    //     echo "<script>alert('Register Successful')</script>";
    //     header("location:../Login.html");
    // }else{
    //     echo "<script>alert('Register Error this email might be taken')</script>";

    // }

?>