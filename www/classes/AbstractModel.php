<?php

abstract class AbstractModel
{
    protected static $table;
    protected static $class;


    public static function getAll()
    {
        $db = new DB;
        return $db->queryAll('SELECT * FROM ' . static::$table, static::$class);
    }
} 