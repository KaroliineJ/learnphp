<?php

class ConsoleLogger implements Logger {
    public function log($message){
        echo "$message\n";
    }
}

class Task {
    public function work(Logger $logger){
        for($i=0;<10;$i++){
            $logger->log($i);
        }
    }
}

interface Logger {
    public function log($message);
}

//-----------------

class NothingLogger {
    public function log($message){

    }
}

class FileLogger {
    public function log($message){
        $file = fopen('log.txt', 'a');
        fwrite($file, "$message\n");
        fclose($file);
    }
}

$logger = new ConsoleLogger();
$task = new Task();
$task->work('hfuejipew');

