<?php

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;
    
    //Constans
    
    define('LOG_FILE', 'aplicacion.log');    
    define('LOG_PATH', __DIR__ . '/');
    
    $log = new Logger("ErrorHandler");
    $log->pushHandler(new StreamHandler(LOG_PATH . LOG_FILE, Logger::WARNING));


