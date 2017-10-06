var are_field_values_equal = function() {
    var field1_value = document.form.field1.value;
    var field2_value = document.form.field2.value;

    return field1_value == field2_value;
};

var are_field_values_valid = function() {
    var field1_value = document.form.field1.value;
    var field2_value = document.form.field2.value;

    return field1_value.length >= 8 && field2_value.length >= 8;
};

var compare = function() {
    if (!are_field_values_valid()) {
        alert("ERROR: invalid password entered.")
        return;
    }

    if (are_field_values_equal()) {
        alert("Passwords are equal!");
    } else {
        alert("Passwords are not equal");
    }
};
