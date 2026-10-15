/* =========================
FILE: script.js
========================= */

const slider = document.getElementById("slider");
const slides = document.querySelectorAll(".slide");

let current = 0;

function showSlide(index) {
  if (!slides.length) return;

  slides.forEach((slide) => {
    slide.classList.remove("active");
  });

  slides[index].classList.add("active");
}

function nextSlide() {
  if (!slides.length) return;

  current++;

  if (current >= slides.length) {
    current = 0;
  }

  showSlide(current);
}

function prevSlide() {
  if (!slides.length) return;

  current--;

  if (current < 0) {
    current = slides.length - 1;
  }

  showSlide(current);
}

showSlide(current);

/* =========================
MOBILE NAV
========================= */

const hamburger = document.getElementById("hamburger");
const navMenu = document.getElementById("navMenu");
const navLinks = Array.from(document.querySelectorAll(".nav-link"));

const navItems = navLinks
  .map((link) => {
    const target = link.getAttribute("data-target") || link.getAttribute("href")?.slice(1) || "";
    const section = target ? document.getElementById(target) : null;
    return section ? { link, section, target } : null;
  })
  .filter(Boolean);

function setActiveLink(activeId) {
  navLinks.forEach((link) => {
    const target = link.getAttribute("data-target") || link.getAttribute("href")?.slice(1) || "";
    link.classList.toggle("active", target === activeId);
  });
}

function scrollToSection(targetId) {
  const section = document.getElementById(targetId);
  if (!section) return;

  section.scrollIntoView({
    behavior: "smooth",
    block: "start",
  });

  setActiveLink(targetId);
}

function updateActiveLinkFromScroll() {
  if (!navItems.length) return;

  const viewportCenter = window.innerHeight / 2;
  let activeId = navItems[0].target;

  for (const { target, section } of navItems) {
    const rect = section.getBoundingClientRect();

    if (rect.top <= viewportCenter && rect.bottom >= viewportCenter) {
      activeId = target;
      break;
    }

    if (rect.top <= viewportCenter) {
      activeId = target;
    }
  }

  setActiveLink(activeId);
}

if (hamburger && navMenu) {
  hamburger.addEventListener("click", () => {
    navMenu.classList.toggle("active");
  });
}

navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    const target = link.getAttribute("data-target") || link.getAttribute("href")?.slice(1) || "";
    if (!target) return;

    if (navMenu) {
      navMenu.classList.remove("active");
    }

    scrollToSection(target);
  });
});

if (navItems.length) {
  window.addEventListener("scroll", updateActiveLinkFromScroll, { passive: true });
  window.addEventListener("resize", updateActiveLinkFromScroll);
  updateActiveLinkFromScroll();
}

/* =========================
SWIPE SLIDER MOBILE
========================= */

if (slider) {
  let startX = 0;
  let endX = 0;

  slider.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
  });

  slider.addEventListener("touchend", (e) => {
    endX = e.changedTouches[0].clientX;

    if (startX - endX > 50) {
      nextSlide();
    }

    if (endX - startX > 50) {
      prevSlide();
    }
  });
}

/* =========================
   SHOPPING CART LOGIC
========================= */

const CART_STORAGE_KEY = "acicu_cart";
const DEFAULT_CART = [
  { id: "cilukba", name: "Cilukba", price: 10000, qty: 2, image: "/src-acicu/cilukba.PNG" },
  { id: "molachee", name: "Molachee", price: 10000, qty: 1, image: "/src-acicu/molachee.PNG" }
];

const PRODUCTS = {
  ciweng: {
    id: "ciweng",
    name: "Ciweng",
    price: 10000,
    image: "/src-acicu/ciweng.PNG"
  },
  molachee: {
    id: "molachee",
    name: "Molachee",
    price: 10000,
    image: "/src-acicu/molachee.PNG"
  },
  cilukba: {
    id: "cilukba",
    name: "Cilukba",
    price: 10000,
    image: "/src-acicu/cilukba.PNG"
  }
};

const SLIDE_PRODUCTS = ["ciweng", "molachee", "cilukba"];

