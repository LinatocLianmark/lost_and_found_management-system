function validateForm() {
    let item = document.querySelector("input[name='item_name']").value;
    if (item.length < 3) {
        alert("Item name must be at least 3 characters.");
        return false;
    }
    return true;
}
