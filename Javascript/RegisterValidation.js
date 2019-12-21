// Input Fields of Register page.
var register_username = document.forms["registerForm"]["register_username"];
var register_email_address =
  document.forms["registerForm"]["register_email_address"];
var register_password = document.forms["registerForm"]["register_password"];
var confirm_password = document.forms["registerForm"]["confirm_password"];

// Display error fields.
var username_error = document.getElementById("username_error");
var email_error = document.getElementById("email_error");
var password_error = document.getElementById("password_error");
var confirm_password_error = document.getElementById("confirm_password_error");

// Regex array
var usernameRegex = new RegExp(
  "^[a-zA-Z0-9]([._](?![._])|[a-zA-Z0-9]){6,18}[a-zA-Z0-9]$"
);
var emailRegex = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
var passwordRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{6,})");

// Event to display errors.
register_username.addEventListener("blur", nameVerify, true);
register_email_address.addEventListener("blur", emailVerify, true);
register_password.addEventListener("blur", passwordVerify, true);

/**
 *
 * Function to check errors of register fields.
 *
 */
function RegValidate() {
  // Check if register username is empty.
  if (register_username.value == "") {
    register_username.style.border = "1px solid red";
    username_error.textContent = "Username is required!";
    username_error.style.color = "red";
    username_error.style.fontSize = "18px";
    register_username.focus();
    return false;
  }

  /* 
  Check if username has 8 to 20 characters.
  Username can have underscore and dot but not in a row.
  Ex: user__test is not accepted.
  */
  if (!usernameRegex.test(register_username.value)) {
    register_username.style.border = "1px solid red";
    username_error.innerHTML =
      "Invalid Username! <br>1. Contains only alphanumeric characters, underscore and dot.<br>2. Underscore and dot cannot be at start or end or used multiple times in a row.<br>3. Underscore and dot can't be next to each other.<br>4. Number of characters must be between 8 to 20.";
    username_error.style.color = "red";
    username_error.style.fontSize = "18px";
    register_username.focus();
    return false;
  }

  // Check if username already exists in localStorage.
  if (register_username.value in localStorage) {
    register_username.style.border = "1px solid red";
    username_error.textContent = "Username already exists!";
    username_error.style.color = "red";
    username_error.style.fontSize = "18px";
    register_username.focus();
    return false;
  }

  // Check if email address is empty.
  if (register_email_address.value == "") {
    register_email_address.style.border = "1px solid red";
    email_error.textContent = "Email Address is required!";
    email_error.style.color = "red";
    email_error.style.fontSize = "18px";
    register_email_address.focus();
    return false;
  }

  // Check if email address has a '@' and '.'.
  if (!emailRegex.test(register_email_address.value)) {
    register_email_address.style.border = "1px solid red";
    email_error.textContent = "Invalid Email Address!";
    email_error.style.color = "red";
    email_error.style.fontSize = "18px";
    register_email_address.focus();
    return false;
  }

  // Check if password is empty.
  if (register_password.value == "") {
    register_password.style.border = "1px solid red";
    password_error.textContent = "Password is required!";
    password_error.style.color = "red";
    password_error.style.fontSize = "18px";
    register_password.focus();
    return false;
  }

  // Check if password has uppercase, lower space characters, a numerical value and at least 6 characters.
  if (!passwordRegex.test(register_password.value)) {
    register_password.style.border = "1px solid red";
    password_error.innerHTML =
      "Invalid Password! <br>Password must contain 1 UPPERCASE character, 1 numerical value & minimum 6 characters.";
    confirm_password_error.innerHTML = "";
    password_error.style.color = "red";
    password_error.style.fontSize = "18px";
    register_password.focus();
    return false;
  }

  // Check if password is equal to confirm password.
  if (register_password.value != confirm_password.value) {
    register_password.style.border = "1px solid red";
    confirm_password.style.border = "1px solid red";
    confirm_password_error.innerHTML = "Passwords do not match!";
    confirm_password_error.style.color = "red";
    confirm_password_error.style.fontSize = "18px";
    return false;
  }
}

/**
 *
 * Function to return true if there are no errors in username.
 *
 */
function nameVerify() {
  if (register_username.value != "") {
    register_username.style.border = "1px solid none";
    username_error.innerHTML = "";
    return true;
  }

  if (usernameRegex.test(register_username.value)) {
    register_username.style.border = "1px solid none";
    username_error.innerHTML = "";
    return true;
  }

  if (!register_username.value in localStorage) {
    register_username.style.border = "1px solid none";
    username_error.innerHTML = "";
    return true;
  }
}

/**
 *
 * Function to return true if there are no errors in the email address.
 *
 */
function emailVerify() {
  if (register_email_address.value != "") {
    register_email_address.style.border = "1px solid none";
    email_error.innerHTML = "";
    return true;
  }

  if (!emailRegex.test(register_email_address.value)) {
    register_email_address.style.border = "1px solid none";
    email_error.innerHTML = "";
    return true;
  }
}

/**
 *
 * Function to return true if there are no errors in password.
 *
 */
function passwordVerify() {
  if (register_password.value != "") {
    register_password.style.border = "1px solid none";
    password_error.innerHTML = "";
    return true;
  }

  if (passwordRegex.test(register_password.value)) {
    register_password.style.border = "1px solid none";
    password_error.innerHTML = "";
    return true;
  }
}

/**
 *
 * Function to return true if the password is equal to the confirm password.
 *
 */
function passwordMatch() {
  if (register_password.value === confirm_password.value) {
    register_password.style.border = "1px solid none";
    confirm_password.style.border = "1px solid none";
    password_error.innerHTML = "";
    confirm_password_error.innerHTML = "Passwords Match!";
    confirm_password_error.style.color = "green";
    confirm_password_error.style.fontSize = "18px";
    return true;
  } else {
    register_password.style.border = "1px solid none";
    confirm_password.style.border = "1px solid none";
    password_error.innerHTML = "";
    confirm_password_error.innerHTML = "Passwords Does Not Match!";
    confirm_password_error.style.color = "red";
    confirm_password_error.style.fontSize = "18px";
    return false;
  }
}