function getCart() {
  const stored = localStorage.getItem(CART_STORAGE_KEY);
  if (!stored) {
    localStorage.setItem(CART_STORAGE_KEY, JSON.stringify(DEFAULT_CART));
    return [...DEFAULT_CART];
  }
  try {
    const parsed = JSON.parse(stored);
    return Array.isArray(parsed) ? parsed : [...DEFAULT_CART];
  } catch (e) {
    return [...DEFAULT_CART];
  }
}

function saveCart(cart) {
  localStorage.setItem(CART_STORAGE_KEY, JSON.stringify(cart));
  renderCart();
  window.dispatchEvent(new CustomEvent("acicu-cart-updated", { detail: cart }));
}

function openCart() {
  const drawer = document.getElementById("cartDrawer");
  const overlay = document.getElementById("cartOverlay");
  if (drawer && overlay) {
    drawer.classList.add("open");
    overlay.classList.add("open");
    document.body.style.overflow = "hidden";
  }
}

function closeCart() {
  const drawer = document.getElementById("cartDrawer");
  const overlay = document.getElementById("cartOverlay");
  if (drawer && overlay) {
    drawer.classList.remove("open");
    overlay.classList.remove("open");
    document.body.style.overflow = "";
  }
}

function toggleCart() {
  const drawer = document.getElementById("cartDrawer");
  if (drawer && drawer.classList.contains("open")) {
    closeCart();
  } else {
    openCart();
  }
}

function animateBadge() {
  const badge = document.getElementById("cartBadge");
  if (!badge) return;
  badge.classList.add("bump");
  setTimeout(() => badge.classList.remove("bump"), 300);
}

function showToast(message) {
  const toast = document.getElementById("cartToast");
  const text = document.getElementById("cartToastText");
  if (!toast) return;
  if (text) text.textContent = message;
  toast.classList.add("show");
  setTimeout(() => {
    toast.classList.remove("show");
  }, 2200);
}

function addToCart(productId, qty = 1) {
  const product = PRODUCTS[productId];
  if (!product) return;

  const cart = getCart();
  const existing = cart.find((item) => item.id === productId);

  if (existing) {
    existing.qty += qty;
  } else {
    cart.push({
      id: product.id,
      name: product.name,
      price: product.price,
      qty: qty,
      image: product.image
    });
  }

  saveCart(cart);
  showToast(`${product.name} berhasil ditambahkan ke keranjang!`);
  animateBadge();
  openCart();
}

function updateCartQty(productId, delta) {
  let cart = getCart();
  const item = cart.find((i) => i.id === productId);
  if (!item) return;

  item.qty += delta;
  if (item.qty <= 0) {
    cart = cart.filter((i) => i.id !== productId);
  }

  saveCart(cart);
  animateBadge();
}

function removeCartItem(productId) {
  const card = document.querySelector(`.cart-item-card[data-id="${productId}"]`);
  if (card) {
    card.style.opacity = "0";
    card.style.transform = "translateX(20px)";
    setTimeout(() => {
      const cart = getCart().filter((i) => i.id !== productId);
      saveCart(cart);
      animateBadge();
    }, 200);
  } else {
    const cart = getCart().filter((i) => i.id !== productId);
    saveCart(cart);
    animateBadge();
  }
}

function addActiveMenuToCart() {
  const activeProductKey = SLIDE_PRODUCTS[current] || "ciweng";
  addToCart(activeProductKey);
}

function formatPrice(num) {
  return "Rp " + Number(num).toLocaleString("id-ID");
}

