<?php

    $senha = "senacrs||devweb||".$_GET['senha'];
    $algoritimo = "AES-256-CBC";
    $chave = 'senac@2127';
    $iv = "sCsTGNxSSkabcscs";

    $cript = openssl_encrypt($senha, $algoritimo, $chave, OPENSSL_RAW_DATA, $iv);

    $cript64 = base64_encode($cript);

    echo $cript64."<br>";

    $decript64 = base64_decode($cript64);

    $decript = openssl_decrypt($decript64, $algoritimo, $chave, OPENSSL_RAW_DATA, $iv);

    echo $decript;