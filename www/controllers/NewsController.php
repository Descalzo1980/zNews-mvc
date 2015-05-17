<?php


/**
 * read about phpdoc
 */
class NewsController
{
    public function actionAll()
    {
        $art = NewsModel::findOneByColumn('title', 'Проверка');
        $art->title = 'Новый заголовок';
        $art->text = 'Работает ли?';
        $art->update();


    }
}