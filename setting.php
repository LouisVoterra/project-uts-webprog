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
            header("Location: index.php");
            exit();
        }
        //membaca cookie, kemudian disimpan ke variabel masing"
        $text_align = isset($_COOKIE["text-align"]) ? $_COOKIE["text-align"] : "";
        $font_family = isset($_COOKIE["font-family"]) ? $_COOKIE["font-family"] : "";
        $color = isset($_COOKIE["color"]) ? $_COOKIE["color"] : "#000000"; // Default warna hitam jika tidak ada cookie

    ?>

    <p>Halaman Setting</p>
    <br>
    <br>
    <br>
    <form method ="post">
        <label>Text-align: </label> 
        <select name="text-align" id="text-align">  
            <option>-- Pilih Text Align --</option>
            <option value="Left" <?= $text_align == 'Left' ? 'selected' : '' ?>>Left</option>
            <option value="Right" <?= $text_align == 'Right' ? 'selected' : '' ?>>Right</option>
            <option value="Center" <?= $text_align == 'Center' ? 'selected' : '' ?>>Center</option>
            <option value="Justify" <?= $text_align == 'Justify' ? 'selected' : '' ?>>Justify</option>

        </select>
        <br>
        <br>
        <label>Font-Family: </label> 
        <select name="font-family">
            <option>-- Pilih Font Family --</option>
            <option value="Arial" <?= $font_family == 'Arial' ? 'selected' : '' ?>>Arial</option>
            <option value="Tahoma" <?= $font_family == 'Tahoma' ? 'selected' : '' ?>>Tahoma</option>
            <option value="Calibri" <?= $font_family == 'Calibri' ? 'selected' : '' ?>>Calibri</option>
        </select>   
        <br>
        <br>

        <label>Color : </label> 
        <input type="color" name="color" id="color" value="<?= $color ?>">
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>

</body>
</html>