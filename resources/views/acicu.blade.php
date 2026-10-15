<!-- =========================
FILE: index.html
========================= -->
<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>ACICU - Aneka Aci Bungcu</title>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&family=Poppins:wght@400;500;600;700&family=Baloo+2:wght@400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <!-- =========================
       NAVBAR
  ========================= -->
    <header class="navbar">
      <div class="nav-left">
        <img src="{{ asset('src-acicu/logo.jpg') }}" alt="Logo" class="logo" />

        <div class="logo-text">
          <h1>ACICU</h1>
          <p>Aneka Aci Bungcu</p>
        </div>
      </div>

      <div class="nav-actions">
        <nav class="nav-menu" id="navMenu">
          <a data-target="home" class="nav-link active">Home</a>
          <a data-target="menu" class="nav-link">Menu</a>

          <div class="separator"></div>

          <a data-target="about" class="nav-link">About Us</a>
          <a data-target="contact" class="nav-link">Contact</a>
        </nav>

        <button class="nav-cart-btn" id="cartToggleBtn" aria-label="Buka Keranjang Belanja" type="button">
          <i class="fa-solid fa-cart-shopping"></i>
          <span class="nav-cart-badge" id="cartBadge">0</span>
        </button>

        <div class="hamburger" id="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>

    <!-- =========================
       HOME
  ========================= -->
    <section class="home" id="home">
      <!-- WAVE -->
      <div class="home-wave">
        <img src="{{ asset('src-acicu/Vector.png') }}" alt="" class="wave-img" />
      </div>

      <!-- BLOB -->
      <div class="blob"></div>

      <div class="home-content">
        <div class="hero-left">
          <h1>
            OPEN <br />
            PREORDER
          </h1>
        </div>

        <div class="hero-right">
          <img src="{{ asset('src-acicu/hero.png') }}" alt="Hero" />
        </div>
      </div>

      <!-- BENEFIT -->
      <!-- BENEFIT -->
      <div class="benefit-card">
        <!-- ITEM -->
        <div class="benefit-item">
          <i class="fa-solid fa-truck-fast"></i>

          <h3>
            Free <br />
            Delivery
          </h3>
        </div>

        <!-- DIVIDER -->
        <div class="benefit-divider"></div>

        <!-- ITEM -->
        <div class="benefit-item">
          <i class="fa-solid fa-clock"></i>

          <h3>
            Fresh <br />
            Daily
          </h3>
        </div>

        <!-- DIVIDER -->
        <div class="benefit-divider"></div>

        <!-- ITEM -->
        <div class="benefit-item">
          <i class="fa-solid fa-star"></i>

          <h3>
            Best <br />
            Quality
          </h3>
        </div>

        <!-- DIVIDER -->
        <div class="benefit-divider"></div>

        <!-- ITEM -->
        <div class="benefit-item">
          <i class="fa-solid fa-tags"></i>

          <h3>
            Affordable <br />
            Price
          </h3>
        </div>
      </div>
    </section>

    <!-- =========================
       MENU
  ========================= -->
    <section class="menu-section" id="menu">
      <!-- TITLE -->
      <div class="menu-title">
        <h2>MENU</h2>
      </div>

      <!-- PINK BACKGROUND -->
      <div class="menu-bg"></div>

      <!-- YUMMY TEXT -->
      <div class="yummy-text">
        Yummy <br />
        Time
      </div>

      <!-- ARROW -->
      <button class="menu-arrow left" onclick="prevSlide()">
        <i class="fa-solid fa-chevron-left"></i>
      </button>

      <button class="menu-arrow right" onclick="nextSlide()">
        <i class="fa-solid fa-chevron-right"></i>
      </button>

      <!-- SLIDER -->
      <div class="slider-wrapper">
        <div class="slider">
          <!-- ACTIVE -->
          <div class="slide active">
            <div class="side-circle left">
              <img src="{{ asset('src-acicu/molachee.PNG') }}" alt="Molachee" />
            </div>

            <div class="main-circle">
              <img src="{{ asset('src-acicu/ciweng.PNG') }}" alt="Ciweng" />
            </div>

            <div class="menu-info">
              <h1>CIWENG</h1>

              <p>
                Camilan berbahan dasar aci yang gurih dan renyah. Memiliki rasa
                khas yang cocok dinikmati sebagai teman bersantai ataupun
                camilan sehari-hari
              </p>

              <button type="button" class="btn-menu-cart" onclick="addToCart('ciweng')">
                <i class="fa-solid fa-cart-plus"></i> Tambah ke Keranjang
              </button>
            </div>

            <div class="side-circle right">
              <img src="{{ asset('src-acicu/cilukba.PNG') }}" alt="Cilukba" />
            </div>
          </div>

          <!-- LEFT -->
          <div class="slide left-slide">
            <div class="side-circle left">
              <img src="{{ asset('src-acicu/cilukba.PNG') }}" alt="Cilukba" />
            </div>

            <div class="main-circle">
              <img src="{{ asset('src-acicu/molachee.PNG') }}" alt="Molachee" />
            </div>

            <div class="menu-info">
              <h1>MOLACHEE</h1>

              <p>
                Makanan ringan dengan cita rasa khas dan tekstur kenyal yang
                lezat. Disajikan fresh setiap hari dengan perpaduan rasa yang
                nikmat.
              </p>

              <button type="button" class="btn-menu-cart" onclick="addToCart('molachee')">
                <i class="fa-solid fa-cart-plus"></i> Tambah ke Keranjang
              </button>
            </div>

            <div class="side-circle right">
              <img src="{{ asset('src-acicu/ciweng.PNG') }}" alt="Ciweng" />
            </div>
          </div>

          <!-- RIGHT -->
          <div class="slide right-slide">
            <div class="side-circle left">
              <img src="{{ asset('src-acicu/ciweng.PNG') }}" alt="Ciweng" />
            </div>

            <div class="main-circle">
              <img src="{{ asset('src-acicu/cilukba.PNG') }}" alt="Cilukba" />
            </div>

            <div class="menu-info">
              <h1>CILUKBA</h1>

              <p>
                Camilan gurih dengan tekstur renyah di luar dan lembut di dalam.
                Cocok dinikmati saat santai bersama teman maupun keluarga.
              </p>

              <button type="button" class="btn-menu-cart" onclick="addToCart('cilukba')">
                <i class="fa-solid fa-cart-plus"></i> Tambah ke Keranjang
              </button>
            </div>

            <div class="side-circle right">
              <img src="{{ asset('src-acicu/molachee.PNG') }}" alt="Molachee" />
            </div>
          </div>
        </div>
      </div>

      <!-- PRICE -->
      <div class="price" id="menuPriceBtn" title="Klik untuk tambah ke keranjang" onclick="addActiveMenuToCart()">Rp10.000</div>
    </section>
    <!-- =========================
       ABOUT
  ========================= -->
    <section class="about-section" id="about">
      <div class="about-card">
        <div class="about-left">
          <div class="about-logo-circle">
            <img src="{{ asset('src-acicu/logo.jpg') }}" alt="ACICU" />
          </div>
        </div>

        <div class="about-right">
          <h2>Tentang ACICU</h2>

          <p>
            ACICU adalah usaha kuliner yang menghadirkan aneka aci dengan cita
            rasa lezat, dibuat dari bahan pilihan dan diolah secara higienis
            hingga sampai ke konsumen.
          </p>

          <p>
            Kami berkomitmen untuk selalu memberikan kualitas terbaik dan
            kepuasan bagi setiap pelanggan.
          </p>

          <div class="features">
            <div class="feature">
              <i class="fa-solid fa-heart"></i>
              <span>Dibuat Dengan Cinta</span>
            </div>

            <div class="feature-divider"></div>

            <div class="feature">
              <i class="fa-solid fa-bag-shopping"></i>
              <span>Bahan Pilihan Berkualitas</span>
            </div>

            <div class="feature-divider"></div>

            <div class="feature">
              <i class="fa-solid fa-shield-heart"></i>
              <span>Higienis & Terpercaya</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================
       CONTACT
  ========================= -->
    <section class="contact-section" id="contact">
      <div class="contact-card">
        <h2>Ada Pertanyaan ?</h2>

        <h3>Hubungi Kami Sekarang Juga !</h3>

        <div class="line"></div>

        <a href="https://wa.me/6282286512274" target="_blank" class="wa-btn">
          <i class="fa-brands fa-whatsapp"></i>

          Pesan Via Whatsapp
        </a>
      </div>
    </section>

    <!-- =========================
       FOOTER
  ========================= -->
    <footer class="footer">
      <!-- WAVE -->
      <div class="footer-wave"></div>

      <div class="footer-content">
        <!-- LEFT -->
        <div class="footer-left">
          <h1>ACICU</h1>

          <p>
            Aci enak & Halal. <br />
            Berkomitmen menyajikan <br />
            cita rasa lezat
          </p>
        </div>

        <!-- CENTER -->
        <div class="footer-center">
          <a href="#home">Home</a>
          <a href="#menu">Menu</a>
          <a href="#about">About Us</a>
          <a href="#contact">Contact</a>
        </div>

        <!-- DIVIDER -->
        <div class="footer-divider"></div>

        <!-- RIGHT -->
        <div class="footer-right">
          <div class="footer-social">
            <i class="fa-brands fa-whatsapp"></i>
            <span>082286512274</span>
          </div>

          <div class="footer-social">
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-tiktok"></i>
            <span>acicu.licious</span>
          </div>
        </div>
      </div>

      <div class="copyright">© 2026 . ACICU Food</div>
    </footer>

    <!-- =========================
       SHOPPING CART DRAWER
    ========================= -->
    <div class="cart-overlay" id="cartOverlay"></div>

    <aside class="cart-drawer" id="cartDrawer" aria-label="Keranjang Belanja">
      <div class="cart-header">
        <div class="cart-header-title">
          <i class="fa-solid fa-bag-shopping"></i>
          <span>Keranjang Belanja</span>
          <span class="cart-count-pill" id="cartCountPill">0 item</span>
        </div>
        <button class="cart-close-btn" id="cartCloseBtn" aria-label="Tutup Keranjang" type="button">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <div class="cart-items" id="cartItemsList">
        <!-- Rendered dynamically by script.js -->
      </div>

      <div class="cart-footer" id="cartFooter">
        <div class="cart-subtotal-row">
          <span class="cart-subtotal-label">Subtotal Pesanan:</span>
          <span class="cart-subtotal-amount" id="cartSubtotalAmount">Rp 0</span>
        </div>
        <p class="cart-fresh-note">
          *Pengiriman fresh drop dijadwalkan sesuai kuota batch pre-order hari ini.
        </p>

        <a href="{{ url('/checkout') }}" class="btn-cart-checkout" id="btnCartCheckout">
          <span>Lanjut Checkout</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>

        <a href="#" target="_blank" class="btn-cart-whatsapp" id="btnCartWhatsApp">
          <i class="fa-brands fa-whatsapp"></i>
          <span>Kirim Format Order ke WhatsApp</span>
        </a>
      </div>
    </aside>

    <!-- TOAST FEEDBACK -->
    <div class="cart-toast" id="cartToast">
      <i class="fa-solid fa-circle-check"></i>
      <span id="cartToastText">Item berhasil ditambahkan ke keranjang</span>
    </div>

    <!-- JS -->
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>