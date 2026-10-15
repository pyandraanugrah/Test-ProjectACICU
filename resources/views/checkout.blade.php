<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Pre-Order ACICU - Aneka Aci Bungcu</title>

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

    <style>
      .checkout-body {
        background: #fcd9e2;
        min-height: 100vh;
        font-family: 'Poppins', sans-serif;
        color: #222222;
      }

      .checkout-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 30px 24px 60px;
      }

      /* Breadcrumb */
      .co-breadcrumb {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 1.35rem;
        color: #777777;
        margin-bottom: 24px;
      }

      .co-breadcrumb a {
        color: #666666;
        text-decoration: none;
        transition: color 0.2s;
      }

      .co-breadcrumb a:hover {
        color: var(--pink);
      }

      .co-breadcrumb span.active {
        color: var(--pink);
        font-weight: 600;
      }

      /* Hero Banner Card */
      .co-hero-card {
        background: #ffffff;
        border-radius: 28px;
        padding: 32px 40px;
        margin-bottom: 28px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
      }

      .co-hero-card h1 {
        font-size: 2.8rem;
        font-weight: 700;
        color: #e03268;
        margin-bottom: 8px;
        line-height: 1.2;
      }

      .co-hero-card p {
        font-size: 1.4rem;
        color: #555555;
        line-height: 1.6;
        max-width: 780px;
      }

      /* Two Columns Grid */
      .co-grid {
        display: grid;
        grid-template-columns: 1.4fr 1fr;
        gap: 28px;
        align-items: start;
      }

      .co-card {
        background: #ffffff;
        border-radius: 28px;
        padding: 32px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        margin-bottom: 24px;
      }

      .co-card-header {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        margin-bottom: 24px;
      }

      .co-icon-bubble {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: #fff0f5;
        color: var(--pink);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        flex-shrink: 0;
      }

      .co-card-title h2 {
        font-size: 1.85rem;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 3px;
      }

      .co-card-title p {
        font-size: 1.25rem;
        color: #777777;
      }

      /* Form inputs */
      .form-group {
        margin-bottom: 20px;
      }

      .form-group label {
        display: block;
        font-size: 1.35rem;
        font-weight: 600;
        color: #222222;
        margin-bottom: 8px;
      }

      .form-group label span.req {
        color: #e03268;
      }

      .input-wrapper {
        position: relative;
        display: flex;
        align-items: center;
      }

      .input-wrapper i {
        position: absolute;
        left: 16px;
        color: #999999;
        font-size: 1.5rem;
      }

      .co-input {
        width: 100%;
        background: #ffffff;
        border: 1.5px solid #ffccd9;
        border-radius: 14px;
        padding: 12px 16px 12px 46px;
        font-size: 1.35rem;
        font-family: 'Poppins', sans-serif;
        color: #222222;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s;
        box-sizing: border-box;
      }

      .co-input:focus {
        border-color: var(--pink);
        box-shadow: 0 0 0 3px rgba(249, 91, 143, 0.2);
      }

      .co-input-simple {
        width: 100%;
        background: #ffffff;
        border: 1.5px solid #ffccd9;
        border-radius: 14px;
        padding: 12px 16px;
        font-size: 1.35rem;
        font-family: 'Poppins', sans-serif;
        color: #222222;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s;
        box-sizing: border-box;
      }

      .co-input-simple:focus {
        border-color: var(--pink);
        box-shadow: 0 0 0 3px rgba(249, 91, 143, 0.2);
      }

      .form-subnote {
        font-size: 1.15rem;
        color: #888888;
        margin-top: 6px;
      }

      .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
      }

      /* Payment method cards */
      .co-payment-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 16px;
      }

      .co-badge-instant {
        background: #fee2e2;
        color: #e03268;
        font-size: 1.15rem;
        font-weight: 600;
        padding: 4px 12px;
        border-radius: 999px;
      }

      .co-payment-methods {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
        margin-bottom: 20px;
      }

      .co-pay-box {
        border: 1.5px solid #f0f0f4;
        border-radius: 18px;
        padding: 16px;
        background: #ffffff;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .co-pay-box h4 {
        font-size: 1.3rem;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 10px;
      }

      .co-qris-code {
        width: 140px;
        height: 140px;
        border-radius: 10px;
        border: 1px solid #eeeeee;
        padding: 6px;
        background: #ffffff;
        margin-bottom: 10px;
      }

      .co-pay-sub {
        font-size: 1.05rem;
        color: #777777;
        line-height: 1.4;
      }

      .co-bca-badge {
        background: #f0f4ff;
        color: #1e40af;
        font-size: 1.1rem;
        font-weight: 700;
        padding: 3px 10px;
        border-radius: 8px;
        margin-bottom: 12px;
      }

      .co-norek-box {
        display: flex;
        align-items: center;
        gap: 8px;
        background: #fff0f5;
        border: 1px dashed var(--pink);
        padding: 8px 12px;
        border-radius: 10px;
        margin-bottom: 8px;
        width: 100%;
        justify-content: center;
        box-sizing: border-box;
      }

      .co-norek-num {
        font-size: 1.45rem;
        font-weight: 700;
        color: #1a1a1a;
        letter-spacing: 0.5px;
      }

      .co-btn-salin {
        background: #ffffff;
        border: 1px solid #ffd1df;
        color: var(--pink);
        font-size: 1.15rem;
        font-weight: 600;
        padding: 3px 10px;
        border-radius: 6px;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        transition: background 0.2s;
      }

      .co-btn-salin:hover {
        background: #fff0f5;
      }

      .co-an-name {
        font-size: 1.2rem;
        font-weight: 600;
        color: #444444;
        margin-bottom: 10px;
      }

      /* Dropzone Upload */
      .co-dropzone {
        border: 2px dashed var(--pink);
        background: #fff5f8;
        border-radius: 20px;
        padding: 28px 20px;
        text-align: center;
        cursor: pointer;
        transition: background 0.2s, border-color 0.2s;
        margin-bottom: 16px;
        position: relative;
      }

      .co-dropzone:hover {
        background: #ffeef3;
      }

      .co-drop-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: #ffffff;
        color: var(--pink);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin: 0 auto 12px;
        box-shadow: 0 2px 8px rgba(249, 91, 143, 0.15);
      }

      .co-drop-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: #222222;
        margin-bottom: 4px;
      }

      .co-drop-sub {
        font-size: 1.15rem;
        color: #888888;
        margin-bottom: 14px;
      }

      .co-btn-file {
        display: inline-block;
        background: linear-gradient(135deg, #ff5b8a 0%, #f95b8f 100%);
        color: #ffffff;
        font-size: 1.25rem;
        font-weight: 600;
        padding: 8px 22px;
        border-radius: 999px;
        cursor: pointer;
        box-shadow: 0 3px 10px rgba(249, 91, 143, 0.3);
      }

      .co-preview-img {
        max-width: 140px;
        max-height: 140px;
        border-radius: 10px;
        margin-top: 12px;
        border: 2px solid var(--pink);
        display: none;
      }

      .co-security-note {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 1.15rem;
        color: #666666;
      }

      .co-security-note i {
        color: #10b981;
      }

      /* Right Column: Ringkasan Pesanan */
      .co-summary-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
        padding-bottom: 16px;
        border-bottom: 1px solid #f1f1f1;
      }

      .co-summary-title {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 1.7rem;
        font-weight: 700;
        color: #1a1a1a;
      }

      .co-summary-title i {
        color: var(--pink);
      }

      .co-summary-badge {
        background: #fff0f5;
        color: var(--pink);
        font-size: 1.2rem;
        font-weight: 600;
        padding: 2px 12px;
        border-radius: 999px;
        border: 1px solid #ffd6e4;
      }

      .co-order-items {
        display: flex;
        flex-direction: column;
        gap: 14px;
        margin-bottom: 20px;
        max-height: 320px;
        overflow-y: auto;
      }

      .co-order-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding-bottom: 12px;
        border-bottom: 1px dashed #f0f0f4;
      }

      .co-item-img {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: #fff5f8;
        border: 1px solid #fce4ec;
        object-fit: contain;
        padding: 3px;
        flex-shrink: 0;
      }

      .co-item-detail {
        flex: 1;
        min-width: 0;
      }

      .co-item-name {
        font-size: 1.35rem;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 2px;
      }

      .co-item-sub {
        font-size: 1.1rem;
        color: #888888;
      }

      .co-item-price {
        font-size: 1.35rem;
        font-weight: 700;
        color: #e03268;
        white-space: nowrap;
      }

      /* Price Breakdown */
      .co-price-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 10px;
        font-size: 1.35rem;
        color: #555555;
      }

      .co-price-row.total-row {
        margin-top: 14px;
        padding-top: 14px;
        border-top: 1px solid #eeeeee;
        align-items: baseline;
      }

      .co-price-row.total-row .label {
        font-size: 1.6rem;
        font-weight: 700;
        color: #111111;
      }

      .co-price-row.total-row .val {
        font-size: 2.2rem;
        font-weight: 800;
        color: #e03268;
      }

      .co-trust-badges {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #fffbfd;
        border: 1px solid #ffe8f0;
        border-radius: 12px;
        padding: 10px 14px;
        margin: 18px 0;
        font-size: 1.15rem;
        color: #444444;
      }

      .co-trust-badge {
        display: flex;
        align-items: center;
        gap: 6px;
      }

      .co-trust-badge i {
        color: #10b981;
      }

      .btn-submit-order {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        background: linear-gradient(135deg, #ff5b8a 0%, #f95b8f 100%);
        color: #ffffff;
        font-size: 1.55rem;
        font-weight: 700;
        padding: 15px 24px;
        border-radius: 999px;
        border: none;
        cursor: pointer;
        box-shadow: 0 6px 20px rgba(249, 91, 143, 0.4);
        transition: transform 0.2s, box-shadow 0.2s;
        font-family: 'Poppins', sans-serif;
      }

      .btn-submit-order:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(249, 91, 143, 0.5);
      }

      .btn-submit-order:active {
        transform: scale(0.98);
      }

      .co-admin-help {
        text-align: center;
        margin-top: 14px;
        font-size: 1.2rem;
        color: #777777;
      }

      .co-admin-help a {
        color: #0f763e;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        margin-top: 4px;
      }

      .co-admin-help a:hover {
        text-decoration: underline;
      }

      .co-guarantee-card {
        background: #ffffff;
        border-radius: 20px;
        padding: 20px 24px;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.03);
      }

      .co-guarantee-card h4 {
        font-size: 1.35rem;
        font-weight: 700;
        color: #e03268;
        margin-bottom: 4px;
      }

      .co-guarantee-card p {
        font-size: 1.2rem;
        color: #666666;
        line-height: 1.5;
      }

      /* SUCCESS STATUS CONTAINER - Matches status pesanan CO.png */
      .status-success-view {
        display: none;
      }

      .status-banner {
        text-align: center;
        margin-bottom: 30px;
      }

      .status-badge-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: #f95b8f;
        color: #ffffff;
        font-size: 3.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 16px;
        box-shadow: 0 8px 24px rgba(249, 91, 143, 0.35);
      }

      .status-banner h1 {
        font-size: 2.8rem;
        font-weight: 700;
        color: #111111;
        margin-bottom: 8px;
      }

      .status-banner p {
        font-size: 1.4rem;
        color: #666666;
        max-width: 640px;
        margin: 0 auto;
        line-height: 1.6;
      }

      .status-stepper {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 28px 0;
        position: relative;
      }

      .status-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        flex: 1;
        position: relative;
        z-index: 2;
      }

      .status-step-icon {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: #f0f0f4;
        color: #888888;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin-bottom: 8px;
        transition: all 0.3s;
      }

      .status-step.active .status-step-icon {
        background: #f95b8f;
        color: #ffffff;
        box-shadow: 0 4px 14px rgba(249, 91, 143, 0.4);
      }

      .status-step-label {
        font-size: 1.25rem;
        font-weight: 700;
        color: #444444;
      }

      .status-step.active .status-step-label {
        color: #e03268;
      }

      .status-step-time {
        font-size: 1.1rem;
        color: #888888;
        margin-top: 2px;
      }

      .status-progress-bar {
        position: absolute;
        top: 22px;
        left: 15%;
        right: 15%;
        height: 4px;
        background: #eeeeee;
        z-index: 1;
      }

      .status-progress-fill {
        height: 100%;
        width: 35%;
        background: #f95b8f;
        border-radius: 999px;
      }

      .status-meta-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
        background: #fdf6f8;
        border-radius: 16px;
        padding: 16px 20px;
        margin-top: 20px;
      }

      .status-meta-item .meta-label {
        font-size: 1.15rem;
        color: #888888;
        margin-bottom: 2px;
      }

      .status-meta-item .meta-val {
        font-size: 1.35rem;
        font-weight: 700;
        color: #111111;
      }

      @media (max-width: 860px) {
        .co-grid {
          grid-template-columns: 1fr;
        }

        .status-meta-grid {
          grid-template-columns: 1fr;
          gap: 10px;
        }

        .co-payment-methods {
          grid-template-columns: 1fr;
        }

        .form-row {
          grid-template-columns: 1fr;
        }
      }
    </style>
  </head>
  <body class="checkout-body">
    <!-- =========================
       NAVBAR
    ========================= -->
    <header class="navbar">
      <div class="nav-left">
        <a href="{{ url('/acicu') }}" style="display:flex; align-items:center; gap:20px; text-decoration:none;">
          <img src="{{ asset('src-acicu/logo.jpg') }}" alt="Logo" class="logo" />
          <div class="logo-text">
            <h1>ACICU</h1>
            <p>Aneka Aci Bungcu</p>
          </div>
        </a>
      </div>

      <div class="nav-actions">
        <nav class="nav-menu" id="navMenu">
          <a href="{{ url('/acicu#home') }}" class="nav-link">Home</a>
          <a href="{{ url('/acicu#menu') }}" class="nav-link">Menu</a>
          <div class="separator"></div>
          <a href="{{ url('/acicu#about') }}" class="nav-link">About Us</a>
          <a href="{{ url('/acicu#contact') }}" class="nav-link">Contact</a>
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

    <main class="checkout-container">
      <!-- BREADCRUMB -->
      <nav class="co-breadcrumb">
        <a href="{{ url('/acicu') }}"><i class="fa-solid fa-house"></i> Home</a>
        <span>&gt;</span>
        <a href="javascript:void(0)" onclick="openCart()">Keranjang</a>
        <span>&gt;</span>
        <span class="active">Formulir Checkout PO</span>
      </nav>

      <!-- CHECKOUT FORM VIEW -->
      <div id="checkoutFormSection">
        <!-- HERO BANNER -->
        <div class="co-hero-card">
          <h1>Formulir Pre-Order ACICU</h1>
          <p>
            Lengkapi data diri dan jadwal pengiriman Anda. Cemilan aci kenyal gurih dibuat fresh
            sesaat sebelum jadwal pengantaran.
          </p>
        </div>

        <form id="preOrderForm" onsubmit="handlePreOrderSubmit(event)">
          <div class="co-grid">
            <!-- LEFT COLUMN -->
            <div class="co-col-left">
              <!-- CARD 1: DATA PENERIMA -->
              <div class="co-card">
                <div class="co-card-header">
                  <div class="co-icon-bubble">
                    <i class="fa-regular fa-user"></i>
                  </div>
                  <div class="co-card-title">
                    <h2>Data Penerima &amp; Kontak</h2>
                    <p>Pastikan kontak dapat dihubungi untuk konfirmasi drop pesanan.</p>
                  </div>
                </div>

                <div class="form-group">
                  <label for="customerName">Nama Lengkap <span class="req">*</span></label>
                  <div class="input-wrapper">
                    <i class="fa-regular fa-id-badge"></i>
                    <input
                      type="text"
                      id="customerName"
                      class="co-input"
                      placeholder="Contoh: Siti Rahma"
                      required
                    />
                  </div>
                </div>

                <div class="form-group">
                  <label for="customerPhone">Nomor WhatsApp Aktif <span class="req">*</span></label>
                  <div class="input-wrapper">
                    <i class="fa-brands fa-whatsapp"></i>
                    <input
                      type="tel"
                      id="customerPhone"
                      class="co-input"
                      placeholder="Contoh: 0812-3456-7890"
                      required
                    />
                  </div>
                  <p class="form-subnote">Notifikasi update proses goreng &amp; resi kurir akan dikirim via WA.</p>
                </div>

                <div class="form-group">
                  <label for="customerAddress">Alamat Lengkap Pengiriman <span class="req">*</span></label>
                  <textarea
                    id="customerAddress"
                    class="co-input-simple"
                    rows="3"
                    placeholder="Nama jalan, nomor rumah, RT/RW, kelurahan, dan patokan (misal: Rumah pagar hitam samping Indomaret)"
                    required
                  ></textarea>
                </div>

                <div class="form-row">
                  <div class="form-group">
                    <label for="orderDate">Tanggal Pre-Order <span class="req">*</span></label>
                    <input
                      type="date"
                      id="orderDate"
                      class="co-input-simple"
                      required
                    />
                  </div>

                  <div class="form-group">
                    <label for="orderTime">Jam Pengiriman <span class="req">*</span></label>
                    <select id="orderTime" class="co-input-simple" required>
                      <option value="">Pilih Jam Kirim</option>
                      <option value="Hari ini, 11:00 WIB">Batch Siang (11:00 WIB)</option>
                      <option value="Hari ini, 14:00 WIB">Batch Sore 1 (14:00 WIB)</option>
                      <option value="Hari ini, 15:30 WIB" selected>Batch Sore 2 (15:30 WIB)</option>
                      <option value="Hari ini, 17:30 WIB">Batch Petang (17:30 WIB)</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="orderNotes">Catatan Khusus (Opsional)</label>
                  <input
                    type="text"
                    id="orderNotes"
                    class="co-input-simple"
                    placeholder="Contoh: Sambal dipisah, extra pedas gurih jeruk"
                  />
                </div>
              </div>

              <!-- CARD 2: BUKTI PEMBAYARAN -->
              <div class="co-card">
                <div class="co-card-header">
                  <div class="co-icon-bubble">
                    <i class="fa-solid fa-wallet"></i>
                  </div>
                  <div class="co-card-title">
                    <h2>Bukti Pembayaran Pre-Order</h2>
                    <p>Transfer sesuai nominal akhir sebelum pesanan diproses.</p>
                  </div>
                </div>

                <div class="co-payment-head">
                  <span style="font-size:1.35rem; font-weight:700; color:#1a1a1a;">
                    <i class="fa-solid fa-qrcode" style="color:var(--pink);"></i> Metode Pembayaran Resmi
                  </span>
                  <span class="co-badge-instant">Verifikasi Instan</span>
                </div>

                <div class="co-payment-methods">
                  <!-- QRIS -->
                  <div class="co-pay-box">
                    <h4>QRIS</h4>
                    <svg class="co-qris-code" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect width="100" height="100" fill="white"/>
                      <rect x="10" y="10" width="30" height="30" stroke="#111" stroke-width="6" fill="white"/>
                      <rect x="20" y="20" width="10" height="10" fill="#111"/>
                      <rect x="60" y="10" width="30" height="30" stroke="#111" stroke-width="6" fill="white"/>
                      <rect x="70" y="20" width="10" height="10" fill="#111"/>
                      <rect x="10" y="60" width="30" height="30" stroke="#111" stroke-width="6" fill="white"/>
                      <rect x="20" y="70" width="10" height="10" fill="#111"/>
                      <rect x="50" y="50" width="10" height="10" fill="#111"/>
                      <rect x="65" y="65" width="20" height="8" fill="#111"/>
                      <rect x="75" y="75" width="15" height="15" fill="#111"/>
                      <rect x="50" y="20" width="5" height="20" fill="#111"/>
                      <rect x="50" y="70" width="8" height="20" fill="#111"/>
                    </svg>
                    <p class="co-pay-sub">
                      Scan QRIS untuk semua <strong>E-Wallet &amp; Bank</strong><br />
                      (GoPay, OVO, ShopeePay, Dana, BCA, Livin, dll)
                    </p>
                  </div>

                  <!-- TRANSFER BCA -->
                  <div class="co-pay-box">
                    <span class="co-bca-badge">Bank BCA</span>
                    <span style="font-size:1.15rem; color:#666; margin-bottom:4px;">Nomor Rekening BCA:</span>
                    <div class="co-norek-box">
                      <span class="co-norek-num" id="norekBca">827-091-2384</span>
                      <button type="button" class="co-btn-salin" onclick="copyNorek()">
                        <i class="fa-regular fa-copy"></i> Salin
                      </button>
                    </div>
                    <span class="co-an-name">a.n. Aneka Aci Bungcu</span>
                    <p class="co-pay-sub">
                      Mohon simpan bukti transfer / screenshot transaksi sukses lalu unggah di bawah ini.
                    </p>
                  </div>
                </div>

                <!-- DROPZONE -->
                <div class="co-dropzone" onclick="document.getElementById('receiptFileInput').click()">
                  <input
                    type="file"
                    id="receiptFileInput"
                    accept="image/*"
                    style="display:none;"
                    onchange="handleReceiptUpload(event)"
                  />
                  <div class="co-drop-icon">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                  </div>
                  <div class="co-drop-title">Klik atau Tarik Bukti Transfer ke Sini</div>
                  <div class="co-drop-sub">Maksimal ukuran file 2MB (JPG atau PNG)</div>
                  <span class="co-btn-file"><i class="fa-regular fa-image"></i> Pilih File Bukti</span>
                  <div id="receiptName" style="font-size:1.2rem; font-weight:600; color:#0f763e; margin-top:8px;"></div>
                  <img id="receiptPreview" class="co-preview-img" alt="Preview Bukti Transfer" />
                </div>

                <div class="co-security-note">
                  <i class="fa-solid fa-lock"></i>
                  <span>Pembayaran Anda diverifikasi secara otomatis oleh sistem dapur ACICU.</span>
                </div>
              </div>
            </div>

            <!-- RIGHT COLUMN: SUMMARY -->
            <div class="co-col-right">
              <div class="co-card">
                <div class="co-summary-header">
                  <div class="co-summary-title">
                    <i class="fa-solid fa-receipt"></i>
                    <span>Ringkasan Pesanan</span>
                  </div>
                  <span class="co-summary-badge" id="coMenuBadge">0 Menu</span>
                </div>

                <div class="co-order-items" id="coOrderItemsList">
                  <!-- Dynamically rendered from localStorage -->
                </div>

                <div class="co-price-row">
                  <span>Subtotal Pesanan</span>
                  <span id="coSubtotal">Rp 0</span>
                </div>

                <div class="co-price-row">
                  <span>Ongkir Flat Promo PO <i class="fa-regular fa-circle-question" style="color:#aaa;" title="Promo ongkir flat khusus pre-order"></i></span>
                  <span style="color:#0f763e; font-weight:600;">Rp5.000</span>
                </div>

                <div class="co-price-row total-row">
                  <span class="label">Total Pembayaran</span>
                  <span class="val" id="coTotalPayment">Rp 5.000</span>
                </div>

                <div class="co-trust-badges">
                  <span class="co-trust-badge"><i class="fa-solid fa-shield-halved"></i> 100% Halal &amp; Higienis</span>
                  <span class="co-trust-badge"><i class="fa-solid fa-utensils"></i> Freshly Fried Drop</span>
                </div>

                <button type="submit" class="btn-submit-order" id="btnSubmitOrder">
                  <span>Kirim Pre Order Sekarang</span>
                  <i class="fa-solid fa-arrow-right"></i>
                </button>

                <div class="co-admin-help">
                  Ingin konsultasi pesanan partai besar / catering? <br />
                  <a href="https://wa.me/6282286512274" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i> Hubungi Admin Dapur ACICU
                  </a>
                </div>
              </div>

              <!-- JAMINAN DAPUR BUNGCU CARD -->
              <div class="co-guarantee-card">
                <h4>Jaminan Dapur Bungcu</h4>
                <p>Bahan tapioka murni tanpa pengawet sintetik. Digoreng dengan minyak berkualitas prima!</p>
              </div>
            </div>
          </div>
        </form>
      </div>

      <!-- SUCCESS ORDER STATUS VIEW (Matches references/status pesanan CO.png) -->
      <div id="statusSuccessSection" class="status-success-view">
        <div class="status-banner">
          <div class="status-badge-circle">
            <i class="fa-solid fa-check"></i>
          </div>
          <h1>Yeeay! Pre-Order Kamu Berhasil Dikirim!</h1>
          <p>
            Terima kasih sudah memesan cemilan kenyal gurih ACICU. Dapur kami siap memproses pesananmu dengan bahan segar pilihan!
          </p>
        </div>

        <div class="co-grid">
          <div class="co-col-left">
            <!-- STATUS CARD -->
            <div class="co-card">
              <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:12px;">
                <span style="font-size:1.15rem; color:#888; font-weight:700; text-transform:uppercase;">Nomor Order</span>
              </div>
              <div style="display:inline-block; background:#ff4081; color:#fff; font-size:1.6rem; font-weight:700; padding:6px 20px; border-radius:999px; margin-bottom:20px;">
                PO-0824
              </div>

              <!-- STEPPER -->
              <div class="status-stepper">
                <div class="status-progress-bar">
                  <div class="status-progress-fill"></div>
                </div>

                <div class="status-step active">
                  <div class="status-step-icon">
                    <i class="fa-solid fa-check"></i>
                  </div>
                  <div class="status-step-label">Menunggu Konfirmasi</div>
                  <div class="status-step-time" id="statusOrderTimeLabel">10:15 WIB</div>
                </div>

                <div class="status-step">
                  <div class="status-step-icon">
                    <i class="fa-solid fa-fire-burner"></i>
                  </div>
                  <div class="status-step-label">Sedang Diproses Dapur</div>
                  <div class="status-step-time">Estimasi 14:00</div>
                </div>

                <div class="status-step">
                  <div class="status-step-icon">
                    <i class="fa-solid fa-motorcycle"></i>
                  </div>
                  <div class="status-step-label">Selesai / Dikirim</div>
                  <div class="status-step-time">Tiba ~15:30</div>
                </div>
              </div>

              <!-- META GRID -->
              <div class="status-meta-grid">
                <div class="status-meta-item">
                  <div class="meta-label"><i class="fa-regular fa-calendar"></i> Waktu Pesan</div>
                  <div class="meta-val" id="statusWaktuPesan">24 Okt 2026, 10:15 WIB</div>
                </div>
                <div class="status-meta-item">
                  <div class="meta-label"><i class="fa-regular fa-user"></i> Penerima</div>
                  <div class="meta-val" id="statusNamaPenerima">Siti Rahma</div>
                </div>
                <div class="status-meta-item">
                  <div class="meta-label"><i class="fa-solid fa-truck-fast"></i> Slot Pengantaran</div>
                  <div class="meta-val" id="statusSlotKirim" style="color:#0f763e;">Hari ini, 15:30 WIB</div>
                </div>
              </div>
            </div>

            <!-- DETAIL ITEMS -->
            <div class="co-card">
              <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:18px;">
                <h3 style="font-size:1.6rem; font-weight:700;"><i class="fa-solid fa-utensils" style="color:var(--pink);"></i> Rincian Cemilan Pesanan</h3>
                <span class="co-summary-badge" id="statusPorsiBadge">3 Porsi Total</span>
              </div>

              <div id="statusItemsList" class="co-order-items">
                <!-- Items list -->
              </div>

              <div style="background:#f4f9f5; border:1px solid #d4edd9; border-radius:14px; padding:14px 18px; display:flex; align-items:center; justify-content:space-between; margin-top:16px;">
                <div style="display:flex; align-items:center; gap:12px;">
                  <i class="fa-solid fa-receipt" style="color:#10b981; font-size:2rem;"></i>
                  <div>
                    <div style="font-size:1.3rem; font-weight:700; color:#111;">Bukti Pembayaran QRIS / Transfer</div>
                    <div style="font-size:1.15rem; color:#666;" id="statusFileName">transfer_acicu_sukses.jpg</div>
                  </div>
                </div>
                <span style="background:#d1fae5; color:#065f46; font-size:1.15rem; font-weight:700; padding:4px 12px; border-radius:999px;">
                  • Telah Diunggah
                </span>
              </div>
            </div>
          </div>

          <!-- RIGHT SUMMARY -->
          <div class="co-col-right">
            <div class="co-card">
              <h3 style="font-size:1.7rem; font-weight:700; margin-bottom:18px;">Ringkasan Biaya</h3>

              <div class="co-price-row">
                <span id="statusSubtotalLabel">Subtotal Cemilan</span>
                <span id="statusSubtotalVal">Rp 30.000</span>
              </div>

              <div class="co-price-row">
                <span>Ongkir Slot Drop</span>
                <span>Rp5.000</span>
              </div>

              <div class="co-price-row">
                <span style="color:#0f763e;"><i class="fa-solid fa-tag"></i> Diskon Pre-Order</span>
                <span style="color:#0f763e;">-Rp0</span>
              </div>

              <div class="co-price-row total-row">
                <span class="label">Total Bayar</span>
                <span class="val" id="statusTotalBayar">Rp35.000</span>
              </div>

              <div style="display:flex; flex-direction:column; gap:10px; margin-top:24px;">
                <a href="https://wa.me/6282286512274" id="btnStatusWaAdmin" target="_blank" class="btn-cart-whatsapp" style="margin-top:0;">
                  <i class="fa-brands fa-whatsapp"></i>
                  <span>Hubungi Admin via WhatsApp</span>
                </a>

                <a href="{{ url('/acicu') }}" class="btn-browse-menu" style="text-align:center; background:#f4f4f6; color:#333; box-shadow:none;">
                  <i class="fa-solid fa-arrow-left"></i> Kembali ke Menu Utama
                </a>
              </div>

              <p style="font-size:1.15rem; color:#888; text-align:center; margin-top:16px;">
                Admin ACICU siap merespon pertanyaan pesananmu setiap hari pukul 08:00 - 19:00 WIB.
              </p>
            </div>

            <div class="co-guarantee-card" style="display:flex; align-items:center; gap:16px;">
              <div class="co-icon-bubble" style="background:#fee2e2; color:#e03268;">
                <i class="fa-solid fa-circle-check"></i>
              </div>
              <div>
                <h4>Higienis &amp; Selalu Fresh</h4>
                <p>Aci digoreng mendadak sebelum diantar kurir agar tetap renyah di luar dan kenyal di dalam!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

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
        <!-- Rendered dynamically -->
      </div>

      <div class="cart-footer" id="cartFooter">
        <div class="cart-subtotal-row">
          <span class="cart-subtotal-label">Subtotal Pesanan:</span>
          <span class="cart-subtotal-amount" id="cartSubtotalAmount">Rp 0</span>
        </div>
        <p class="cart-fresh-note">
          *Pengiriman fresh drop dijadwalkan sesuai kuota batch pre-order hari ini.
        </p>

        <a href="{{ url('/checkout') }}" class="btn-cart-checkout" id="btnCartCheckout" onclick="closeCart()">
          <span>Lanjut Checkout</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>

        <a href="#" target="_blank" class="btn-cart-whatsapp" id="btnCartWhatsApp">
          <i class="fa-brands fa-whatsapp"></i>
          <span>Kirim Format Order ke WhatsApp</span>
        </a>
      </div>
    </aside>

    <!-- FOOTER -->
    <footer class="footer">
      <div class="footer-wave"></div>
      <div class="footer-content">
        <div class="footer-left">
          <h1>ACICU</h1>
          <p>Aci enak &amp; Halal.<br />Berkomitmen menyajikan<br />cita rasa lezat</p>
        </div>
        <div class="footer-center">
          <a href="{{ url('/acicu#home') }}">Home</a>
          <a href="{{ url('/acicu#menu') }}">Menu</a>
          <a href="{{ url('/acicu#about') }}">About Us</a>
          <a href="{{ url('/acicu#contact') }}">Contact</a>
        </div>
        <div class="footer-divider"></div>
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

    <!-- JS -->
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
      function copyNorek() {
        const text = document.getElementById('norekBca').textContent.replace(/-/g, '');
        navigator.clipboard.writeText(text).then(() => {
          showToast('Nomor rekening BCA berhasil disalin!');
        });
      }

      function handleReceiptUpload(e) {
        const file = e.target.files[0];
        if (!file) return;
        const nameEl = document.getElementById('receiptName');
        const preview = document.getElementById('receiptPreview');
        if (nameEl) nameEl.textContent = `✓ ${file.name}`;
        if (preview) {
          const reader = new FileReader();
          reader.onload = function(evt) {
            preview.src = evt.target.result;
            preview.style.display = 'inline-block';
          };
          reader.readAsDataURL(file);
        }
      }

      function renderCheckoutSummary() {
        const cart = getCart();
        const itemsList = document.getElementById('coOrderItemsList');
        const subtotalEl = document.getElementById('coSubtotal');
        const totalEl = document.getElementById('coTotalPayment');
        const badgeEl = document.getElementById('coMenuBadge');

        const totalQty = cart.reduce((sum, item) => sum + item.qty, 0);
        const subtotal = cart.reduce((sum, item) => sum + item.price * item.qty, 0);
        const shipping = 5000;
        const grandTotal = subtotal > 0 ? subtotal + shipping : 0;

        if (badgeEl) badgeEl.textContent = `${cart.length} Menu`;
        if (subtotalEl) subtotalEl.textContent = formatPrice(subtotal);
        if (totalEl) totalEl.textContent = formatPrice(grandTotal);

        if (itemsList) {
          if (cart.length === 0) {
            itemsList.innerHTML = `
              <div style="text-align:center; padding:20px; color:#888;">
                Keranjang Anda kosong.<br />
                <a href="/acicu#menu" style="color:var(--pink); font-weight:600;">Kembali ke Menu</a>
              </div>
            `;
          } else {
            itemsList.innerHTML = cart.map(item => `
              <div class="co-order-item">
                <img src="${item.image}" alt="${item.name}" class="co-item-img" />
                <div class="co-item-detail">
                  <div class="co-item-name">${item.qty}x ${item.name}</div>
                  <div class="co-item-sub">Tingkat Pedas: Level 3 (Bumbu Gurih Jeruk)</div>
                </div>
                <div class="co-item-price">${formatPrice(item.price * item.qty)}</div>
              </div>
            `).join('');
          }
        }
      }

      function handlePreOrderSubmit(e) {
        e.preventDefault();
        const cart = getCart();
        if (cart.length === 0) {
          alert('Keranjang belanja Anda masih kosong. Silakan pilih menu terlebih dahulu!');
          return;
        }

        const name = document.getElementById('customerName').value;
        const phone = document.getElementById('customerPhone').value;
        const slot = document.getElementById('orderTime').value;
        const fileInput = document.getElementById('receiptFileInput');
        const fileName = fileInput.files[0] ? fileInput.files[0].name : 'BCA_TRF_PO0824_' + name.replace(/\s+/g, '_') + '.jpg';

        const totalQty = cart.reduce((sum, item) => sum + item.qty, 0);
        const subtotal = cart.reduce((sum, item) => sum + item.price * item.qty, 0);
        const grandTotal = subtotal + 5000;

        // Populate Status View
        document.getElementById('statusNamaPenerima').textContent = name;
        document.getElementById('statusSlotKirim').textContent = slot;
        document.getElementById('statusFileName').textContent = fileName;
        document.getElementById('statusPorsiBadge').textContent = `${totalQty} Porsi Total`;
        document.getElementById('statusSubtotalVal').textContent = formatPrice(subtotal);
        document.getElementById('statusTotalBayar').textContent = formatPrice(grandTotal);

        // Date and time
        const now = new Date();
        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
        const dateStr = `${now.getDate()} ${months[now.getMonth()]} ${now.getFullYear()}, ${String(now.getHours()).padStart(2, '0')}:${String(now.getMinutes()).padStart(2, '0')} WIB`;
        document.getElementById('statusWaktuPesan').textContent = dateStr;
        document.getElementById('statusOrderTimeLabel').textContent = `${String(now.getHours()).padStart(2, '0')}:${String(now.getMinutes()).padStart(2, '0')} WIB`;

        // Render Status items
        const statusList = document.getElementById('statusItemsList');
        if (statusList) {
          statusList.innerHTML = cart.map(item => `
            <div class="co-order-item">
              <img src="${item.image}" alt="${item.name}" class="co-item-img" />
              <div class="co-item-detail">
                <div class="co-item-name">${item.qty}x ${item.name}</div>
                <div class="co-item-sub">${formatPrice(item.price)} / porsi</div>
              </div>
              <div class="co-item-price">${formatPrice(item.price * item.qty)}</div>
            </div>
          `).join('');
        }

        // WhatsApp admin button
        const btnWa = document.getElementById('btnStatusWaAdmin');
        if (btnWa) {
          let text = `Halo Admin ACICU, saya sudah mengirim formulir Pre-Order (PO-0824):\n\n`;
          text += `Nama: ${name}\n`;
          text += `Slot Pengantaran: ${slot}\n`;
          text += `Total Bayar: ${formatPrice(grandTotal)}\n\n`;
          text += `Mohon konfirmasi pesanan saya. Terima kasih!`;
          btnWa.href = `https://wa.me/6282286512274?text=${encodeURIComponent(text)}`;
        }

        // Switch to status view
        document.getElementById('checkoutFormSection').style.display = 'none';
        document.getElementById('statusSuccessSection').style.display = 'block';
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }

      // Pre-fill today's date in order date
      document.addEventListener('DOMContentLoaded', () => {
        renderCheckoutSummary();
        const dateInput = document.getElementById('orderDate');
        if (dateInput) {
          const today = new Date().toISOString().split('T')[0];
          dateInput.value = today;
          dateInput.min = today;
        }
      });

      window.addEventListener('acicu-cart-updated', () => {
        renderCheckoutSummary();
      });
    </script>
  </body>
</html>