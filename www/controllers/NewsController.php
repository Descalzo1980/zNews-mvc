<?php


/**
 * read about phpdoc
 */
class NewsController
{
    public function actionAll()
    {

            $art = NewsModel::findOneByColumn('title', 'Новый заголовок 123');
    }
}