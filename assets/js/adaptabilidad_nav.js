let btn__menu = document.querySelector('#btn__menu');
let nav_link = document.querySelector('.nav__link');

btn__menu.addEventListener('click', () => {
	nav_link.classList.toggle('header--active');
});
