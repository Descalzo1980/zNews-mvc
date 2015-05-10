<?php

require_once __DIR__ . '/../models/News.php';

class NewsController
{
    public function actionAll()
    {
        $items = News::getAll();
        include __DIR__ . '/../views/index.php';
    }

} 