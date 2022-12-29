<?php
include 'common.php';
    if(isset($_SESSION['email'])){
    header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
        <?php
            include 'includes/header.php';
        ?>
        <div class="logFlex" style="backdrop-filter: blur(5px);">
            <div class="signUpBody">
                <div class="card text-dark bg-light mb-3" style="max-width: 35rem;">
                    <div class="card-header">Create Account</div>
                    <div class="card-body">
                    <form class="row g-3" style="background-color: white;" action="signup_script.php" method="post">
                        <div class="col-md-6">
                        <label for="name" class="form-label">First Name</label>
                        <input name="fname" type="text" class="form-control" id="inputname" required>
                        </div>
                        <div class="col-md-6">
                        <label for="name" class="form-label">Last Name</label>
                        <input name="lname" type="text" class="form-control" id="inputname" required>
                        </div>
                        <div class="col-12">
                        <label for="inputAddress" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Enter email address" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Password</label>
                            <input name="password" id='password' type="password" class="form-control" id="password" placeholder="Enter password" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Confirm Password</label>
                            <input name="cpassword" id='confirm_password' type="password" class="form-control" id="password" placeholder="Confirm Password" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Contact</label>
                            <input name="contact" id='contact' type="tel" class="form-control" id="number" placeholder="Contact No" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Address</label>
                            <input name="address" id='address' type="text" class="form-control" id="text" placeholder="Address" required>
                        </div>
                        <div class="col-12">
                        <button type="submit" class="btn btn-danger" style="width: 100%">Create Account</button>
                        </div>
                    </form>
                    <br>
                    <div>
                        <footer style="text-align: center;">
                            <a class="login-links" href="login.php" >Have an account? Go to login</a>
                        </footer>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var password = document.getElementById('password');
            confirm_password = document.getElementById('confirm_password');
            function validatePassword(){
            if(password.value != confirm_password.value){
            confirm_password.setCustomValidity("Passwords don't match!");
            }
            else {
            confirm_password.setCustomValidity('');
            }
            }
            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
        </script>
        <?php
            include 'includes/footer.php';
        ?>
</body>
</html>