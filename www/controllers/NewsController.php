<?php



class NewsController
{
    public function actionAll()
    {
        $items = News::getAll();
        $view = new View();
        $view->assign('items', $items);
        $view->display('news/all.php');
    }

    public function actionOne()
    {

        $id = $_GET['id'];
        $item = News::getOne($id);
        include __DIR__ . '/../views/news/one.php';
    }

} 