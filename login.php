<?php
 include("Vitti.php");
error_reporting(0);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- navbar -->
    <div class="navbar1">
        <h2><center>VITTI: Login/SignUp Form</center></h2>
        </div>

    <!-- LOgin Form -->
   <h3>Welcome to VITTI</h3>

   <div class="container">
    <div id="login">
    <h4>Login/Sign Up Form</h4>

    <form method ="POST" >
        <label for="username">UserName:</label>
        <input type="text" id="" name="username" placeholder="username" required>

        <label for="password">Password:</label>
        <input type="password" id="" name="password" placeholder="password" required>

        <button type="submit" value="submit" name="submit" class="btn">Submit</button>
</form>

        <a class="switch-link" href="#" onclick="showForgetForm()">Forgot Password</a>
        <p class="create-account">Don't have account?<a href="#" onclick="showSignUpForm()">Create it now</a></p>
    
   </div> 
   </div>

    <!-- sign up-form -->

   <div class="Signup-form" id="signup-form">
    <h4>Sign Up Form</h4>
    <form method="POST">
     <br><label for="FirstName">First Name</label>
     <br><input type="text" placeholder="FirstName" name="First" required>

     <br><label for="LastName">Last Name</label>
     <br><input type="text"  placeholder="LastName" name="Last" required>

     <br><label for="Student_Id">Student University Roll No.</label>
     <br><input type="text" placeholder="StudentRollNo" name="Roll"  required>

     <br><label for="email">Email</label>
     <br><input type="email" placeholder="email" name="email" required>

     <br><label type="Phone">Phone No.</label>
     <br><input type="number"  placeholder="Phone"name="phone"  required>

     <br><label for="Dob">D.O.B</label>
     <br><input type="dob"  placeholder="D.O.B" name="DOB" required>

     <br><label for="street">Street</label>
     <br><input type="text"  placeholder="street" name="Street" required>

     <br><label for="city">City</label>
     <br><input type="text"  placeholder="city" name="City" required>

     <br><label for="state">State</label>
     <br><input type="text"  placeholder="state" name="State"  required>

     <br><label for="pincode">PINCODE</label>
     <br><input type="number"  placeholder="pincode" name="Pin" required>

     <br><label for="password">Password</label>
     <br><input type="password" placeholder="password" name="Pass" required>

     <br><label for="password1">Confirm Password</label>
     <br><input type="password"  placeholder="password" name="Confirm"  required>

<button type="submit" value="register" name="register" >Submit</button>
<p class="create-account">Already have an account? <a href="" onclick="showLoginForm()">Log In</a></p>

        </form>
   </div>

   <!--Forget Password-->
    <div class="Forget" id="forget">
    <h4>Forget Password</h4>

    <form method="POST">
        <br><label for="newpass">New Password</label>
        <br><input type="password" id=""  name="pas1" placeholder="NewPassword" required>
        <br><label for="confirm">Confirm Password</label>
        <input type="confirm"  id="" name="pas2"  placeholder="Confirm Password" required>
        <br>
        <button type="submit" value="sub" name="sub">Submit</button>
        <p class="create-account">Don't want to change Password <a href="#" onclick="showLoginForm()">Log In</a></p>
    </form>
   </div>  


   <!-- footer -->
   <div class="footer">
    <h2>VITTI</h2>
    <h2>School of Computer Science and Engineering, Government P.G. College Dharamshala</h2>
    <div class="social-links">
        <a href="https://www.facebook.com"class="social-link" >Facebook</a>
        <a href="https://www.instagram.com" class="social-link">Instagram</a>
        <a href="https://www.youtube.com" class="social-link">Youtube</a>
    </div>
    <p>@ 2023 VITTI.All rights reserved.</p>
</div>
<script>
    function showSignUpForm(){
        document.getElementById('login').style.display='none';
        document.getElementById('signup-form').style.display='block';
    }

    function showLoginForm(){
        document.getElementById('signup-form').style.display='none';
        document.getElementById('login').style.display='block';
        document.getElementById('forget').style.display='none';
    }

    function showForgetForm()
    {
        document.getElementById('login').style.display='none';
        document.getElementById('forget').style.display='block';
    }

    
    
