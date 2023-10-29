let pDetails = JSON.parse(localStorage.getItem("pDetails"));

let pkgName = document.querySelector(".pkgName");
let pkgPrice = document.querySelector(".pkgPrice");
let pkgImg = document.querySelector(".pkgImg");
let whereTo = document.querySelector(".whereTo");

pkgName.value = pDetails[0];
pkgPrice.value = pDetails[1];
pkgImg.src = pDetails[2];
whereTo.value = pDetails[0];
