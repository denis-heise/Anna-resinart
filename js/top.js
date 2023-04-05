const buttonTop = document.querySelector('.button-top');

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    buttonTop.style.display = "block";
  } else {
    buttonTop.style.display = "none";
  }
}

buttonTop.addEventListener('click', () => {
  document.body.scrollTo({ top: 0, behavior: 'smooth' });
  document.documentElement.scrollTo({ top: 0, behavior: 'smooth' }); 
});

