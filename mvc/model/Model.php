<?php

class Model {

    protected function connect(string $host = HOST_DATABASE, string $user = USER_DATABASE, string $password = PASSWORD_DATABASE, string $nameDatabase = NAME_DATABASE): PDO {
        try {
            $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $nameDatabase . ';charset=utf8',
                $user,
                $password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }       

        return $bdd;
    }
}