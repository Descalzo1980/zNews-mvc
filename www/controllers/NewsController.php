<?php


/**
 * read about phpdoc
 */
class NewsController
{
    public function actionAll()
    {
        $article = NewsModel::findOneByColumn('title', 'Привет');

        var_dump($article);

    }
}