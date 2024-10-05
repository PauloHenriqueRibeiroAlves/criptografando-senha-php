<?php
$hash = '$2y$10$Ht1R1R.2CefB3LCT.yrpeOoUl49dLrKPooZg9mMKwoxPYcL7D686O';

$senha = '12345';

if(password_verify($senha, $hash)) {
    echo 'Senha correta';
}else {
    echo 'Senha errada';
}

?>