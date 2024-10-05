<?php
$senha = '12345';

$hash = password_hash($senha, PASSWORD_DEFAULT);//ou PASSWORD_BCRYPT

echo "Senha original: " .$senha."</br>";
echo "hash: ".$hash;


?>