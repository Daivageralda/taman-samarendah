// Ketika halaman discroll
window.addEventListener("scroll", function () {
  var navbar = document.querySelector(".navbar");
  var navbarLinks = navbar.querySelectorAll(".navbar-nav a");
  var scrolled = window.pageYOffset || document.documentElement.scrollTop;
  var hamburgerMenu = document.querySelector("#hamburger-menu");
  var hamburgerIcon = hamburgerMenu.querySelector("i"); // Mendapatkan elemen ikon hamburger

  if (scrolled > 25) {
    navbar.classList.add("navbar-scrolled"); // Menambahkan kelas saat di-scroll
    navbarLinks.forEach(function (link) {
      link.style.color = "var(--text)";
      link.classList.add("navbar-link-scrolled"); // Menambahkan kelas pada elemen <a> saat di-scroll
    });
  } else {
    navbar.classList.remove("navbar-scrolled"); // Menghapus kelas saat kembali ke posisi awal
    navbarLinks.forEach(function (link) {
      link.style.color = ""; // Menghapus pengaturan warna teks untuk kembali ke nilai default
      link.classList.remove("navbar-link-scrolled"); // Menghapus kelas pada elemen <a> saat kembali ke posisi awal
    });
  }
});
var swiper = new Swiper(".tes", {
  slidesPerView: 3,
  grid: {
    rows: 2,
  },
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
