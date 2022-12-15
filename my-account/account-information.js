function switchButton (event) {
    let children = event.target.parentElement.children;
    for (let child of children) {
        child.classList.toggle("hide");
    }
    let childInput = event.target.parentElement.parentElement.getElementsByClassName('value')[0].children;
    for (let child of childInput) {
        child.classList.toggle("hide");
    }
}