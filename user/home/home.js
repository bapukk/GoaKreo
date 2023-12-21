const navbarNav = document.querySelector ('.nav');
document.querySelector('#line-menu').onclick = () => {
    navbarNav.classList.toggle('active');
};
const linemenu = document.querySelector ('#line-menu');
document.addEventListener('click', function(e) {
    if (!linemenu.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
});
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
function closePopup(){
    let popup = document.getElementById('popup' + this.id);
    popup.classList.remove("open-popup");
}
