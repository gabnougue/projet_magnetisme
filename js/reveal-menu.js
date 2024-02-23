const menuHamburger = document.querySelector("#nav-icon");
const navLinks = document.querySelector(".nav-links");
const body = document.querySelector("body");
const header = document.querySelector('header');

updateVariables();

menuHamburger.addEventListener('click',()=> {
    navLinks.classList.toggle('open');
    menuHamburger.classList.toggle('open');
    document.documentElement.style.setProperty('--scrollbar-width', `${getScrollbarWidth()}px`);
    body.classList.toggle('no-scroll');
    header.classList.toggle('no-scroll');
});

let prevScrollPos = window.scrollY;

window.onscroll = function() {
    const currentScrollPos = window.scrollY;

    if (prevScrollPos > currentScrollPos || currentScrollPos < getHeaderHeight()) {
        header.classList.remove('sticky-header');
    } else {
        header.classList.add('sticky-header');
    }

    prevScrollPos = currentScrollPos;
}

window.addEventListener('resize', () => {
    updateVariables();
});

function updateVariables() {
    document.documentElement.style.setProperty('--header-height', `${getHeaderHeight()}px`);
    document.documentElement.style.setProperty('--header-height-negative', `-${getHeaderHeight()}px`);
    document.documentElement.style.setProperty('--main-banner-height', `${getMainBannerHeight()}px`);
}

function getScrollbarWidth() {
    const scrollDiv = document.createElement('div');
    scrollDiv.style.overflow = 'scroll';
    document.body.appendChild(scrollDiv);
    const scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
    document.body.removeChild(scrollDiv);
    return scrollbarWidth;
}

function getHeaderHeight() {
    return document.querySelector('header').offsetHeight;
}

function getMainBannerHeight() {
    return document.querySelector('.main-banner').offsetHeight;
}