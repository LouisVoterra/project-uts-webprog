<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Setting</title>
</head>
<body>
    <?php
        //jika form kirim value menggunakan post, maka set cookie
        if($_SERVER["REQUEST_METHOD"]  ==  "POST"){
            setcookie("text-align",$_POST["text-align"],time() + 3600);
            setcookie("font-family",$_POST["font-family"],time() + 3600);
            setcookie("color",$_POST["color"],time() + 3600);
            header("index.php");
            exit();
        }
    ?>

    <p>Halaman Setting</p>
    <br>
    <br>
    <br>
    <form method ="post">
        <label>Text-align: </label> 
        <select name="text-align" id="text-align">  
            <option>-- Pilih Text Align --</option>
            <option value="left">Left</option>
            <option value="right">Right</option>
            <option value="center">Center</option>
            <option value="justify">Justify</option>
        </select>
        <label>Font-Family: </label> 
        <select name="font-family">
            <option>-- Pilih Font Family --</option>
            <option value="arial">Arial</option>
            <option value="tahoma">Tahoma</option>
            <option value="calibri">Calibri</option>
        </select>   

        <label>Color : </label> 
        <input type="color" name="color" id="color" value="<?php $color ?>">
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>

</body>
</html>