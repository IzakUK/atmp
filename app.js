const signUpButton = document.getElementById('signUp');
const logInButton = document.getElementById('logIn');
const main = document.getElementById('main');

signUpButton.addEventListener('click', () => {
    main.classList.add("right-panel-active")
});

logInButton.addEventListener('click', () => {
    main.classList.remove("right-panel-active")
});


/* js code for swiper class */

var swiper = new Swiper(".image-slider", {
    loop: true,
    grabCursor:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  