<?php
    class className{
        public static function staticMethod(){
            echo "Welcome to Mymensingh";
        }

        public function __construct(){
            self::staticMethod();
        }
    }

    new className();
?>