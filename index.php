<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />

  <!-- Favicons -->
  <link href="assets/img/gh.ico" rel="icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- CDN CSS Files -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="/">Shirokami Ryzen</a></h1>
        <div id="clockdate">
          <div class="clockdate-wrapper">
            <div id="clock"></div>
            <div id="date"></div>
            <br>
            <h1 style="color: white" id="temperature"></h1>
            <h2 style="color: white" id="description"></h2>
            <p style="color: white" id="location"></p>
          </div>
        </div>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/Nao.Tomori.UwU" class="facebook" target="_blank"><i
              class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/ryzen_vermillion/" class="instagram" target="_blank"><i
              class="bx bxl-instagram"></i></a>
          <a href="https://github.com/ShirokamiRyzen" class="github" target="_blank"><i class="bx bxl-github"></i></a>
          <button class="buttonmsc" onclick="toggleMusic()" id="btn-playback" data-play="false">
            <i class="fa fa-play"></i>
          </button>
          <audio id="audio" src="https://osanime.com/filedownload/2190008/Orange-(osanime.com).mp3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#blog" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Blog</span></a></li>
          <li><a href="#download" class="nav-link scrollto"><i class="bi bi-cloud-arrow-down"></i>
              <span>Download</span></a></li>
          <li><a href="#bot" class="nav-link scrollto"><i class="bi bi-robot"></i> <span>Whatsapp Bot</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Shirokami Ryzen</h1>
      <p>I'm <span class="text-slider-items">Designer, Programmer, Modder, Gamer</span>
        <strong class="text-slider"></strong>

        </h3>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Your code doesnt work? just use stackoverflow then and your code will work properly like a magic.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>UI/UX Designer &amp; Web Developer.</h3>
            <p class="fst-italic">
              Ngoding itu mudah dan simple, kalo gabisa bikin keseluruhan code, ya copas aja code orang atau ambil dari
              github, kalo ada error ya tinggal cari errornya lewat stackoverflow hehe.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday :</strong> <span>No Info</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website :</strong> <span>www.ryzn.site</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone :</strong> <span>+62 858-6403-4767</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Region :</strong> <span>Indonesia</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age :</strong> <span>18</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree :</strong> <span>Student College</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email :</strong> <span>shikamiryzen@gmail.com</span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance :</strong> <span>Not Avaliable</span></li>
                </ul>
              </div>
            </div>
            <p>
              Nao is a first-year student and also the student council president of Hoshinoumi Academy. She is
              hardworking, easily speaks her mind and has a very strong personality. She has the ability to make herself
              invisible, but this is limited to one person of her choosing at a time. She is a huge fan of the band
              Zhiend.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">
        <div class="section-title">
          <h2>My Certificate</h2>
          <div>
            <ul>
              <li><b><a href="https://www.coursera.org/account/accomplishments/certificate/AAJWKVH5XKZY" target="_blank">Google IT Support: Operating System</a></b></li>
              <li><b><a href="https://www.coursera.org/account/accomplishments/certificate/JZ9LJSLNFJTQ" target="_blank">Google IT Support: Computer Network</a></b></li>
              <li><b><a href="https://www.coursera.org/account/accomplishments/certificate/HAGCLHYFYZLZ" target="_blank">Google IT Support: Cyber Security</a></b></li>
              <li><b><a href="https://www.coursera.org/account/accomplishments/certificate/L562765UALQT" target="_blank">Google IT Support: Technical Support Basic</a></b></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End Facts Section -->

    <!-- ======= Blogspot Section ======= -->
    <section id="blog" class="portfolio section-blog">
      <div class="container">

        <div class="section-title">
          <h2>Blogspot</h2>
          <p>Want to see my Blog? You can see my Blog from link below.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/blogs/blogs.webp" class="img-fluid" alt="">
              <center>
                <h3>Win-Tweaker</h3>
              </center>
              <div class="portfolio-links">
                <a href="assets/img/blogs/blogs.webp" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Blogspot"><i class="bx bx-plus"></i></a>
                <a href="https://win-tweaker.blogspot.com" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    </section><!-- End Blogspot Section -->

    <!-- ======= Download Section ======= -->
    <section id="download" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Downloads</h2>
          <p>Select what you want to download from below.</p>
        </div>
        <div class="row" data-aos="fade-right">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <center>
                  <span style="color: #ff3c3c; font-size: 18pt"><b>ReVanced Mods</b>
                  </span>
                  <br>
                  <p class="card-text"></p>
                  <a href="revanced" class="btn gdrive"><i class="bi bi-caret-right"></i>DOWNLOAD PAGE</a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <center>
                  <span style="color: #ff3c3c; font-size: 18pt"><b>Spotify Mods</b>
                  </span>
                  <br>
                  <p class="card-text"></p>
                  <a href="spotify" class="btn gdrive"><i class="bi bi-caret-right"></i>DOWNLOAD PAGE</a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <center>
                  <span style="color: #ff3c3c; font-size: 18pt"><b>Mods Manager</b>
                  </span>
                  <br>
                  <p class="card-text"></p>
                  <a href="mods" class="btn gdrive"><i class="bi bi-caret-right"></i>DOWNLOAD PAGE</a>
                </center>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </section><!-- End Download Section -->

    <!-- ======= Bot Section ======= -->
    <section id="bot" class="contact section-bot-bg">
      <div class="container">

        <div class="section-title">
          <h2>Whatsapp Bot</h2>
          <p>Click button below to start using Bot</p>
        </div>

        <div class="row" data-aos="fade-right">
          <div class="col-md-4 mb-3">
            <div class="card">
              <center>
                <img src="https://raw.githubusercontent.com/ShirokamiRyzen/Nao-MD/main/media/own.jpg" width="100%">
              </center>
              <div class="card-body">
                <center>
                <span style="color: #3164d1; font-size: 18pt"><b>Nao-Botz MD</b>
                </span>
                <br>
                <p class="card-text"></p>
                <a href="https://api.whatsapp.com/send/?phone=6285864034767&text=.menu" class="btn whatsapp">Whatsapp
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path
                      d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                  </svg>
                </a>
              </div>
              </center>
            </div>
          </div>

        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Any Question? Or maybe the link is dead? Contact me</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Tokyo, Japan</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>shikamiryzen@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 858-6403-4767</p>
              </div>

              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d73324.88532894204!2d139.70174025217926!3d35.68850601865013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b857628235d%3A0xcdd8aef709a2b520!2sTokyo%2C%20Japan!5e0!3m2!1sen!2sid!4v1669021936087!5m2!1sen!2sid"
                width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="assets/js/sendgrid.js" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Ryzn</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="https://facebook.com/Nao.Tomori.UwU">Shirokami Ryzen</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.js"></script>
  <script src="./assets/js/clockdate.js"></script>
  <script src="./assets/js/music.js"></script>
  <script src="./assets/js/weather.js"></script>
  <script src="./assets/js/typed.min.js"></script>

  <!-- TYPED JS ADDITIONAL SETTING-->
  <script>
    if ($(".text-slider").length == 1) {

      var typed_strings =
        $(".text-slider-items").text();

      var typed = new Typed(".text-slider", {
        strings: typed_strings.split(", "),
        typeSpeed: 70,
        loop: true,
        backDelay: 900,
        backSpeed: 30,
      });
    }
  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>