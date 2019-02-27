<?php

include(__DIR__.'/src/Captcha.php');

$captcha = new ZerosDev\Captcha();
$image = $captcha->getImage();
$id = $captcha->getId();

echo '<img src="' . $image . '" id="' . $id . '" />';