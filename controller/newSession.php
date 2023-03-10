<?php 
    require '../model/usuario.php';

    $email = $_GET['email'];
    $senha = "senacrs||devweb||".$_GET['senha'];
    $algoritimo = "AES-256-CBC";
    $chave = 'senac@2127';
    $iv = "sCsTGNxSSkabcscs";

    $cript = openssl_encrypt($senha, $algoritimo, $chave, OPENSSL_RAW_DATA, $iv);

    $cript64 = base64_encode($cript);

    $login = get($email, $cript64);
    if($login === true){
        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION['logged'] = true;
        header('location: ../view/read.php');
    }else{
        header('location: ../index.php');
    }