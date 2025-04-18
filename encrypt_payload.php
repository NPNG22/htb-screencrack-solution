<?php

require 'vendor/autoload.php';
use Illuminate\Encryption\Encrypter;

$key = base64_decode('7d7npWEozOBnBdNY9z2fq+Zt7KQgYpO6d7eARF01MuI=');
$encrypter = new Encrypter($key, 'AES-256-CBC');

$payload = file_get_contents('payload.txt');
$encrypted = $encrypter->encrypt($payload);
file_put_contents('encrypted_payload.txt', $encrypted);

echo "good, encrypted Laravel job saved to encrypted_payload.txt\n";
