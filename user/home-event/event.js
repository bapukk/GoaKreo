// Toggle Class Active

const navbarNav = document.querySelector ('.nav');

// menu on click
document.querySelector('#line-menu').onclick = () => {
    navbarNav.classList.toggle('active');
};

// outside click

const linemenu = document.querySelector ('#line-menu');

document.addEventListener('click', function(e) {
    if (!linemenu.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
});

// Slides
var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        780: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        }
        
    }
  });

// slides2

//   var swiper = new Swiper(".slide-content", {
//     slidesPerView: 4,
//     centeredSlides: true,
//     spaceBetween: 30,
//     grabCursor: true,
//     loopFillGroupWithBlank: true,
//     pagination: {
//       el: ".swiper-pagination",
//       clickable: true,
//     },
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//       },
//   });