<?php
    require_once 'vendor/autoload.php'; // You have to require the library from your Composer vendor folder

    MercadoPago\SDK::setAccessToken("TEST-8433751467175803-042613-31439f93c806b3cef856ed5dd87fd28f-7087528"); // Either Production or SandBox AccessToken

// Cria um objeto com os dados do cartão
$card = new MercadoPago\Card();
$card->card_number = "5031433215406351";
$card->expiration_month = 11;
$card->expiration_year = 2025;
$card->security_code = "123";
$card->cardholder = array(
    "name" => "APRO",
    "identification" => array(
        "type" => "CPF",
        "number" => "12345678909"
    )
);

// Salva o cartão na API do Mercado Pago e obtém o token correspondente
$card->save();
$card_token = $card->id;

// Imprime o token do cartão
echo "Token do Cartão: " . $card_token;


?>
