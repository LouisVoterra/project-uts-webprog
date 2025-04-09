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
        // $text_align = isset($_COOKIE["text-align"]) ? $_COOKIE["text-align"] : "";
        // $font_family = isset($_COOKIE["font-family"]) ? $_COOKIE["font-family"] : "";
        // $color = isset($_COOKIE["color"]) ? $_COOKIE["color"] : "#000000"; // Default warna hitam jika tidak ada cookie

        if(isset($_COOKIE["text-align"])){
            $text_align = $_COOKIE["text-align"];
        }
        else{
            $text_align = "";
        }

        if(isset($_COOKIE["font-family"])){
            $font_family = $_COOKIE["font-family"];
        }
        else{
            $font_family = "";
        }

        if(isset($_COOKIE["color"])){
            $color = $_COOKIE["color"];
        }
        else{
            $color = "";
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
            <option value="left" <?= $text_align == 'left' ? 'selected' : '' ?>>Left</option>
            <option value="right" <?= $text_align == 'right' ? 'selected' : '' ?>>Right</option>
            <option value="center" <?= $text_align == 'center' ? 'selected' : '' ?>>Center</option>
            <option value="justify" <?= $text_align == 'justify' ? 'selected' : '' ?>>Justify</option>

        </select>
        <br>
        <br>
        <label>Font-Family: </label> 
        <select name="font-family">
            <option>-- Pilih Font Family --</option>
            <option value="arial" <?= $font_family == 'arial' ? 'selected' : '' ?>>Arial</option>
            <option value="tahoma" <?= $font_family == 'tahoma' ? 'selected' : '' ?>>Tahoma</option>
            <option value="calibri" <?= $font_family == 'calibri' ? 'selected' : '' ?>>Calibri</option>
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