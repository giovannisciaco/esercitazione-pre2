<?php
    $a = isset($_GET["a"]) && $_GET["a"] != "" && is_numeric($_GET["a"]) ? floatval($_GET["a"]) : "NOT_VALID";
    $b = isset($_GET["b"]) && $_GET["b"] != "" && is_numeric($_GET["b"]) ? floatval($_GET["b"]) : "NOT_VALID";

    if(isset($_GET["options"])){
        print_r($_GET["options"]);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form actions="index.php" method="GET">
        <h1>Calcolatrice</h1>


        <label for="a">a:</label>
        <input id="a" type="text" name="a" >
        <br> <br>
        <label for="b">b:</label>
        <input id="b" type="text" name="b" >

    
        <fieldset style="width:300px;">
            <legend>
                Operazioni
            </legend>
            <div>
                <input id="somma" type="radio" name="operazioni" value="somma" />
                <label for="somma">Somma </label>
            </div>


            <div>
                <input id="differenza" type="radio" name="operazioni" value="differenza" />
                <label for="differenza">Differenza </label>
            </div>


            <div>
                <input id="prodotto" type="radio" name="operazioni" value="prodotto" />
                <label for="prodotto">Prodotto </label>
            </div>


            <div>
                <input id="quoziente" type="radio" name="operazioni" value="quoziente" />
                <label for="quoziente">Quoziente </label>
            </div>
        </fieldset>
        <br>
        <fieldset style="width:300px;">
            <legend>
                Opzioni
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
        <br>
        <input type="submit" value="Calcola">
    </form>
    
</body>
</html>