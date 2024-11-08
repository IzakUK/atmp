const signUpButton = document.getElementById('signUp');
const logInButton = document.getElementById('logIn');
const main = document.getElementById('main');

signUpButton.addEventListener('click', () => {
    main.classList.add("right-panel-active")
});

logInButton.addEventListener('click', () => {
    main.classList.remove("right-panel-active")
});