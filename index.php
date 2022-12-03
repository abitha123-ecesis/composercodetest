<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('img/homeimg.jpg')->resize(300, 200)->save('img/homeimg1.jpg',100);

echo '<img src="img/homeimg1.jpg" alt=""/>';