<?php

namespace App;

// recupera o diretório da aplicação
defined("APPLICATION_PATH") || define("APPLICATION_PATH", realpath(__DIR__));

// carrega o composer
require(APPLICATION_PATH . "/vendor/autoload.php");

// inicia o GTK
\Gtk::init();

// configura o autoload

// inicia a janela principal
var_dump(\FabulaGTK\FabulaGTK::version());

// inicia o loop da aplicação
\Gtk::main();