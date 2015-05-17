<?php


/**
 * read about phpdoc
 */
class NewsController
{
    public function actionAll()
    {
        $art = new NewsModel();
        $art->title = 'Сегодня в мире';
        $art->text = 'Всё спокойно';
        $art->insert();

        var_dump( $art->id );

    }
}