<?php
require_once '../bootloader.php';

$controller = new \Core\Page\Controller();
print $controller->onRender();
