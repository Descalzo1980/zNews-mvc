<?php


/**
 * read about phpdoc
 */
class NewsController
{
    public function actionAll()
    {
        try{
            $art = NewsModel::findOneByColumn('title', 'Новый заголовок 123');
        } catch (ModelException $e){
            die('Что то пошло не так');
        }


    }
}