function changeQuantity(value) {
    var quantityInput = document.getElementById('quantity');
    var currentQuantity = parseInt(quantityInput.value);
    var newQuantity = currentQuantity + value;

    if (newQuantity >= 1) {
        quantityInput.value = newQuantity;
    }
}
