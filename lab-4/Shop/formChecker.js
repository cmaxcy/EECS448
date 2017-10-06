var validate = function() {
    if (is_shipping_valid() && is_username_valid() && is_password_valid() && are_quantities_valid()) {
		return true;
	}

	alert("Error");
	return false;
};

// ensure a shipping option has been selected
var is_shipping_valid = function() {
    var shipping = document.form.shipping.value;

	if (shipping == "") {
		return false;
	}

    return true;
};

// ensure username is an email adress
var is_username_valid = function() {
    var username = document.form.username.value;

    return validateEmail(username);
};

// Ensure password is non-empty
var is_password_valid = function() {
    var password = document.form.password.value;

    if (password == "") {
		return false;
	}

	return true;
};

// ensure quantities are non-negative numbers
var are_quantities_valid = function() {
    var A = document.form.A.value;
    var B = document.form.B.value;
    var C = document.form.C.value;

	if (isNan(A) || isNan(B) || isNan(C)) {
		return false;
	}

    return true;
};

// https://stackoverflow.com/questions/46155/how-to-validate-email-address-in-javascript
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};
