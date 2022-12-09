function increase() {
    let valueElem = document.getElementById("product").getElementsByClassName("quantity")[0].innerHTML;
    let value = parseInt(valueElem);
    document.getElementById("product").getElementsByClassName("quantity")[0].innerHTML = value + 1;
}

function decrease() {
    let valueElem = document.getElementById("product").getElementsByClassName("quantity")[0].innerHTML;
    let value = parseInt(valueElem);
    document.getElementById("product").getElementsByClassName("quantity")[0].innerHTML = value <= 1 ? 1 : value - 1;
}