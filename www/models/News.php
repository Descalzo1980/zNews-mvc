<?php
/**
 * Created by PhpStorm.
 * User: STAS
 * Date: 10.05.2015
 * Time: 9:25
 */
require_once __DIR__ . '/../classes/DB.php';
class News {

    public $id;
    public $title;
    public $text;

    public static function getAll()
    {
        $db = new DB;
        return $db->query('SELECT * FROM news', 'News');
    }
} 