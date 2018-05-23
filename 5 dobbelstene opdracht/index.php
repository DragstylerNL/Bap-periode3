<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    function dice($worp, $i){
        $image = imagecreate(200,200) or die("Cannot initialize new image stream");
        $backgroundColor = imagecolorallocate($image,0,0,0);
        $color = imagecolorallocate($image,255,255,255);

        if($worp == 1 OR $worp == 3 OR $worp == 5){
            imagefilledellipse($image,100,100,40,40,$color);// midden
        }
        if($worp == 2 OR $worp == 3){
            imagefilledellipse($image,50,50,40,40,$color); // linksBoven
            imagefilledellipse($image,150,150,40,40,$color); // rechtsOnder
        }
        if($worp == 4 OR $worp == 5 OR $worp == 6){
            imagefilledellipse($image,50,50,40,40,$color); // linksBoven
            imagefilledellipse($image,150,50,40,40,$color); // rechtsBoven
            imagefilledellipse($image,50,150,40,40,$color); // linksOnder
            imagefilledellipse($image,150,150,40,40,$color); // rechtsOnder
        }
        if($worp == 6){
            imagefilledellipse($image,50,100,40,40,$color); // links
            imagefilledellipse($image,150,100,40,40,$color); // rechts
        }
        $fileName = strval($i). ".png";
        imagepng($image,$fileName);
        imagedestroy($image);
        }
        for($i = 0; $i < 5; $i++){
            $worp = rand(1,6);
            dice($worp, $i);
            print "<img src=".$i.".png?". date("U") . ">";
        }
        ?>
    <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" METHOD = "POST">
        <input type = "submit" name="submit" value="nieuwe worp">
    </form>
</body>
</html>



