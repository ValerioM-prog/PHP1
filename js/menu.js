const mainMenu = document.querySelector('.navigation nav');
const closeMenu = document.querySelector('.close-menu');
const openMenu = document.querySelector('.open-menu');

const logMenu = document.querySelector('.user-login');
const closelogMenu = document.querySelector('.close-log-menu');
const openlogMenu = document.querySelector('.user-info');

openMenu.addEventListener('click',show);
closeMenu.addEventListener('click',close);

openlogMenu.addEventListener('click', show_logMenu);
closelogMenu.addEventListener('click', close_logMenu);

function show() {
    mainMenu.style.display = 'grid';
    mainMenu.style.top = '0';
    closeMenu.style.display = 'grid';
}

function close() {
    mainMenu.style.top = '-100%';
    closeMenu.style.display = 'none';
}

function show_logMenu() {
    logMenu.style.display = 'flex';
    logMenu.style.top = '0';
    closelogMenu.style.display = 'grid';
}

function close_logMenu() {
    logMenu.style.top = '-100%';
    closelogMenu.style.display = 'none';
}