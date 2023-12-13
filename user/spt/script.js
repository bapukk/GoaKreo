// Toggle Class Active

const navbarNav = document.querySelector(".nav");

// menu on click
document.querySelector("#line-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// outside click

const linemenu = document.querySelector("#line-menu");

document.addEventListener("click", function (e) {
  if (!linemenu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

// Pilih elemen navbar
const navbar = document.querySelector(".header");

// Atur variabel untuk mengingat tinggi navbar
const navbarHeight = navbar.offsetHeight;

// Fungsi untuk menyembunyikan navbar saat di-scroll
function hideNavbarOnScroll() {
  if (window.scrollY > navbarHeight) {
    navbar.classList.add("hidden");
  } else {
    navbar.classList.remove("hidden");
  }
}

// Tambahkan event listener untuk event scroll
window.addEventListener("scroll", hideNavbarOnScroll);
// -----------------------------------------------------

// function BUTTON SCROLL ATAS
function toggleScrollToTopButton() {
  var button = document.getElementById("scroll-to-top");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      button.style.display = "block";
  } else {
      button.style.display = "none";
  }
}

// Fungsi untuk menggulir halaman ke atas
function scrollToTop() {
  // Mendefinisikan langkah-langkah animasi scroll
  var scrollStep = -window.scrollY / (500 / 15);
  var scrollInterval = setInterval(function(){
      if (window.scrollY !== 0) {
          window.scrollBy(0, scrollStep);
      } else {
          clearInterval(scrollInterval);
      }
  }, 15);
}

// Menambahkan event listener untuk memantau scroll dan menampilkan/menyembunyikan tombol
window.onscroll = function() {
  toggleScrollToTopButton();
};