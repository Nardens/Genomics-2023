const header = document.querySelector("header");

window.addEventListener("scroll",function() {
    
header.classList.toggle("sticky",window.scrollY > 0);
});
let Menu = document.querySelector('#Menu-icon');
let navbar = document.querySelector('.navbar');

Menu.onclick =() => {
    Menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
};

window .onscroll = () => {
    menu .classList.removw ('bx-x');
    navbar.classList.remove('open');
};

sr.reveal('.container,.Home,.about, .Menu, .Contact' ,{delay:200, origin:'bottom'});


