<?php
    $a = isset($_POST["a"]) && $_POST["a"] != "" && is_numeric($_POST["a"]) ? floatval($_POST["a"]) : "NOT_VALID";
    $b = isset($_POST["b"]) && $_POST["b"] != "" && is_numeric($_POST["b"]) ? floatval($_POST["b"]) : "NOT_VALID";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form actions="index.php" method="get">
        <h1>Calcolatrice</h1>


        <label for="a">A</label>
        <input id="a" type="text" name="a" value>
        
        <label for="b">B</label>
        <input id="b" type="text" name="b" value>

    
        <fieldset>
            <legend>
                <h2>OPERAZIONI</h2>
            </legend>
            <div>
                <input id="somma" type="checkbox" name="operazioni" value="somma" />
                <label for="somma">Somma </label>
            </div>


            <div>
                <input id="differenza" type="checkbox" name="operazioni" value="differenza" />
                <label for="differenza">Differenza </label>
            </div>


            <div>
                <input id="prodotto" type="checkbox" name="operazioni" value="prodotto" />
                <label for="prodotto">Prodotto </label>
            </div>


            <div>
                <input id="quoziente" type="checkbox" name="operazioni" value="quoziente" />
                <label for="quoziente">Quoziente </label>
            </div>
        </fieldset>

        <fieldset>
            <legend>
                <h2>OPZIONI</h2>
            </legend>


            <div>
                <input id="abs" type="checkbox" name="options[]" value="absolute" />
                <label for="abs">Valore assoluto </label>
            </div>


            <div>
                <input id="square" type="checkbox" name="options[]" value="square" />
                <label for="square">Quadrato </label>
            </div>


            <div>
                <input id="arr" type="checkbox" name="options[]" value="arr" />
                <label for="arr">arrotonda a 2 decimali </label>
            </div>
        </fieldset>

        <input type="submit" value="Calcola">
    </form>
    
</body>
</html>