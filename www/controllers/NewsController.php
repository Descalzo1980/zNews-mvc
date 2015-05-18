<?php


/**
 * read about phpdoc
 */
class NewsController
{
    public function actionAll()
    {
        $art = NewsModel::findOneByColumn('title', 'Новый заголовок ');
        $art->title = 'Новый заголовок 123';
        $art->save();
    }
}