<?php
    class Session{
        public static function init(){
            if(version_compare(phpversion(),'5.4.0','<')){
                if(session_id() ===''){
                    session_start();
                }
            }else{
                if(session_status()=== PHP_SESSION_NONE){
                    session_start();
                }
            }
        }

        public static function setSession($key,$value){
            $_SESSION[$key] = $value;
        }
        
        public static function getSession($key){
            return $_SESSION[$key];
        }

        public static function checkSession($key){
            self::init();
            if(self::getSession($key) === false){
                self::destroySession();
                header('location: index.php?controller=pages');
            }
        }

        public static function destroySession(){
            session_destroy();
            header('location: ?controller=pages');
        }
    }
?>