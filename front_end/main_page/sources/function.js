function myFunction(){
    var un = document.forms["myForm"]["Uname"].value;
    var pw = document.forms["myForm"]["Pass"].value;
    if (un == "bruh" && pw == "1234") {
        window.location.href="/main_page/main.php";
    }
}