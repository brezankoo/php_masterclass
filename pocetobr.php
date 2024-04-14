

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="galery.css">
    <title>Document</title>
</head>
<body>
<h1 class="galery">Galeria</h1>

<?php
include "header.php";
$galleryPath = 'galeria/';

if (is_dir($galleryPath)) {
    $galleryDirs = array_filter(scandir($galleryPath), function ($item) use ($galleryPath) {
        return is_dir($galleryPath . $item) && !in_array($item, ['.', '..']);
    });

    if (!empty($galleryDirs)) {
        echo '<nav>';
        echo '<ul a class="galery">';
        // echo '<li><a href="' . $galleryPath . '">GALERIA</a></li>';
        foreach ($galleryDirs as $dir) {
            if(isset($_GET['part']) && $_GET['part'] == $dir){
                echo '<li a class="galery"><a class="galery selected" href="?part='.$dir.'">' . $dir . '</a></li>';
            }
                 else{
                    echo '<li a class="galery"><a class="galery" href="?part='.$dir.'">' . $dir . '</a></li>';
                }
            }

        }
        echo '</ul>';
        echo '</nav>';
        $img_count = 0;
        if(isset($_GET["part"])){
            $part = $_GET["part"];
            $direct = "./galeria/".$part;
            $images = glob($direct . "/*.jpg");
            echo  '<div class="gallery">';
            foreach($images as $image)
            {
                $img_count++;
            echo '<div class="gallery-item">
                    <img src="'.$image.'" alt="Image 1">
                    </div>';

            }
            echo  '<div class="gallery">';
        }
    }


include 'function.php';
pocetObrazkov($images);

?>

</body>
</html>

<?php
function pocetObrazkov($imgs){
$count = 0;
    foreach($imgs as $img){
        $count++;
    }

echo $count;

echo "hellooo";
}

?>
