let bookingBtn = document.querySelectorAll(".bookingBtn");
let price = document.querySelectorAll(".packagePrice");
let city = document.querySelectorAll(".packageName");
let pkgImg = document.querySelectorAll(".pkgImg");

for (i = 0; i < bookingBtn.length; i++) {
  let ct = city[i].innerHTML;
  let pr = price[i].innerHTML;
  let pI = pkgImg[i].src;
  bookingBtn[i].addEventListener("click", () => {
    localStorage.setItem("pDetails", JSON.stringify([ct, pr, pI]));
    //to link the booking page
    window.location.href = "/travel-web/booking.php";
  });
}
