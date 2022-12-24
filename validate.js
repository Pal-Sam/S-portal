function validateLoginForm() {
	var name = document.getElementById("userid").value;
	var password = document.getElementById("password").value;

	if (name == "" || password == "") {
		document.getElementById("errorMsg").innerHTML = "Please fill the required fields"
		return false;
	}

	else if (password.length < 10) {
		document.getElementById("errorMsg").innerHTML = "Your password must include atleast 10 characters"
		return false;
	}
	else {
		return true;
	}
}