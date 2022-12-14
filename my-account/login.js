function login() {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;
        xmlhttp.open("POST", "login.php?username=" + username + "&password=" + password, true);
        xmlhttp.send();
    }
}