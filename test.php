<?php

require_once("Random.php");
require_once("Captcha.php");

$captcha = new Captcha();
$captcha->generate(new Random());
echo $captcha->getQuestion()."\n";

 ?>
