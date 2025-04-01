<?php
$text_align = $_COOKIE['text-align'] ?? 'left';
$font_family = $_COOKIE['font-family'] ?? 'Arial';
$color = $_COOKIE['color'] ?? '#000000';
$css = "text-align: $text_align; font-family: $font_family; color: $color;";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Hasil</title>
    <style>
        p{
            <?= $css?>
        }
    </style>
</head>
<body>
    <h2>Halaman Hasil</h2>
    <br>
    <br>
    <br>
    <h2>Setting yang tersedia:</h2>
    <textarea rows="4" cols="50"><?= $css?></textarea>
    <br>
    <a href="setting.php" >Ganti Setting</a>
    <br>
    <br>
    <h3>Contoh Paragraf</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non repellendus earum reprehenderit laudantium! Omnis, possimus est. Officia maiores minus suscipit unde, provident nobis aut delectus molestiae eos, neque, reiciendis officiis!</p>
    

</body>
</html>