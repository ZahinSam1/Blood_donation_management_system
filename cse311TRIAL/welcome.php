<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeSource Foundation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <video autoplay loop muted plays-inline class="backvid">
            <source src="img/1videoplayback.mp4" type="video/mp4">
        </video>

        <div class="navbar">
            <nav>
                <li>
                    <div class="verline"></div>
                </li>

                <a href="index.php"><img src="img/LifeSource Foundation-1 (2).png" alt="logo" height="50px"
                        width="200px"></a>
                <ul>
                    <?php session_start();
                    $userLoggedIn = false;
                    if(isset($_SESSION['logged_in'])){
                        $userLoggedIn = true;
                        $uName = $_SESSION['username'];
                    }
                ?>
                    <li> <a href="index.php">HOME</a> </li>
                    <li> <a href="about.php">ABOUT US</a></li>
                    <li> <a href="donorpanel.php">INFORMATION</a> </li>
                    <li> <a href="donationform.php">DONATE BLOOD</a> </li>
                    <li> <a href="recieveform.php">RECIEVE BLOOD</a> </li>
                    <li>
                        <p class="undersquare">________</p>
                    </li>
                    <li id="signUp">
                        <a href="SignUp.php">SIGN UP
                            <?php
                                if($userLoggedIn){
                                    echo "
                                        <script language=javascript>
                                            var signUp = document.getElementById('signUp');
                                            
                                            signUp.style.visibility = 'hidden';
                                        </script>
                                    ";
                                }else{
                                    echo "
                                        <script language=javascript>
                                            var signUp = document.getElementById('signUp');
                                            signUp.style.visibility = 'visible';
                                        </script>
                                    ";
                                }
                                
                            ?>
                        </a>
                    </li>
                    <li id="login">
                        <a href="Login.php">LOGIN
                            <?php
                                if($userLoggedIn){
                                    echo "
                                        <script language=javascript>
                                            var login = document.getElementById('login');
                                            
                                            login.style.visibility = 'hidden';
                                        </script>
                                    ";
                                }else{
                                    echo "
                                        <script language=javascript>
                                            var login = document.getElementById('login');
                                            
                                            login.style.visibility = 'visible';
            
                                        </script>
                                    ";
                                }
                                
                            ?>
                        </a>
                    </li>
                    <li id="UserName" onclick="profileMenu()">
                        <a href="">
                            <?php
                                if($userLoggedIn){
                                    
                                    echo "
                                        <script language=javascript>
                                            var uName = document.getElementById('UserName');
                                            uName.innerHTML = " . json_encode($uName) . ";
                                            uName.style.color = 'white';
                                            function profileMenu(){
                                                window.location.href='../profile.php';
                                            }
                                        </script>
                                    ";
                                }else{
                                    echo "
                                        <script language=javascript>
                                            var uName = document.getElementById('UserName');
                                            signOut.style.visibility = 'hidden';
            
                                        </script>
                                    ";
                                }
                                
                            ?>
                        </a>
                    </li>
                    <li id="SignOut" onclick="logOut()">Log Out
                        <?php
                        if($userLoggedIn)
                        {
                            echo " 
                                <script language=javascript>
                                    var signOut = document.getElementById('SignOut');
                                    signOut.style.color = 'white';
                                    function logOut(){
                                        window.location.href = 'action/logout.php';
                                    }
                                </script>
                            ";
                        }else{
                            echo "
                                <script language=javascript>
                                    var signOut = document.getElementById('SignOut');
                                    signOut.innerHTML = 'SIGN OUT';
                                    signOut.style.visibility = 'hidden';
    
                                </script>
                            ";
                        }
                                
                    ?>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- after logging in they reach the welcome page -->
        <div class="welcomeback">

            <div class="welcome">

                <h1>Welcome back</h1>

                <h2><a href="Bloodinfo.php">Check Blood</a></h2>
                <h2><a href="Patient.php">Patient Info</a></h2>
                <h2><a href="volunteer.php">Volunteer Info</a></h2>


                <h6>Would you also like to:
                    <br><br>
                    <a href="donationform.php">Donate Blood To People In Need?</a>
                    <br><br>
                    <a href="recieveform.php">In Need Of Blood?</a>
                    <br><br>
                    <a href="money.php">Contribute To Our Organization?</a>
                    <br>

                </h6>

            </div>
        </div>

        <div class="proinfo">

            <div class="proinfoo">

                <h1>Profile Information</h1>
            </div>
            <form>
                <div><br>
                    <h2>Name</h2>
                    <?php include 'classes/profileEntry.php' ?>
                    <input type="text" name="first_name" value="<?php ?>"> <br>
                    <label>First Name</label>
                    <br>
                    <br>
                    <input type="text" name="last_name" value="<?php ?>"> <br>
                    <label>Last Name</label><br><br>
                </div>
                <div>
                    <h2>Date Of Birth</h2>
                    <input type="text" name="month" value="<?php ?>">
                    <label>Month</label>
                    <br><br>
                    <input type="number" name="day">
                    <label>Day</label>
                    <br><br>
                    <input type="number" name="year">
                    <label>Year</label><br>
                </div><br>
                <h2>Email Address</h2>
                <input type="email" name="email_address">
                <br><br>

                <h2>Phone Number</h2>
                <input type="number" name="phone_no">
                <br>
                <br>
                <div>
                    <h2>Address</h2>
                    <input type="number" name="address">
                    <label>Road Number</label><br>
                    <br>
                    <input type="number" name="address">
                    <label>House Number</label><br>
                    <br>
                    <input type="number" name="address">
                    <label>Zip Code</label><br>
                    <br>
                    <input type="text" name="address">
                    <label>City</label>
                </div>
                <br>


                <h2>Blood Type</h2>

                <select name="blood_type">
                    <option disabled="disabled" selected="selected">--Choose BloodType</option>
                    <option>A+</option>
                    <option>B+</option>
                    <option>O+</option>
                    <option>AB+</option>
                    <option>A-</option>
                    <option>B-</option>
                    <option>O-</option>
                    <option>AB-</option>
                </select>
                <br><br><br><br>
                <button class="toprofile"><a href="profile.php">EDIT PROFILE INFORMATION</a></button>
            </form>
        </div>





    </div>
</body>

</html>