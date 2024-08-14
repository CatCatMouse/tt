<?php
require_once "./vendor/autoload.php";

use CatCatMouse\Tt\TT;

$tt = TT::make();

$tt->hello();
$tt->desc();