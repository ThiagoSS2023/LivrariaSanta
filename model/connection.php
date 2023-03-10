<?php
    function getConnection (){
        $dsn = 'mysql:host=localhost;dbname=livraria;charset=utf8';

        try{
            $pdo = new PDO($dsn, 'root', '');

            return $pdo;
        }catch(PDOException $e){
            return 'Erro: ' .$e->getMessagem();

        }
    }