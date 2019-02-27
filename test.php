<?php

include(__DIR__.'/src/Captcha.php');

$captcha = new ZerosDev\Captcha();
$generate = $captcha->length(6)->generate();
$image = $generate->getImage();
$id = $generate->getId();

echo '<img src="' . $image . '" id="' . $id . '" />';