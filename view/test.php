<!DOCTYPE html>
<html>
<body>

<form id="myForm" action="nothing.asp">
    First name: <input type="text" name="fname" value="Donald"><br>
    Last name: <input type="text" name="lname" value="Duck"><br>
    <input type="submit" value="Submit">
</form>

<p>The form element above has an invalid URL for where to send the form-data when a form is submitted.</p>

<p>Click the "Try it" button to change the value of the action attribute in the form element to a URL that works.</p>

<p><b>Note:</b> Click "Submit" before and after you have clicked on the "Try it" button!</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
    function myFunction() {
        document.getElementById("myForm").setAction = "payment.php";
        document.getElementById("demo").innerHTML = "The value of the action attribute was changed to /action_page.php.";
    }
</script>

</body>
</html>
