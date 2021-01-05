<?php
    class DBConnection {
        private static $instance = NULL;
        public static function getInstance(){
            if(!isset(self::$instance)){
                try {
                    $dsn = 'mysql:host=localhost;dbname=onlineshop';
                    $username='root';
                    $password = '';
                    self::$instance = new PDO($dsn,$username,$password);
                    self::$instance->exec("SET NAMES utf8");
                } catch (PDOException $e) {
                    die($e->getMessage());
                }
            }
            return self::$instance;
        }
    }
?>