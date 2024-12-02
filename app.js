const signUpButton = document.getElementById('signUp');
const logInButton = document.getElementById('logIn');
const main = document.getElementById('main');

signUpButton.addEventListener('click', () => {
    main.classList.add("right-panel-active")
});

logInButton.addEventListener('click', () => {
    main.classList.remove("right-panel-active")
});
const hamburger = document.getElementById('hamburger');
const sidebar = document.getElementById('sidebar');

hamburger.addEventListener('click', () => {
    sidebar.classList.toggle('open');
    hamburger.classList.toggle('hidden');
});

sidebar.addEventListener('click', () => {
    sidebar.classList.remove('open');
    hamburger.classList.remove('hidden');
});
function openNav() {
    document.getElementById("terminusSide").style.width = "20vh";
}
function closeNav() {
    document.getElementById("terminusSide").style.width = "0";
}