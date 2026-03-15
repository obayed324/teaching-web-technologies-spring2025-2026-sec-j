const unitPrice = 200;

const quantityInput = document.getElementById("quantity");
const totalPriceDisplay = document.getElementById("totalPrice");

quantityInput.addEventListener("input", function () {

    let quantity = parseInt(quantityInput.value);

    
    if (quantity < 0 || isNaN(quantity)) {
        quantity = 0;
        quantityInput.value = 0;
    }

    const total = unitPrice * quantity;

    totalPriceDisplay.textContent = total;

    
    if (total > 1000) {
        alert("Congratulations! You are eligible for a gift coupon!");
    }

});