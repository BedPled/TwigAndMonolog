<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class InfoLogger
{
    private string $path;
    private string $name;
    private string $ip;
    private Logger $logger;



    public function __construct(string $name) {
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->name = $name;
        $this->path = join(DIRECTORY_SEPARATOR, [dirname(__DIR__), "logs", "logs.log"]);
        $this->logger = new Logger($this->name);
        $this->logger->pushHandler(new StreamHandler($this->path, Logger::INFO));
    }

    public function activate() {
        $this->logger->info('User '. $this->ip .  ' visited ' . $this->name . ' Date: ' . date('H:i:s d/m/Y')) ;
    }

    public function createLogs() {
        echo '<pre>';

        if (is_file($this->path)) {
            foreach (array_reverse(file($this->path)) as $log) {
                echo $log;
            }
        } else {
            $view = new Viewer();
            $view->show('pepega.twig');
        }

        echo '<pre>';
        echo '<br>';
    }
}