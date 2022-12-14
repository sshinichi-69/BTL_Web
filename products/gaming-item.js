function increase() {
    let valueElem = document.getElementById("product").getElementsByClassName("quantity")[0].value;
    let value = parseInt(valueElem);
    document.getElementById("product").getElementsByClassName("quantity")[0].value = value + 1;
}

function decrease() {
    let valueElem = document.getElementById("product").getElementsByClassName("quantity")[0].value;
    let value = parseInt(valueElem);
    document.getElementById("product").getElementsByClassName("quantity")[0].value = value <= 1 ? 1 : value - 1;
}

function changeItemImage(idx, imgList) {
    document.getElementById('product').getElementsByClassName('image')[0].getElementsByClassName('main')[0].getElementsByTagName('img')[0].src = imgList[idx];
}