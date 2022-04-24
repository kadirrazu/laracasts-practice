<?php 

class DbConnection{
    
    public static function make($db, $user, $pass){
        try{
            return new PDO($db, $user, $pass);
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

}