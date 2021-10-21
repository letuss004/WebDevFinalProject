const usernameRegex = /^[a-zA-Z0-9]+$/;
const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const nameRegex = /^[a-zA-Z\-]+$/;

function validateLogIn() {
    let nameLogin = document.getElementById("userNameLogin")
    let passwordLogin = document.getElementById("passLogin").value

    let username = document.getElementById("error-userName_login")
    let pass = document.getElementById("error-password-login")

    username.innerHTML = ""
    pass.innerHTML = ""

    if (nameLogin.value == null || nameLogin.value === "") {
        username.innerHTML = "Username is required"
        return false;
    } else if (!usernameRegex.test(nameLogin.value)) {
        username.innerHTML = "Username contain unexpected regex"
        return false;
    } else if (passwordLogin.length < 6 || passwordLogin === "" || passwordLogin === null) {
        pass.innerHTML = "Your password is less than 6"
        return false;
    }
    // document.getElementById("myForm").submit();
    return true
}

function validateSignUp() {
    let nameSignup = document.getElementById("fname")
    let emailSignUp = document.getElementById("eemail")
    let passwordSignup = document.getElementById("lpassword").value
    let conPassSignup = document.getElementById("confirm-password").value

    let errorUsername = document.getElementById("error-userName-signup")
    let errorEmail = document.getElementById("error-email-signup")
    let errorPassword = document.getElementById("error-password-signup")
    let errorCPass = document.getElementById("error-cPass-signup")

    errorUsername.innerHTML = ""
    errorEmail.innerHTML = ""
    errorPassword.innerHTML = ""
    errorCPass.innerHTML = ""

    if (nameSignup.value == null || nameSignup.value === "") {
        errorUsername.innerHTML = "Username is required"
        return false
    } else if (!usernameRegex.test(nameSignup.value)) {
        errorUsername.innerHTML = "Username contain unexpected regex"
        return false
    } else if (!emailRegex.test(emailSignUp.value)) {
        errorEmail.innerHTML = "Your email contain unexpected regex"
        return false
    } else if (passwordSignup.length < 6) {
        errorPassword.innerHTML = "Your password is less than 6"
        return false
    } else if (passwordSignup !== conPassSignup) {
        errorCPass.innerHTML = "Your confirm password is not match"
        return false
    }
    return true

}


function validateEmail() {

}

function validateUserName() {

}

