<!DOCTYPE html>
<html>

<head>
    <title>
        How to pass variables and data
        from PHP to JavaScript?
    </title>
</head>

<body style="text-align:center;">

<h1 style="color:green;">GeeksforGeeks</h1>

<h4>
    How to pass variables and data
    from PHP to JavaScript?
</h4>

<?php
?>

<script type="text/javascript" src="../view/asset/js/script.js">
    var x = "<?php
        require_once "account_model.php";

        $name = array1();
        echo "$name[0]"
        ?>";
    document.write(x);
    console.log(x, typeof x)
</script>
</body>

<html>