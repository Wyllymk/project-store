<?php
/**
 * Template Name: Login input
 */

 session_start();
 require_once 'config.php';
 if (isset($_POST['signin'])) {
    // check if input are not empty//
        if ($_POST['email'] != "" || $_POST['password'] != "") {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM `wp_customers` WHERE `email`=? AND `password`=? ";
            $query = $conn->prepare($sql);
            $query->execute(array($email,$password));
            $row = $query->rowCount();
            $fetch = $query->fetch();
            if ($row > 0) {
                $_SESSION['user'] = $fetch['id'];
                header("location: wordpress/?page_id=10");
            } else {
                echo "
				<script>alert('Invalid email or password')</script>
				<script>window.location = 'wordpress/?page_id=33'</script>
				";
            }
        } else {
            echo "
				<script>alert('Please complete all the required field!')</script>
				<script>window.location = 'wordpress/?page_id=33'</script>
			";
        }
    }
?>
<style>
    .container{
        text-align: center;
        color: grey;
        margin-top: 20px;
    }
</style>
<?php get_header();?>
<div class="container my-5">
    <div class="row d-flex">
        <div class="col justify-content-center card shadow">
            <h2>Sign In to Checkout</h2>

            <div class="row justify-content-center">
            <form action="#" method="POST" class=""style="width:40vw; box-shadow:3px 3px 3px 3px 3px grey; padding:30px;">
            <div class="form-group">
                <input type="email" name="email" class="form-control input-sm mb-4" placeholder="You Email" class="form-control input-sm" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control input-sm mb-4" placeholder="You Password" class="form-control input-sm" required>
            </div>
            <div class="row justify-content-center">
                <div class="col-xs-4 col-sm-4 col-md-4">
            <input type="submit" value="Login" name="signin" class="btn btn-success btnblock">
            <?php session_destroy(); ?>
            </div>
            </div>
            <div class="container">
                    <h4>Don't have an Account? <a href="wordpress/?page_id=31">Sign Up</a></h4>
            </div>
            </form>
            </div>
        </div>
       
    </div>

</div>
<?php get_footer() ?>