function renderCart() {
  const cart = getCart();
  const totalQty = cart.reduce((sum, item) => sum + item.qty, 0);
  const subtotal = cart.reduce((sum, item) => sum + item.price * item.qty, 0);

  // Navbar badge
  const badge = document.getElementById("cartBadge");
  if (badge) {
    badge.textContent = totalQty;
    badge.style.display = totalQty > 0 ? "flex" : "none";
  }

  // Count pill in header
  const countPill = document.getElementById("cartCountPill");
  if (countPill) {
    countPill.textContent = `${totalQty} item`;
  }

  // Subtotal in footer
  const subtotalEl = document.getElementById("cartSubtotalAmount");
  if (subtotalEl) {
    subtotalEl.textContent = formatPrice(subtotal);
  }

  // Items list
  const listEl = document.getElementById("cartItemsList");
  const footerEl = document.getElementById("cartFooter");

  if (listEl) {
    if (cart.length === 0) {
      listEl.innerHTML = `
        <div class="cart-empty-state">
          <div class="cart-empty-icon">
            <i class="fa-solid fa-basket-shopping"></i>
          </div>
          <h3>Keranjang Masih Kosong</h3>
          <p>Yuk pilih aneka cemilan aci favoritmu sekarang!</p>
          <button type="button" class="btn-browse-menu" onclick="closeCart(); scrollToSection('menu');">Lihat Menu</button>
        </div>
      `;
      if (footerEl) {
        footerEl.style.opacity = "0.6";
        footerEl.style.pointerEvents = "none";
      }
    } else {
      if (footerEl) {
        footerEl.style.opacity = "1";
        footerEl.style.pointerEvents = "auto";
      }

      listEl.innerHTML = cart
        .map(
          (item) => `
        <div class="cart-item-card" data-id="${item.id}">
          <img src="${item.image}" alt="${item.name}" class="cart-item-img" />
          <div class="cart-item-info">
            <h4 class="cart-item-name">${item.name}</h4>
            <p class="cart-item-unit">${formatPrice(item.price)} / porsi</p>
            <p class="cart-item-total">${formatPrice(item.price * item.qty)}</p>
          </div>
          <div class="cart-item-actions">
            <button class="cart-item-delete" onclick="removeCartItem('${item.id}')" aria-label="Hapus ${item.name}" type="button">
              <i class="fa-solid fa-trash-can"></i>
            </button>
            <div class="cart-qty-control">
              <button class="qty-btn minus" onclick="updateCartQty('${item.id}', -1)" aria-label="Kurangi kuantitas" type="button">-</button>
              <span class="qty-number">${item.qty}</span>
              <button class="qty-btn plus" onclick="updateCartQty('${item.id}', 1)" aria-label="Tambah kuantitas" type="button">+</button>
            </div>
          </div>
        </div>
      `
        )
        .join("");
    }
  }

  // WhatsApp order link
  const waBtn = document.getElementById("btnCartWhatsApp");
  if (waBtn) {
    if (cart.length === 0) {
      waBtn.href =
        "https://wa.me/6282286512274?text=" +
        encodeURIComponent("Halo Admin ACICU, saya ingin bertanya tentang pemesanan pre-order.");
    } else {
      let waText = "Halo Admin ACICU, saya ingin order:\n\n";
      cart.forEach((item) => {
        waText += `• ${item.name} (${item.qty} porsi) - ${formatPrice(item.price * item.qty)}\n`;
      });
      waText += `\nSubtotal: ${formatPrice(subtotal)}\n`;
      waText += "*Pengiriman fresh drop dijadwalkan sesuai kuota batch pre-order hari ini.*\n\n";
      waText += "Mohon diproses, terima kasih!";
      waBtn.href =
        "https://wa.me/6282286512274?text=" + encodeURIComponent(waText);
    }
  }
}

// Global functions for inline HTML handlers
window.addToCart = addToCart;
window.updateCartQty = updateCartQty;
window.removeCartItem = removeCartItem;
window.addActiveMenuToCart = addActiveMenuToCart;
window.openCart = openCart;
window.closeCart = closeCart;
window.toggleCart = toggleCart;

// Event Listeners for Cart
const cartToggleBtn = document.getElementById("cartToggleBtn");
if (cartToggleBtn) {
  cartToggleBtn.addEventListener("click", toggleCart);
}

const cartCloseBtn = document.getElementById("cartCloseBtn");
if (cartCloseBtn) {
  cartCloseBtn.addEventListener("click", closeCart);
}

const cartOverlay = document.getElementById("cartOverlay");
if (cartOverlay) {
  cartOverlay.addEventListener("click", closeCart);
}

// Close cart on Escape key
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    closeCart();
  }
});

// Initialize Cart on Load
document.addEventListener("DOMContentLoaded", () => {
  renderCart();
});

// Also render immediately in case DOM is already loaded
renderCart();