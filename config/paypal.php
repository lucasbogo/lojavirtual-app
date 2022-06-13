<?php


use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use Psr\Log\LogLevel;

return [

    // Chave pública disponibilizada pelo PayPal
    'client_id' => env('PAYPAL_CLIENT_ID') ,

    // Secret_id ou chave privada, também disponibilizada pelo PayPal
    'secret_id' => env('PAYPAL_SECRET_ID') ,

    // Array com as configurações PayPal
    'settings' => [
        
        // Módulo live serve para produção e sandbox serve para testes
        'mode' => 'sandbox',

        // Tempo máximo de resposta em segundos para efetuar compra. Gera exceção caso ocorra timeout
        'http.ConnectionTimeOut' => 30,

        // Gerar log
        'log.LogEnabled' => true,

        // Localização do arquivo log localizado em /storage/logs/paypal.log
        'log.FileName' => storage_path().'logs/paypal.log',

        // Tipo de log armazenado. FINE da mais detalhes em comparação com INFO, WARNING, ERROR
        'log.LogLevel' => 'FINE'

        
    ]
];