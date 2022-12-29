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
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style4.css">
    <script src=”signup.js”></script>
</head>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        <div class="logFlex" style="backdrop-filter: blur(5px);">
            <div class="logbody" >
                <div class="card text-dark bg-light mb-3" style="max-width: 30rem;">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                    <form class="row g-3" action="login_submit.php" method="post">
                        <div class="col-12">
                        <label for="inputAddress" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Enter email address" required>
                        </div>
                        <div class="col-12">
                            <label for="name" class="form-label">Password</label>
                            <input id='password' name="password" type="password" class="form-control" id="password" placeholder="Enter password" required>
                        </div> 
                        <div class="col-12">
                        <a class="login-links" href="#">Forgot Password?</a>
                        <div style="text-align: right;">
                            <button name="submit" class="btn btn-primary btn-danger">Login</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <div>
                        <footer style="text-align: center;">
                            <a class="login-links" href="signup.php">Don't have an account? Go to Signup</a>
                        </footer>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>