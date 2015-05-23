<?php

use Application\Models\News;

class NewsController
{
    public function actionAll()
    {
        $news = News::findAll();
        $view = new View();
        $view->items = $news;
        $view->display('news/all.php');
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new View;
        $view->assign('item', $item);
        $view->display('news/one.php');
    }
}