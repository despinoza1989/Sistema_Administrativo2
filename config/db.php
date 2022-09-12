<?php

class Database{
    public static function connect(){
        $db = mysqli_connect('localhost', 'root', '', 'sistema_administrativo');
        $db->set_charset('utf8');
        return $db;
    }
}

