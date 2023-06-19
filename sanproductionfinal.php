<!DOCTYPE html>
<html>
  <head>
    <title>San Productions - Photography</title>

    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Domine&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

    <!--Feather-->
    <script src="https://unpkg.com/feather-icons"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- My Styles-->
    <link rel="stylesheet" type="text/css" href="sanproduction.css" />
  </head>
  <body>
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg">
      <a href="#" class="navbar-logo"><img src="assets/sanproduction.png" /></a>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Contact</a>
          </li>
        </ul>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="login-icon"><i data-feather="log-in"></i></a>
        <a href="#" id="production-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Hero -->
    <section class="hero" id="home">
      <main class="content">
        <h1 id="title"></h1>
        <h2 id="slogan"></h2>
        <p id="explanation"></p>
        <a id="cta" href="#" class="btn" role="button"></a>

        <div class="sosials">
          <a href="#"><i data-feather="instagram"></i></a>
          <a href="#"><i data-feather="twitter"></i></a>
          <a href="#"><i data-feather="facebook"></i></a>
          <a href="#"><i data-feather="youtube"></i></a>
        </div>
      </main>
    </section>

    <script>
    // Fungsi untuk memperbarui elemen HTML dengan data yang diperoleh dari PHP
    function updateHero(data) {
        document.getElementById("title").textContent = data.title;
        document.getElementById("slogan").textContent = data.slogan;
        document.getElementById("explanation").textContent = data.explanation;
        document.getElementById("cta").href = data.link_cta;
        document.getElementById("cta").textContent = data.cta;
    }

    // Fungsi untuk memperbarui data pada jumbotron
    function refreshHero() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                updateHero(data);
            }
        };
        xhr.open("GET", "connection.php", true);
        xhr.send();
    }

    // Memanggil fungsi refresh Jumbotron saat halaman dimuat dan setiap beberapa detik
    window.onload = function() {
        refreshHero();
        setInterval(refreshHero, 3000);
    };
    
    </script>

    <!-- Akhir Hero -->

    <!-- Awal About -->
    <section class="about" id="about">
      <div class="fixed-image">
        <img src="assets/section23.png" alt="Background Image" class="fixed-image" />
      </div>
      <div class="row">
        <div class="about-img"></div>
        <div class="content">
          <h2><span>About</span> Us</h2>
          <h3>Why You Shold Choose Us?</h3>
          <p>
            Choose us and experience excellence in photography services. At SAN Productions, we have a team of skilled and talented photographers who are committed to delivering exceptional results. With their expertise and passion, we
            capture precious moments through compelling photographs. Our wide range of professional photography services caters to various needs. From product photography for e-commerce, catalogs, and brochures, to portrait sessions for
            individuals, families, and couples, we ensure captivating visuals that reflect unique personalities. For weddings, our comprehensive packages cover pre-wedding sessions and the main event, capturing every joyous moment. With
            state-of-the-art equipment and meticulous editing, we guarantee stunning and memorable photographs. Trust us, the experts, to capture your cherished moments with skill and artistry. Choose SAN Productions for reliable and
            professional photography services.
          </p>
        </div>
      </div>
    </section>
    <!-- Akhir About -->

    <!-- Awal Promo -->
    <section class="promo" id="about">
      <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-theme="light">
        <h2><span>Special</span> Promo</h2>
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            </svg>
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Wedding Photography Package.</h1>
                <p class="opacity-75">Celebrate your special day with our wedding photography package. Capture the magical moments of your wedding ceremony and create lifelong memories.</p>
                <p><a class="btn btn-lg btn-outline-danger" href="#">Book today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            </svg>
            <div class="container">
              <div class="carousel-caption">
                <h1>Portrait Photography Session.</h1>
                <p>Showcase your unique personality and style with a professional portrait photography session. Let our photographers capture your essence in stunning portraits..</p>
                <p><a class="btn btn-lg btn-outline-danger" href="#">Find Photographer</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            </svg>
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>Event Photography Coveragee.</h1>
                <p>Make your special event memorable with our event photography coverage. From corporate events to parties, our photographers will document every moment.</p>
                <p><a class="btn btn-lg btn-outline-danger" href="#">Take It Now</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- Akhir Promo -->

    <!-- Section Production-->
    <section class="production" id="production">
      <div id="howitworks" class="wrapper light-green-wrapper">
        <h2 class="section-title mb-40 text-center">Just Four Steps to Get Awesome Photos with San Productions</h2>
        <div class="row gutter-50 gutter-md-30 process-wrapper line text-center">
          <div class="col-md-3">
            <span class="icon icon-bg bg-default mb-20"><span class="number">1</span></span>
            <h5>Book</h5>
            <p>Book your preferred photographer.</p>
          </div>
          <!--/column -->
          <div class="col-md-3">
            <span class="icon icon-bg bg-default mb-20"><span class="number">2</span></span>
            <h5>Photo shoot</h5>
            <p>Get the best photo shoot experience.</p>
          </div>
          <!--/column -->
          <div class="col-md-3">
            <span class="icon icon-bg bg-default mb-20"><span class="number">3</span></span>
            <h5>Editing</h5>
            <p>Doing some magic to your photos.</p>
          </div>
          <!--/column -->
          <div class="col-md-3">
            <span class="icon icon-bg bg-default mb-20"><span class="number">4</span></span>
            <h5>Delivery</h5>
            <p>Deliver your awesome photos.</p>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->

        <!-- /.container -->
        <div class="space20"></div>
      </div>
    </section>

    <!-- Services -->
    <section class="services" id="services">
      <div class="container">
        <header>
          <div class="d-flex flex-column flex-md-row align-items-center">
            <h2><span>Our</span> Services</h2>
          </div>
          <div class="d-flex flex-column flex-md-row align-items-center pb-2 mb-4 border-bottom">
            <p>We offer a wide range of professional photography services to meet your needs:</p>
          </div>
        </header>
        <main>
          <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal">Product</h4>
                </div>
                <div class="card-body">
                  <img src="assets/product.png" alt="Free Service" class="service-image" />
                  <h1 class="card-title pricing-card-title">Start<small class="text-body-secondary fw-light"> $100</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>Shooting Duration: 4-6 hours</li>
                    <li>Photo Editing Duration: 2-3 days</li>
                    <li>20 high-resolution edited photo</li>
                    <li>for e-commerce, catalogs, brochures, and more</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg btn-outline-danger">Sign up for free</button>
                </div>
              </div>
            </div>
            <!-- Menambahkan gambar dan informasi lain pada layanan Pro -->
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal">Portrait</h4>
                </div>
                <div class="card-body">
                  <img src="assets/potrait.jpg" alt="Pro Service" class="service-image" />
                  <h1 class="card-title pricing-card-title">Start<small class="text-body-secondary fw-light"> $150</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>Shooting Duration: 2-3 hours</li>
                    <li>Photo Editing Duration: 1-2 days</li>
                    <li>10 high-resolution edited photo</li>
                    <li>for individuals, families, couples, parent, and more</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg btn-outline-danger">Get started</button>
                </div>
              </div>
            </div>
            <!-- Menambahkan gambar dan informasi lain pada layanan Enterprise -->
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal">Wedding</h4>
                </div>
                <div class="card-body">
                  <img src="assets/prewedding.jpg" alt="Enterprise Service" class="service-image" />
                  <h1 class="card-title pricing-card-title">Start<small class="text-body-secondary fw-light"> $500</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>Shooting Duration: 1-3 days</li>
                    <li>Photo Editing Duration: 1-2 weeks</li>
                    <li>150 high-resolution edited photo</li>
                    <li>for prewedding shoots, wedding day coverage, and more</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg btn-outline-danger">Contact us</button>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </section>
    <!-- Akhir Services-->

    <!-- portfolio section -->
    <section id="portfolio" class="py-7">
      <div class="container">
        <div class="portfolio-content">
          <h2><span>Our Last</span> Work</h2>
          <div class="portfolio-grid grid">
            <div><img src="assets/port-1.jpg" /></div>
            <div><img src="assets/port-2.jpg" /></div>
            <div><img src="assets/port-3.jpg" /></div>
            <div><img src="assets/port-4.jpg" /></div>
            <div><img src="assets/port-5.jpg" /></div>
            <div><img src="assets/port-6.jpg" /></div>
            <div><img src="assets/port-7.jpg" /></div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of portfolio section -->

    <!-- Testimoni -->
    <section class="testimonial">
      <div class="testi">
        <h2><span>Statisfied</span> Testimony</h2>
      </div>
      <div class="container">
        <div class="box">
          <div class="image">
            <img src="assets/mgdalenaf.png" alt="" />
          </div>
          <div class="title">
            <h2>Emily Johnson</h2>
            <p>Professional Model</p>
          </div>
          <div class="text">
            <p>
              The photography service at San Productions is absolutely outstanding. Their team of photographers is not only highly skilled but also extremely friendly and professional. They made me feel comfortable throughout the entire
              photoshoot and captured the essence of my personality beautifully. I couldn't be happier with the results!
            </p>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="assets/nexcarlos.png" alt="" />
          </div>
          <div class="title">
            <h2>Michael Thompson</h2>
            <p>Happy Groom</p>
          </div>
          <div class="text">
            <p>
              San Productions provided exceptional photography services for my wedding day. The attention to detail and creativity displayed by their photographers was truly remarkable. They captured every precious moment, from the
              heartfelt ceremony to the joyous celebration. Looking at the photos now, I am transported back to that magical day. Thank you, San Photografi, for preserving those memories so beautifully!
            </p>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="assets/tanboykun.png" alt="" />
          </div>
          <div class="title">
            <h2>Michael Johnson</h2>
            <p>College Graduate</p>
          </div>
          <div class="text">
            <p>
              I had an amazing experience with San Productions for my graduation photoshoot. They captured the excitement and significance of the milestone perfectly. The photographer was professional and attentive to every detail, ensuring
              that the shots showcased my achievement and personality. The photos turned out incredible, and I received many compliments from family and friends. I highly recommend San Photografi for anyone looking for exceptional
              graduation photography.
            </p>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="assets/riaricis.png" alt="" />
          </div>
          <div class="title">
            <h2>Sarah Lewis</h2>
            <p>Proud Women Parent</p>
          </div>
          <div class="text">
            <p>
              I recently had a family photoshoot at San Productions, and I am beyond impressed with the results. The photographers were incredibly patient with my children, and they managed to capture the most genuine and heartfelt moments.
              The photos reflect the love and bond we share as a family. I highly recommend San Photografi to anyone looking for top-notch photography services!
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section class="contact" id="kontak">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2><span>Contact</span> Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.173824071032!2d110.37492487542477!3d-7.771384692247983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59b2d4729729%3A0xac4d7b5fcf34f8e4!2sUniversitas%20Gadjah%20Mada!5e0!3m2!1sid!2sid!4v1683535909972!5m2!1sid!2sid"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
          <div class="col-md-6">
            <form id="myForm" onsubmit="submitForm(event)">
              <div class="form-floating mb-3 icon-container">
                <a href="#" class="narahubung"><i data-feather="phone"></i> +628883628035</a>
                <a href="#" class="narahubung"><i data-feather="mail"></i> sanproduction@gmail.com</a>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingName" placeholder="Name" required />
                <label for="floatingName">Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" required />
                <label for="floatingEmail">Email</label>
              </div>
              <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingMessage" style="height: 150px" required></textarea>
                <label for="floatingMessage">Write your message here..</label>
              </div>
              <div>
                <button type="submit" class="btn btn-secondary">Send</button>
              </div>
            </form>
            <div id="message"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Akhir Contact -->

    <footer>
      <div class="sosials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
        <a href="#"><i data-feather="youtube"></i></a>
      </div>
      <div class="credit">
        <p>Created by <a href="">SanProductions</a>. | &copy; 2023.</p>
      </div>
    </footer>

    <!-- happy code-->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>

    <!--Feather icon-->
    <script>
      feather.replace();
    </script>
  </body>
</html>
