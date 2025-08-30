<?php

namespace App;

// recupera o diretório da aplicação
defined("APPLICATION_PATH") || define("APPLICATION_PATH", realpath(__DIR__));

// carrega o composer
require(APPLICATION_PATH . "/vendor/autoload.php");

// inicia o GTK
\Gtk::init();

// inicia o app
$app = \FabulaGTK\Bootstrap::instance();

// inicia a janela principal
$app->run("\\App\\Views\\mainWindow");

// var_dump(\FabulaGTK\FabulaGTK::version());

// inicia o loop da aplicação
\Gtk::main();