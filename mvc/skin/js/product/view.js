function changeQuantity(value) {
    var quantityInput = document.getElementById('quantity');
    var currentQuantity = parseInt(quantityInput.value);
    var newQuantity = currentQuantity + value;

    if (newQuantity >= 1) {
        quantityInput.value = newQuantity;
    }
}

function addToCart(productId) {
    var quantity = document.getElementById('quantity').value;

    var addToCartLink = 'http://localhost/Practice/mvc/sales/quote/add?product_id=' + productId + '&quantity=' + quantity;
    window.location.href = addToCartLink;
}