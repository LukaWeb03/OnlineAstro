<?php 
session_start();
if(isset($_SESSION['authenticated']))
{
    $_SESSION['status'] = "You are already Logged In";
    header('Location: dashboard.php');
    exit(0);
}

$page_title = "Login Form";
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<style>
    html, body {
        background-image: url(homepic.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <?php require_once('flashmessage.php'); ?>

                <div class="card shadow">
                    <div class="card-header">
                        <h5>Login Form</h5>
                    </div>
                    <div class="card-body">

                        <form action="logincode.php" method="POST">

                            <div class="form-group mb-3">
                                <label for="">Email Address</label>
                                <input type="text" name="email" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" >
                            </div>

                            <div class="form-group">
                                <button type="submit" name="login_now_btn" class="btn btn-primary" style="background-color: #10133a !important;">Login Now</button>
                                <a href="password-reset.php" class="float-end bg-transparent">Forgot Your Password?</a>
                            </div>

                        </form>

                        <hr>
                        <h5>
                            Did not recieve your Verification Email?
                            <a href="resend-email-verification.php" class="btn" style="background-color: #10133a !important; color:white;">Resend</a>
                        </h5>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>
