function showPassword(element) {
    var x = document.getElementsByName(element)[0];

    if (x) {
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
}
