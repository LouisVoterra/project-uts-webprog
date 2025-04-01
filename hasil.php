<?php
$text_align = $_POST['text-align'] ?? 'left';  // Default left jika tidak ada parameter
$font_family = $_POST['font-family'] ?? 'Arial';  // Default Arial jika tidak ada parameter
$color = $_POST['color'] ?? '#000000';  // Default black jika tidak ada parameter

// Menyusun CSS berdasarkan pengaturan yang diterima
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