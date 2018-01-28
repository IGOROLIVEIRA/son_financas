<?php

require __DIR__ . '/vendor/autoload.php';

$db = include __DIR__ . '/config/db.php';
list(
     'driver' => $adapter,
     'host' => $host,
     'database' => $name,
     'username' => $user,
     'password' => $pass,
     'charset'  => $charset,
     'collation'=> $collation
) = $db['development'];
return[
    'paths' =>[ //local que gera as migrations
       'migrations' => [
           __DIR__ . '/db/migrations'
       ],
        'seeds' => [
            __DIR__ . '/db/seeds'
        ]
    ],
    'environments' =>[ //configuracao do banco de dados
        'default_migration_table' => 'migrations', //difine tabela para gravar quais migracoes rodou
        'dafault_database' => 'development',
        'development' => [
            'adapter' => $adapter,
            'host' => $host,
            'name' => $name,
            'user' => $user,
            'pass' => $pass,
            'charset' => $charset,
            'collation' => $collation
        ]
    ]

];