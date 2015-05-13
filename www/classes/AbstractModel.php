<?php

abstract class AbstractModel
{
    protected static $table;

    public static function findAll()
    {
        $sql = 'SELECT * FROM ' .  static::$table;
        $db = new DB();
        return $db->query($sql);
    }

    public static function findOne($id)
    {
        $sql = 'SELECT * FROM ' .  static::$table . ' WHERE id=:id';
        $db = new DB();
        return $db->query($sql, [':id' => $id]);
    }
}