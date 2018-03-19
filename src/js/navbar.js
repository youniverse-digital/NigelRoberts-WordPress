let menuActive = false;

function init() {
    const toggle = document.querySelector('.mobile-nav-toggle');
    const doc = document.querySelector('html');

    toggle.addEventListener('click', function () {
        if (menuActive == false) {
            doc.classList.add('nav-open');
            menuActive = true;
        } else {
            doc.classList.remove('nav-open');
            menuActive = false;
        }
    })
}

export default {
    init: init
}