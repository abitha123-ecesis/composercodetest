<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$image=Image::make('img/homeimg.jpg')->resize(300, 200)->save('img/homeimg1.jpg',100); // blue line denotes render in an exsisting line

echo '<img src="img/homeimg1.jpg" alt=""/>';

?>
<!-- green line denotes adding new line -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>