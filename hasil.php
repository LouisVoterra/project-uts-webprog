<?php
// $text_align = $_COOKIE['text-align'] ?? null;
// $font_family = $_COOKIE['font-family'] ?? null;
// $color = $_COOKIE['color'] ?? null;


if(isset($_COOKIE["text-align"])){
    $text_align = $_COOKIE["text-align"];
}
else{
    $text_align = "left";
}

if(isset($_COOKIE["font-family"])){
    $font_family = $_COOKIE["font-family"];
}
else{
    $font_family = "Times New Roman";
}

if(isset($_COOKIE["color"])){
    $color = $_COOKIE["color"];
}
else{
    $color = "";
}



if($text_align && $font_family && $color){
    $tampilan = "p {
        text-align: $text_align; 
        font-family: $font_family; 
        color: $color;      
    }";
    $css = "text-align: $text_align; font-family: $font_family; color: $color;";
}
else{
    $tampilan = "";
    $css = "text-align: $text_align; font-family: $font_family; color: $color;";
}

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
    <textarea readonly rows="5" cols="50"><?= $tampilan?></textarea>
    <br>
    <a href="setting.php" >Ganti Setting</a>
    <br>
    <br>
    <h3>Contoh Paragraf</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores facilis impedit culpa facere omnis voluptatum minus, quae quia modi iste quibusdam veritatis illum consequuntur velit maxime deserunt eaque magnam fuga est officiis eveniet. Vero necessitatibus voluptatum laudantium, commodi, aut esse maiores explicabo perspiciatis, ipsum dolores illum voluptates sed culpa reiciendis beatae repudiandae quod! Rerum porro eligendi et, excepturi perferendis aspernatur error deleniti veniam necessitatibus at debitis quae quisquam rem pariatur tempore laudantium iure nihil repellat commodi id dolorem voluptatibus impedit omnis! Veniam doloribus beatae magni possimus. Perferendis expedita obcaecati aliquam saepe tempora libero, dignissimos magnam beatae nihil laudantium eveniet ad.</p>
    

</body>
</html>