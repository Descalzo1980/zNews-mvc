<?php

class DB
{
    private $dbh;

    public function __construct()
    {
//        mysql_connect('localhost','root','');
//        mysql_select_db('test');

        $this->dbh = new PDO('mysql:dbname=test;host=localhost', 'root', '');
    }

    public function query($sql, $param=[])
{
    $sth = $this->dbh->prepare($sql);
    $sth->execute($param);
    return $sth->fetchAll();
}
    /*
    public function queryAll($sql, $class = 'stdClass')
    {
        $res = mysql_query($sql);
        if (false === $res){
            return false;
        }
        $ret = [];
        while($row = mysql_fetch_object($res, $class)){
            $ret[] = $row;
        }
        return $ret;
    }

    public function queryOne($sql, $class = 'stdClass')
    {
        return $this->queryAll($sql, $class)[0];
    }
    */
} 