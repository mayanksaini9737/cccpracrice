function validateForm() {
    var categoryName = document.getElementById('category_name').value;
    var categoryStatus = document.getElementById('status').value;

    if (categoryName === '' || categoryStatus === '') {
        alert('Please fill in all fields');
        return false;
    }
    return true;
}
