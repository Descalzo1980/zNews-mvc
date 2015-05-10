<?php

class News
    extends AbstractModel
{

    public $id;
    public $title;
    public $text;

    protected static $table = 'news';
    protected static $class = 'News';

    public static function getOne($id)
    {
        $db = new DB();
        return $db->queryOne('SELECT * FROM news WHERE id=' .$id, 'News');
    }
} 