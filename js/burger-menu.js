const burger = document.querySelector('.burger-menu__strip');
const menu = document.querySelector('.burger-menu__header');

burger.addEventListener('click', function() {
    burger.classList.toggle('active');
    menu.classList.toggle('active');
    document.querySelector('.content-products').classList.toggle('lock')
})
