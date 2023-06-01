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

// Toggle class active
const navbarNav = document.querySelector(".navbar-nav");

// Ketika mengklik hamburger menu
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
  hamburgerMenu.style.color = "var(--neutral)"; // Mengatur warna teks hamburger menu menjadi putih saat menu aktif
  feather.replace(); // Mengaktifkan kembali Feather Icons setelah mengubah warna ikon
};

// Ketika mengklik di luar hamburger
const hamburger = document.querySelector("#hamburger-menu");
document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
    hamburgerMenu.style.color = "var(--text)"; // Mengatur warna teks hamburger menu menjadi putih saat menu tidak aktif
    feather.replace(); // Mengaktifkan kembali Feather Icons setelah mengubah warna ikon
  }
});

// Dapatkan semua elemen <a> di dalam navbar
var navbarLinks = document.querySelectorAll(".navbar-nav a");

// Tambahkan event listener saat jendela di-scroll
window.addEventListener("scroll", function () {
  // Loop melalui setiap elemen <a> di dalam navbar
  navbarLinks.forEach(function (link) {
    var targetId = link.getAttribute("href"); // Dapatkan nilai atribut href
    var targetElement = document.querySelector(targetId); // Dapatkan elemen target berdasarkan id

    if (targetElement) {
      // Dapatkan posisi scroll saat ini
      var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

      // Dapatkan posisi elemen target
      var targetPosition = targetElement.offsetTop;

      // Cek apakah posisi scroll saat ini berada dalam jangkauan elemen target
      if (scrollPosition >= targetPosition && scrollPosition < targetPosition + targetElement.offsetHeight) {
        // Tambahkan kelas aktif ke elemen <a> yang berkaitan
        link.classList.add("active");
      } else {
        // Hapus kelas aktif dari elemen <a> yang tidak berkaitan
        link.classList.remove("active");
      }
    }
  });
});

// Tambahkan event listener untuk setiap elemen <a>
navbarLinks.forEach(function (link) {
  link.addEventListener("click", function (event) {
    event.preventDefault(); // Mencegah perilaku default dari link

    var targetId = this.getAttribute("href"); // Dapatkan nilai atribut href

    // Cek apakah targetId adalah anchor yang valid
    if (targetId && targetId.startsWith("#")) {
      var targetElement = document.querySelector(targetId); // Dapatkan elemen target berdasarkan id

      if (targetElement) {
        // Perhitungan waktu penundaan dalam milidetik (misalnya 500ms)
        var delay = 500;

        // Perhitungan posisi target
        var targetPosition = targetElement.offsetTop;

        // Perhitungan posisi scroll saat ini
        var startPosition = window.pageYOffset || document.documentElement.scrollTop;

        // Perhitungan jarak scroll yang harus dilakukan
        var distance = targetPosition - startPosition;

        // Perhitungan jumlah langkah scroll yang akan dilakukan dalam satu detik
        var steps = 50; // Mengurangi jumlah langkah untuk mengurangi kecepatan scroll

        // Perhitungan perbedaan posisi scroll untuk setiap langkah
        var stepSize = distance / steps;

        // Fungsi untuk melakukan scroll
        function scrollToTargetPosition(currentStep) {
          // Menghitung posisi scroll berdasarkan langkah saat ini
          var scrollPosition = startPosition + currentStep * stepSize;

          // Menggulirkan halaman ke posisi scroll saat ini
          window.scrollTo(0, scrollPosition);

          // Memeriksa apakah masih ada langkah scroll yang tersisa
          if (currentStep < steps) {
            // Memanggil fungsi scrollToTargetPosition() dengan langkah selanjutnya setelah penundaan
            setTimeout(function () {
              scrollToTargetPosition(currentStep + 1);
            }, delay / steps);
          }
        }

        // Memanggil fungsi scrollToTargetPosition() dengan langkah awal 1
        scrollToTargetPosition(1);
      }
    }
  });
});

// Swiper

var swiper = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 25,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  }
});
