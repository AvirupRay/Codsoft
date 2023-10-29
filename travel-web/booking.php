<?php
session_start();
$connection = mysqli_connect('localhost:3308', 'root', '', 'trip');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="boking-style.css" />
  <link rel="stylesheet" href="jqAndSweetAlert\sweetalert2.min.css">


  <!-- <script src="sweetalert.min.js"></script> -->
</head>

<body>
  <img src="" alt="" class="pkgImg" name="pkgImage" id="bg-img">
  <div class="logo">
    <img src="logo.png" alt="">
    <h1>TripNest</h1>
  </div>
  <section class="booking">

    <div class="text-form">
      <h1 class="heading-title">Book a trip Now !</h1>
      <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
          <div class="inputBox">
            <span>Name:</span>
            <input type="text" placeholder="Enter Your Name" name="name" required />
          </div>
          <div class="inputBox">
            <span>Email:</span>
            <input type="email" placeholder="Enter Your Email" name="email" required />
          </div>
          <div class="inputBox">
            <span>Phone:</span>
            <input type="number" placeholder="Enter Your Phone" name="phone" required />
          </div>
          <div class="inputBox">
            <span>Address:</span>
            <input type="text" placeholder="Enter Your address" name="address" required />
          </div>


          <div class="inputBox">
            <div>
              <span>Where to :</span>
              <input type="text" placeholder="Place Where You Want To Visit" name="location" required readonly class="whereTo" />
            </div>
            <div>
              <span>How Many:</span>
              <input type="number" placeholder="How Many Person " name="guests" required min="1" max="30" />
            </div>
          </div>

          <div class="inputBox">
            <div>
              <span>Arrivals:</span>
              <input type="date" name="arrivals" required />
            </div>
            <div>
              <span>Leaving:</span>
              <input type="date" name="leaving" required />
            </div>
          </div>

        </div>
        <div class="packageShower">
          <!-- <img src="" alt="" class="pkgImg" name="pkgImage"> -->
          <input class="pkgName" name="pkgNames" value="Package Name" readonly></input>
          <input class="pkgPrice" name="pkgPrices" value="Package Price" readonly></input>
        </div>
        <input type="submit" value="submit" class="btn" name="send" />
      </form>
    </div>
  </section>
  <!-- up -->

  <!-- prv -->
  <script src="jqAndSweetAlert\jquery-1.7.1.min.js"></script>
  <script src="jqAndSweetAlert\sweetalert2.all.min.js"></script>
  <script src="booking-script.js"></script>

  <?php
  if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
  ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Booking Confirmed',
        text: 'your details will be sent through mail',
        footer: '<a href="">Any issues: Contact Us!</a>',
      })
    </script>
  <?php
    unset($_SESSION['status']);
  }
  ?>
</body>

</html>