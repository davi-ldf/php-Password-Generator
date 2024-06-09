<?php 

if(isset($_POST['length'])) {
    $length = intval($_POST['length']);
    $lowercase = isset($_POST['lowercase']);
    $uppercase = isset($_POST['uppercase']);
    $symbols = isset($_POST['symbols']);
    $numbers = isset($_POST['numbers']);
}
var_dump($numbers);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <h4>Generated Password</h4>
    <input type="text" readonly value="novaSenha">
    <h4>Generate a Password</h4>
    <form method="post" action="">
        <p>
            <label for="">Password Length</label>
            <input type="number" min="8" required value="16" name="length">
        </p>
        <p>
            <label for="">Include Lowercase</label>
            <input type="checkbox" value="1" checked name="lowercase">
        </p>
        <p>
            <label for="">Include Uppercase</label>
            <input type="checkbox" value="1" checked name="uppercase">
        </p>
        <p>
            <label for="">Include Symbols</label>
            <input type="checkbox" value="1" checked name="symbols">
        </p>
        <p>
            <label for="">Include Numbers</label>
            <input type="checkbox" value="1" checked name="numbers">
        </p>
        <p>
            <button>Generate!</button>
        </p>

    </form>

</body>
</html>