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

let calScrollValue = () => {
    let scrollProgress = document.getElementById("progress");
    let progressValue = document.getElementById("progress-value");
    let pos = document.documentElement.scrollTop;
    let calcHeight = 
    document.documentElement.scrollHeight - 
    document.documentElement.clientHeight;
    let scrollValue = Math.round((pos * 100) / calcHeight);
    if( pos > 100) {
        scrollProgress.style.display = "grid";
    } else {
        scrollProgress.style.display = "none";
    }
    scrollProgress.addEventListener("click", () => {
        document.documentElement.scrollTop = 0;
    });
    scrollProgress.style.background = `conic-gradient(#5E7C60 ${scrollValue}%, #d7d7d7 ${scrollValue}%`;
};
window.onscroll = calScrollValue;
window.inload = calScrollValue;




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

//open button
let button = document.querySelectorAll('button');

for(let i=0; i < button.length; ++i){
    button[i].addEventListener('click', openPopup);
}

function openPopup(){
    let popup = document.getElementById('popup' + this.id);
    popup.classList.add('open-popup');
}

let ibutton = document.querySelectorAll('input');

for(let i=0; i< ibutton.length; ++i){
    ibutton[i].addEventListener('click', closePopup);
}
// let popup = document.getElementById("popup");

// function openPopup(){
//     popup.classList.add("open-popup");
// }
function closePopup(){
    let popup = document.getElementById('popup' + this.id);
    popup.classList.remove("open-popup");
}
