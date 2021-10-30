let li_links = document.querySelectorAll(".links ul li");
let view_wraps = document.querySelectorAll(".view_wrap");
let list_view = document.querySelector(".payment-view");
let grid_view = document.querySelector(".grid-view");
let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');
let list = document.querySelectorAll('.navigation li');
let sign_up_btn = document.querySelector("#sign-up-btn");
let container = document.querySelector(".container");


sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");

});

//MenuToggle
toggle.onclick = function () {
    navigation.classList.toggle('active');
    main.classList.toggle('active');
}

list.forEach((item) =>
    item.addEventListener('mouseover', activeLink));

//Scroll
window.addEventListener('scroll', function () {
    const header = document.querySelector('header');
    header.classList.toggle("sticky", window.scrollY > 0);
});

li_links.forEach(function (link) {
    link.addEventListener("click", function () {
        li_links.forEach(function (link) {
            link.classList.remove("active");
        })

        link.classList.add("active");

        let li_view = link.getAttribute("data-view");

        view_wraps.forEach(function (view) {
            view.style.display = "none";
        })

        if (li_view === "payment-view") {
            list_view.style.display = "block";
        } else {
            grid_view.style.display = "block";
        }
    })
})

//Hovered class to selected items
function activeLink() {
    list.forEach((item) =>
        item.classList.remove('hovered'));
    this.classList.add('hovered');
}

function toggleMenu() {
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
    toggle.classList.toggle('active');
    navigation.classList.toggle('active');
    main.classList.toggle('active');
}


// validate ------------------------------------------


function validateLogIn() {
    let nameLogin = document.getElementById("userNameLogin");
    let passwordLogin = document.getElementById("passLogin").value;
    let username = document.getElementById("error-userName-login");
    let pass = document.getElementById("error-password-login");

    const usernameRegex = /^[a-zA-Z0-9]+$/;

    username.innerHTML = "";
    pass.innerHTML = "";

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
    console.log("login validate success");
    // set action if validate success
    document.getElementById("loginForm").submit();
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

    const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const nameRegex = /^[a-zA-Z\-]+$/;

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

function togglePopUpEdit() {
    document.getElementById("popupEdit").classList.toggle("active");
}

function togglePopUpEditInformation(employeeID) {
    document.getElementById("popupEdit").classList.toggle("active");
    let employeeIdCol = "employeeIdCol" + employeeID
    let fullNameCol = "fullNameCol" + employeeID
    let phoneNumberCol = "phoneNumberCol" + employeeID
    let addressCol = "addressCol" + employeeID
    let jobNameCol = "jobNameCol" + employeeID

    document.getElementById("employeeId-edit").value = document.getElementById(employeeIdCol).innerText
    document.getElementById("fullName-edit").value = document.getElementById(fullNameCol).innerText
    document.getElementById("phoneNumber-edit").value = document.getElementById(phoneNumberCol).innerText
    document.getElementById("address-edit").value = document.getElementById(addressCol).innerText
    document.getElementById("job-edit").value = document.getElementById(jobNameCol).innerText

    setValues4Select(document.getElementById(jobNameCol).innerText)
}

function togglePopUpAdd() {
    document.getElementById("popupAdd").classList.toggle("active");
}


function setValues4Select(valuea) {
    if (valuea === "Administrator") {
        document.getElementById("o1").selected = "selected"
    } else if (valuea === "Radiologic technician.") {
        document.getElementById("o2").selected = "selected"
    } else if (valuea === "Dietician") {
        document.getElementById("o3").selected = "selected"
    } else if (valuea === "Respiratory therapist.") {
        document.getElementById("o4").selected = "selected"
    } else if (valuea === "Registered nurse.") {
        document.getElementById("o5").selected = "selected"
    } else if (valuea === "Occupational therapist.") {
        document.getElementById("o6").selected = "selected"
    } else if (valuea === "Pharmacist") {
        document.getElementById("o7").selected = "selected"
    } else if (valuea === "Physician assistant.") {
        document.getElementById("o8").selected = "selected"
    } else if (valuea === "Medical technologist.") {
        document.getElementById("o9").selected = "selected"
    } else if (valuea === "Floor cleaner") {
        document.getElementById("o10").selected = "selected"
    } else if (valuea === "Waste collector") {
        document.getElementById("o11").selected = "selected"
    } else if (valuea === "Equipment cleaner") {
        document.getElementById("o12").selected = "selected"
    } else if (valuea === "Guardian") {
        document.getElementById("o13").selected = "selected"
    }
}

function setSelectValue() {
    let valuea = document.getElementById("select-add").value;
    console.log(valuea)
    document.getElementById("job-add").value = valuea
    console.log(document.getElementById("job-add").value)
}