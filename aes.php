<?php
/* 

FUNCIO PER ENCRIPTAR I DESENCRIPTAR BASADA EN AES 256 CBC
*/

$text = "ENCRIPTAT";
$pass = "";

$method = 'aes-256-cbc';

function encrypt($text, $pass, $method ){
    $key = substr(hash('sha512', $pass, true), 0, 32);
    $ivlen = openssl_cipher_iv_length($method);
    $iv = openssl_random_pseudo_bytes($ivlen);
    return array(base64_encode(openssl_encrypt($text, $method, $key, OPENSSL_RAW_DATA, $iv)),$iv,$key);
}

function decrypt($encrypted, $pass, $method, $key, $iv){
    return openssl_decrypt(base64_decode($encrypted), $method, $key, OPENSSL_RAW_DATA, $iv);
}


$encripted = encrypt($text, $pass, $method);

$decripted = decrypt($encripted[0], $pass, $method,$encripted[2],$encripted[1]);

print($encripted);
print($decripted);
?>