</script> 
</body>
</html>
<!-- login -->

<!-- 


// if(isset($_POST["submit"]))
// {
//     $name =$_POST['username'];
//     $password=$_POST['password'];
  
// $stmt = mysqli_prepare($con, "INSERT INTO `login`(`username`, `password`) VALUES ('$name','$password')");

// mysqli_stmt_bind_param($stmt,"ss",$name,$password);

// if(mysqli_stmt_execute($stmt)){
//     echo "data submitted";
// }
// else{ -->


<?php


if (isset($_POST["submit"])) {
    $name = $_POST['username'];
    $password = $_POST['password'];

    $stmt = mysqli_prepare($con, "SELECT  * FROM `signup` WHERE `Uni_Roll_No`=? AND `Password`=?" );
    mysqli_stmt_bind_param($stmt, "ss", $name,$password);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result)==1) {
        echo '<script>window.location="Result.php";</script>';
        exit;
     
    } else {
        echo "Incorrect credentials"; // Credentials do not match
    }

    mysqli_stmt_close($stmt);
}


if(isset($_POST["submit"])){
    $name = $_POST['username'];
    $password =$_POST['password'];

    $login_query = "SELECT * FROM `login` WHERE `username`= '$username' AND `password`='$password'";
    $login_result = mysqli_query($con,$login_query);
    
}

// if (isset($_POST["reset"])) {
//     $newPassword = $_POST['newpass'];

//     // Assuming you have a table named 'forget' for password reset
//     $stmt = mysqli_prepare($con, "UPDATE `signup` SET `Password`=? WHERE `Uni_Roll_No`=?");
//     mysqli_stmt_bind_param($stmt, "ss", $newPassword, $name);

//     if (mysqli_stmt_execute($stmt)) {
//         echo "Password reset successful";
//     } else {
//         echo "Error: " . mysqli_error($con);
//     }

//     mysqli_stmt_close($stmt);
// }
?>



<!-- sign up -->
<?php 

include("Vitti.php");

if(isset($_POST["register"])){

    $first = $_POST['First'];
    $last =$_POST['Last'];
    $roll=$_POST['Roll'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $dob=$_POST['DOB'];
    $street=$_POST['Street'];
    $city=$_POST['City'];
    $state=$_POST['State'];
    $pin=$_POST['Pin'];
    $pass=$_POST['Pass'];
    $confirm=$_POST['Confirm'];

    if($pass !== $confirm){
        echo "passwords does not match";
    }
    else{

        $stm=mysqli_prepare($con,"INSERT INTO `signup`(`First_Name`, `Last_Name`, `Uni_Roll_No`, `Email`, `Phone_No`, `DOB`, `Street`, `City`, `State`, `Pin_Code`, `Password`, `Confirm_Password`) VALUES ('$first','$last','$roll','$email','$phone','$dob','$street','$city','$state','$pin','$pass','$confirm')");

        if($stm==false){
            die(mysqli_error($con));
        }

        mysqli_stmt_bind_param($stm,"ssssssssssss",$first,$last,$roll,$email,$phone,$dob,$street,$city,$state,$pin,$pass,$confirm);

        if(mysqli_stmt_execute($stm)){
            echo "Data submitted successfully";
        }
        else{
            echo"error:".mysqli_error($con);
                }
                mysqli_stmt_close($stm);
    }


}


?>

<!-- forget -->

<?php

if(isset($_POST["sub"])){
    
    $newpass=$_POST['pas1'];
    $confirmpass=$_POST['pas2'];

    if($newpass==$confirmpass){
        $stmt=mysqli_prepare($con,"UPDATE `login` SET `password`='$newpass' WHERE `username`='$name'");

        mysqli_stmt_bind_param($stmt,"ss",$name);
        if(mysqli_stmt_execute($stmt)){
            echo "password reset successfuly";
        }
        else{
            echo "error:".mysqli_error($con);
        }


    }
    mysqli_stmt_close($stmt);


}