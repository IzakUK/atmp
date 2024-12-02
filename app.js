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






/*script for shopping cart page */ 

document.querySelectorAll('.quantity-input').forEach(input => {
    input.addEventListener('change', updateTotal);
});

function updateTotal() {
    let totalItems = 0;
    let totalPrice = 0;
    document.querySelectorAll('.cart-item').forEach(item => {
        const price = parseFloat(item.querySelector('.price-value').textContent);
        const quantity = parseInt(item.querySelector('.quantity-input').value);
        const totalItemPrice = price * quantity;
        item.querySelector('.total-price-value').textContent = totalItemPrice.toFixed(2);
        totalItems += quantity;
        totalPrice += totalItemPrice;
    });
    document.getElementById('total-items').textContent = totalItems;
    document.getElementById('total-price').textContent = totalPrice.toFixed(2);
}

function increaseQty() {
    const qtyInput = event.target.previousElementSibling;
    qtyInput.value = parseInt(qtyInput.value) + 1;
    updateTotal();
}

function decreaseQty() {
    const qtyInput = event.target.nextElementSibling;
    if (qtyInput.value > 1) {
        qtyInput.value = parseInt(qtyInput.value) - 1;
        updateTotal();
    }
}

document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function() {
        const cartItem = this.parentElement;
        cartItem.remove();
        updateTotal();
    });
});
