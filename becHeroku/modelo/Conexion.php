<?php

namespace modelo;

class Conexion
{
    public static $user = "ugteivynwjlzf881";
    public static $pass = "OhHbQbND6WKFjrYThHyc";
    public static $URL = "mysql:host=btcuaokv3mok0dwjwkvy-mysql.services.clever-cloud.com;dbname=btcuaokv3mok0dwjwkvy";

    public static function conector()
    {
        try {
            return new \PDO(Conexion::$URL, Conexion::$user, Conexion::$pass);
        } catch (\PDOException $e) {
            return null;
        }
    }
}
