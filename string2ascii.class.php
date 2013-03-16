<?php

    class Configuration {

          static $instance = NULL; 

          private function __construct() {}

          public function __destruct() {}

          public function getInstance() {

                 if(self::$instance == NULL) {

                    self::$instance = new Configuration();
                 }

             return self::$instance;
          } 

          public function string2ascii( $str ) {

                 $ascii = NULL;

                 $n = strlen( $str );

                 for($i = 0; $i < $n; $i++) {

                     $ascii .= '&#' . ord( $str[ $i ] ) . ';';
                 }
 
              return($ascii);
          } 
    } 

     
?>