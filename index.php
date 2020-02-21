<?php

// model files
require 'Model/Guestbook.php';
require 'Model/Post.php';

// controller files
require 'Controller/HomePageController.php';

$controller = new HomePageController();
$controller->render();