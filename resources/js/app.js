import './bootstrap';

const hamburger = document.querySelector('#hamburger');

hamburger.addEventListener('click', function(){
    hamburger.classList.toggle('hamburger-active');
});