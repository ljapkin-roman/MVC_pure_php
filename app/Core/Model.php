<?php
namespace Adminko\Core;

class Model
{

    const DB_HOST = "localhost";
    const DB_NAME = 'protest14';
    const CHARSET = '';
    const DB_USER = 'roma';
    const DB_PASSWORD = '230678';
    public $db;
    public function __construct()
    {
        try {
           $this->db = new \PDO('mysql:host='.self::DB_HOST.'; dbname='.self::DB_NAME.';charset=utf8', self::DB_USER, self::DB_PASSWORD);
        } catch (PDOExpection $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }  
    }
     
}
