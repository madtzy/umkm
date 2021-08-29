// navbar scroll
const nav = document.getElementById('nav');

window.addEventListener('scroll', function () {
    scrollposition = window.scrollY;

    if (scrollposition >= 305) {
        nav.classList.add('nav-abu')
    } else if (scrollposition <= 305) {
        nav.classList.remove('nav-abu')
    }
})