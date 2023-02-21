<?php
/**
 * Template Name: Sign Up
 */
get_header();

include 'config.php';
if (isset($_POST['signup'])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $password_hash = $password;
    $query = $conn->prepare("SELECT * FROM wp_customers WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }
    if ($query->rowCount() == 0) {
        $query = $conn->prepare("INSERT INTO wp_customers(fname,lname,phone,address,email,password)
         VALUES (:fname,:lname,:phone, :address, :email, :password)");
        $query->bindParam("fname", $firstname, PDO::PARAM_STR);
        $query->bindParam("lname", $lastname, PDO::PARAM_STR);  
        $query->bindParam("phone", $phone, PDO::PARAM_STR);  
        $query->bindParam("address", $address, PDO::PARAM_STR);            
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("password", $password_hash, PDO::PARAM_STR);           
        $result = $query->execute();
        if ($result) {
            echo "<script>alert('Your registration was successful!')</script>";
             echo "<script>window.open('','_self')</script>"; 
        } else {
            echo "<script>alert('Something went wrong!!')</script>";
             echo "<script>window.open('sign-up.php','_self')</script>"; 
        }
    }
} ?>

<div class="container">
    <h2 class="text-center mt-4 fw-bold"><u>Sign Up Form</u> </h2>
    <form action="" method="POST" class="my-5 card shadow p-3">
        <div class="form-group">
            <input type="text" name="fname"  class="form-control input-sm mb-4" placeholder="Full Name" class="form-control input-sm" required>
        </div>
        <div class="form-group">
            <input type="text" name="lname" class="form-control input-sm mb-4" placeholder="Last Name" class="form-control input-sm" required>
        </div>
        <div class="form-group">
            <input type="tel" name="phone"  class="form-control input-sm mb-4" placeholder="Phone Number" class="form-control input-sm" required>
        </div>
        <div class="form-group">
            <input type="email" name="email"  class="form-control input-sm mb-4" placeholder="your Email" class="form-control input-sm" required>
        </div>
        <div class="form-group">
            <input type="password" name="password"  class="form-control input-sm mb-4" placeholder="Password" class="form-control input-sm" required>
        </div>
        <div class="form-group">
            <input type="password" name="cpassword"  class="form-control input-sm mb-4" placeholder="Confirm Password" class="form-control input-sm" required>
        </div>
        <div class="form-group">
        <input type="text" name="address"  class="form-control input-sm mb-4" maxlength="50" class="form-control input-sm mb-4" placeholder="Address" required>
        </div>
        <div class="row justify-content-center">
            <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                <input type="submit" value="Sign Up" name="signup" class=" px-5 btn btn-success btnblock">

        </div>
        </div>
        <div class="container">
                <h4 class="text-center">Already have an Account? <a href="wordpress/?page_id=33">Sign In</a></h4>
        </div>
    </form>
</div>



<?php get_footer(); ?>