<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    include('../Assignment1/connection.php');

    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($db, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($db, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($db, $password);
        $gender   = stripslashes($_REQUEST['gender']);
        $gender   = mysqli_real_escape_string($db, $gender);
        $phone_no = stripslashes($_REQUEST['phone_no']);
        $phone_no = mysqli_real_escape_string($db, $phone_no);
        $Birth_date = date("Y-m-d H:i:s");
        $firstname = stripslashes($_REQUEST['firstname']);
        $firstname = mysqli_real_escape_string($db, $firstname);
        $lastname = stripslashes($_REQUEST['lastname']);
        $lastname = mysqli_real_escape_string($db, $lastname);





        $query    = "INSERT into `users` (username, password, email, firstname, gender, phone_no, Birth_date, lastname)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$firstname', '$gender', '$phone_no', '$Birth_date', '$lastname' )";
        $result   = mysqli_query($db, $query);
        if ($result) {
             header("Location: login.php");
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method ='POST' onSubmit="alert('Registration Success');">
        <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are one step away to check our project</p>
                        <button  onclick="location.href='login.php'" name="submit2" class="btn btn-secondary">Login</button><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Registration</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span style="color:#FF0000;text-align:center;">First Name is required *</span>
                                            <input type="text" class="form-control" name="firstname" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <span style="color:#FF0000;text-align:center;">Last Name is required *</span>
                                            <input type="text" class="form-control" name="lastname" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <span style="color:#FF0000;text-align:center;">Email is required *</span>
                                            <input type="email" class="form-control" name="email" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <span style="color:#FF0000;text-align:center;">Password is required *</span>
                                            <input type="password" id="psw" class="form-control"  placeholder="Password *" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label2 class="radio inline">
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span>
                                                </label2>
                                                <label2 class="radio inline">
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span>
                                                </label2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span style="color:#FF0000;text-align:center;">Phone is required *</span>
                                            <input type="tel" class="form-control" name="phone_no" placeholder="Phone *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <span style="color:#FF0000;text-align:center;">Birth Date is required *</span>
                                            <input type="date" minlength="10" maxlength="10" name="Birth_Date" class="form-control" placeholder="Birth Date *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <span style="color:#FF0000;text-align:center;">Username is required *</span>
                                            <input type="text" class="form-control" name="username" placeholder="Username *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                    <div id="message">
                                            <h3>Password must contain the following:</h3>
                                            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                            <p id="number" class="invalid">A <b>number</b></p>
                                            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                            </div>

                                            <script>
                                            var myInput = document.getElementById("psw");
                                            var letter = document.getElementById("letter");
                                            var capital = document.getElementById("capital");
                                            var number = document.getElementById("number");
                                            var length = document.getElementById("length");

                                            // When the user clicks on the password field, show the message box
                                            myInput.onfocus = function() {
                                            document.getElementById("message").style.display = "block";
                                            }

                                            // When the user clicks outside of the password field, hide the message box
                                            myInput.onblur = function() {
                                            document.getElementById("message").style.display = "none";
                                            }

                                            // When the user starts to type something inside the password field
                                            myInput.onkeyup = function() {
                                            // Validate lowercase letters
                                            var lowerCaseLetters = /[a-z]/g;
                                            if(myInput.value.match(lowerCaseLetters)) {
                                                letter.classList.remove("invalid");
                                                letter.classList.add("valid");
                                            } else {
                                                letter.classList.remove("valid");
                                                letter.classList.add("invalid");
                                            }

                                            // Validate capital letters
                                            var upperCaseLetters = /[A-Z]/g;
                                            if(myInput.value.match(upperCaseLetters)) {
                                                capital.classList.remove("invalid");
                                                capital.classList.add("valid");
                                            } else {
                                                capital.classList.remove("valid");
                                                capital.classList.add("invalid");
                                            }

                                            // Validate numbers
                                            var numbers = /[0-9]/g;
                                            if(myInput.value.match(numbers)) {
                                                number.classList.remove("invalid");
                                                number.classList.add("valid");
                                            } else {
                                                number.classList.remove("valid");
                                                number.classList.add("invalid");
                                            }

                                            // Validate length
                                            if(myInput.value.length >= 8) {
                                                length.classList.remove("invalid");
                                                length.classList.add("valid");
                                            } else {
                                                length.classList.remove("valid");
                                                length.classList.add("invalid");
                                            }
                                            }
                                            </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </form>
<?php
    }
?>
</body>
</html>

