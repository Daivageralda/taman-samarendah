<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,500&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Swiper -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" />

    <title>Biduk-Biduk</title>
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-hidden">Logo</a>
      <div class="navbar-nav">
        <a href="#home">Beranda</a>
        <a href="#tempat">Lokasi</a>
        <a href="#galery">Galeri</a>
        <a href="#ulasan">Ulasan</a>
      </div>
      <div class="navbar-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
      <div id="particles-js"></div>
      <main class="content">
        <h1>Taman Samarendah</h1>
        <p>Oase hijau di tengah keramaian, menyegarkan pikiran</p>
      </main>
    </section>
    <!-- Hero Section end -->

    <!-- Location start -->
    <section class="lokasi" id="tempat">
      <main class="content">
        <h1>Lokasi</h1>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.668377126791!2d117.14136417447854!3d-0.49673623527182703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f0ea7cacadf%3A0x655348e743bcb8a9!2sTaman%20Samarendah!5e0!3m2!1sen!2sid!4v1685631832243!5m2!1sen!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </main>
    </section>
    <!-- Location end -->

    <!-- Carousell start -->
    <section class="carousell" id="galery">
      <main class="content">
        <h1>Galeri</h1>
        <div class="slider1">
          <div class="slide-track1">
            <div class="slide1">
              <img src="img/galeri1.png" alt="" />
            </div>
            <div class="slide1">
              <img src="img/galeri2.png" alt="" />
            </div>
            <div class="slide1">
              <img src="img/galeri3.png" alt="" />
            </div>
            <div class="slide1">
              <img src="img/galeri4.png" alt="" />
            </div>
            <div class="slide1">
              <img src="img/galeri5.png" alt="" />
            </div>
            <div class="slide1">
              <img src="img/galeri6.png" alt="" />
            </div>
            <!-- Ini Perulangan Supaya Carousellnya Infinity -->
            <div class="slide1">
              <img src="img/galeri1.png" alt="" />
            </div>
            <div class="slide1">
              <img src="img/galeri2.png" alt="" />
            </div>
            <div class="slide1">
              <img src="img/galeri3.png" alt="" />
            </div>
            <div class="slide1">
              <img src="img/galeri4.png" alt="" />
            </div>
            <div class="slide1">
              <img src="img/galeri5.png" alt="" />
            </div>
            <div class="slide1">
              <img src="img/galeri6.png" alt="" />
            </div>
          </div>
        </div>
        <div class="slider2">
          <div class="slide-track2">
            <div class="slide2">
              <img src="img/galeri7.png" alt="" />
            </div>
            <div class="slide2">
              <img src="img/galeri8.png" alt="" />
            </div>
            <div class="slide2">
              <img src="img/galeri9.png" alt="" />
            </div>
            <div class="slide2">
              <img src="img/galeri10.png" alt="" />
            </div>
            <div class="slide2">
              <img src="img/galeri11.png" alt="" />
            </div>
            <div class="slide2">
              <img src="img/galeri12.png" alt="" />
            </div>
            <!-- Ini Perulangan Supaya Carousellnya Infinity -->
            <div class="slide2">
              <img src="img/galeri7.png" alt="" />
            </div>
            <div class="slide2">
              <img src="img/galeri8.png" alt="" />
            </div>
            <div class="slide2">
              <img src="img/galeri9.png" alt="" />
            </div>
            <div class="slide2">
              <img src="img/galeri10.png" alt="" />
            </div>
            <div class="slide2">
              <img src="img/galeri11.png" alt="" />
            </div>
            <div class="slide2">
              <img src="img/galeri12.png" alt="" />
            </div>
          </div>
        </div>
        <a href="galeri.php">Lihat Selengkapnya</a>
      </main>
    </section>
    <!-- Carousell end -->

    <!-- Review start -->
    <section class="review" id="ulasan">
      <main class="content">
        <h1>Ulasan</h1>
        <div class="slide-container swiper">
          <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
              <div class="card swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="img/ulasan1.png" alt="" class="card-img" />
                  </div>
                </div>
                <div class="card-content">
                  <h2 class="name">Zaki Fauzan Rabbani</h2>
                  <p class="description">Wah, tamannya sangat bagus sekali! Cocok jika ingin refreshing di pusat kota.</p>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="img/ulasan2.png" alt="" class="card-img" />
                  </div>
                </div>
                <div class="card-content">
                  <h2 class="name">Zaki Baridwan Sauqi</h2>
                  <p class="description">Sore-sore enaknya jogging di Taman Samarendah, soalnya adem</p>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="img/ulasan3.png" alt="" class="card-img" />
                  </div>
                </div>
                <div class="card-content">
                  <h2 class="name">Ferryza Nurwahyu</h2>
                  <p class="description">Pemandangan malam di Taman Samarendah ajib banget, lampu-lampu di menaranya keren</p>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="img/ulasan4.png" alt="" class="card-img" />
                  </div>
                </div>
                <div class="card-content">
                  <h2 class="name">Muhammad Nauvaldi Caesar</h2>
                  <p class="description">Jauh-jauh dari Balikpapan cuman pengen ke Taman Samarendah aja</p>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="img/ulasan5.png" alt="" class="card-img" />
                  </div>
                </div>
                <div class="card-content">
                  <h2 class="name">Awang Levy</h2>
                  <p class="description">Enaknya tuh bareng ayang kalo ke Taman Samarendah</p>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="img/ulasan6.png" alt="" class="card-img" />
                  </div>
                </div>
                <div class="card-content">
                  <h2 class="name">Charlie Puth</h2>
                  <p class="description">View Taman Samarendah oke banget, jadi pengen ngadain konser di sini</p>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="img/ulasan7.png" alt="" class="card-img" />
                  </div>
                </div>
                <div class="card-content">
                  <h2 class="name">Novil Fahlevy</h2>
                  <p class="description">Tempat favorit untuk melepas penat setelah ngoding seharian</p>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="img/ulasan8.png" alt="" class="card-img" />
                  </div>
                </div>
                <div class="card-content">
                  <h2 class="name">Albrobob</h2>
                  <p class="description">Pengen basmi para pencuri helm di Taman Samarendah sampai rata</p>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="img/ulasan9.png" alt="" class="card-img" />
                  </div>
                </div>
                <div class="card-content">
                  <h2 class="name">Jidan</h2>
                  <p class="description">Suka kesini sendirian kalo gak diajak ngumpul bareng teman</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next swiper-navBtn"></div>
          <div class="swiper-button-prev swiper-navBtn"></div>
          <div class="swiper-pagination"></div>
        </div>
        <a href="ulasan.php">Lihat Selengkapnya</a>
      </main>
    </section>
    <!-- Review end -->

    <!-- Footer start -->
    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
        <a href="#"><i data-feather="globe"></i></a>
      </div>
      <div class="links navbar-nav">
        <a href="#home">Beranda</a>
        <a href="#tempat">Lokasi</a>
        <a href="galery.php">Galeri</a>
        <a href="ulasan.php">Ulasan</a>
      </div>
      <div class="credit">
        <p>Created by <a href="#">daivageralda</a>. | &copy; 2023</p>
      </div>
    </footer>
    <!-- Footer end -->
    <!-- Icons -->
    <script>
      feather.replace();
    </script>

    <!-- Swiper -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Javascript -->
    <script src="js/script.js"></script>

    <!-- Javascript Particles -->
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
