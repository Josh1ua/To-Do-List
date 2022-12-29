<?php
include 'common.php';

if (!$dbc){
    die("Cannot Connect: ". mysqli_connect_error());
}
else{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $name = $fname." ".$lname;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $address = $post['address'];

    $count = "SELECT * FROM `users`";
    $val = mysqli_query($dbc, $count);
    $id = mysqli_num_rows($val) + 1;

    $sql = "SELECT * FROM `users` WHERE email='$email'";
    $result = mysqli_query($dbc, $sql);
    if(mysqli_num_rows($result)>0){
        echo "Email address already exists.";
        header('location: signup.php');
    }
    else{
        $sq = "INSERT INTO `users`(`uid`, `name`, `email`, `password`, `contact no`, `Address`) VALUES ('$id','$name','$email', '$password', '$contact', '$address')";
        $r = mysqli_query($dbc, $sq);

        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['uid'] = $id;
        header('location: index.php');
    }
}
?>