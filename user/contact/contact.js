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