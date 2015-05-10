<?php

require_once __DIR__ . '/controllers/NewsController.php';

$controller = new NewsController();
$controller->actionAll();