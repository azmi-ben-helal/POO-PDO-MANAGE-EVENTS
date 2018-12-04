<?php
/**
 * Created by PhpStorm.
 * User: MIRA
 * Date: 26/11/2018
 * Time: 16:52
 */

class ConnexionBD
{

    private static $connexPDO = null;
    private const HOST = 'localhost';
    private const USER = 'root';
    private const PWD = '';
    private const BD_Name = 'users';

    private function __construct()
    {
        try {
            self::$connexPDO = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::BD_Name, self::USER, self::PWD);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }

    public static function getInstance()
    {if(!self::$connexPDO){
        new ConnexionBD();
    }
        return self::$connexPDO;

    }

    /**
     * @return PDO
     */
    public function getConnexPDO(): PDO
    {
        return self::$connexPDO;
    }
}
