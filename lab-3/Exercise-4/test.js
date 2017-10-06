var update = function() {

    var borderInput = document.form.border.value;
    var backgroundColorInput = document.form.backgroundColor.value;

    var p = document.getElementById("p");

    p.style.borderColor = borderInput;
    p.style.backgroundColor = backgroundColorInput;
}
