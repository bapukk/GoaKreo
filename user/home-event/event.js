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

window.onscroll = function() {
    let pos = window.pageYOffset;
    if (pos > 50) {
        document.getElementById('header').style.top = '-63px';
    } else {
        document.getElementById('header').style.top = '0';
    }
}



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

