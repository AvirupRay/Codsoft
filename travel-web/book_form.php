<?php
session_start();
$connection = mysqli_connect('localhost:3308', 'root', '', 'trip');

if (isset($_POST['send'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $location = $_POST['location'];
  $guests = $_POST['guests'];
  $arrivals = $_POST['arrivals'];
  $leaving = $_POST['leaving'];
  $packageName = $_POST['pkgNames'];
  $packagePrice = $_POST['pkgPrices'];

  $request = "insert into book_form(name, email, phone, address, location, guests, arrivals, leaving, packageName, packagePrice	) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving','$packageName','$packagePrice')";
  // header('location:booking.php');
  $query_run = mysqli_query($connection, $request);

  if ($query_run) {
    //registered succesfully
    header('location:booking.php');
    $_SESSION['status'] = "Registered Sucessfully";
    $_SESSION['status_code'] = "success";
  } else {

    //register problem
    echo 'Something Went Worng Please Try Again';
  }
}
