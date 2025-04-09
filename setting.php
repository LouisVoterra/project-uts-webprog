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
            if ($_POST["text-align"] == "") {
                $text_align = "left";
            } else {
                $text_align = $_POST["text-align"];
            }
        
            if ($_POST["font-family"] == "") {
                $font_family = "Times New Roman";
            } else {
                $font_family = $_POST["font-family"];
            }
        
            if ($_POST["color"] == "") {
                $color = "#000000";
            } else {
                $color = $_POST["color"];
            }



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
            <option value="left" <?php if($text_align ==''){echo 'selected';}?>>-- Pilih Text Align --</option>
            <option value="left" <?php if($text_align =='left'){echo 'selected';}?>>Left</option>
            <option value="right" <?php if($text_align =='right'){echo 'selected';}?>>Right</option>
            <option value="center" <?php if($text_align =='center'){echo 'selected';}?>>Center</option>
            <option value="justify" <?php if($text_align =='justify'){echo 'selected';}?>>Justify</option>

        </select>
        <br>
        <br>
        <label>Font-Family: </label>    
        <select name="font-family">
            <option value="arial" <?php if($font_family ==''){echo 'selected';}?>>-- Pilih Font Family --</option>
            <option value="arial" <?php if($font_family =='arial'){echo 'selected';}?>>Arial</option>
            <option value="tahoma" <?php if($font_family =='tahoma'){echo 'selected';}?>>Tahoma</option>
            <option value="calibri" <?php if($font_family =='calibri'){echo 'selected';}?>>Calibri</option>
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