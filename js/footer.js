const contactTitle = document.querySelector('.footer-container__contact-title');

contactTitle.addEventListener('click', function (evt) {
    evt.preventDefault();
    const contactText = document.querySelector('.footer-container__contact-text');
    contactText.classList.toggle('show');
    contactTitle.classList.toggle('active');

})


