<?php

namespace Gini;
    
require __DIR__ . '/bootstrap.php';

class Application {

    static function setup() {
        CLI::setup();
    }

    static function main($argv) {           
        // $argv包括了我们的cli标准脚本, 因此需要删除
        array_shift($argv);
        CLI::main($argv);
    }

    static function shutdown() {
        CLI::shutdown();
    }

    static function exception($e) {
        CLI::exception($e);
    }

}
