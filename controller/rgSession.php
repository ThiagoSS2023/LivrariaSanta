<?php 
require '../model/usuario.php';
function register(){
    

    $email = $_POST['email'];
    $senha = "senacrs||devweb||".$_POST['senha'];
    $algoritimo = "AES-256-CBC";
    $chave = 'senac@2127';
    $iv = "sCsTGNxSSkabcscs";

    $cript = openssl_encrypt($senha, $algoritimo, $chave, OPENSSL_RAW_DATA, $iv);

    $cript64 = base64_encode($cript);

    $login = create($email, $cript64);

    return $login;
}