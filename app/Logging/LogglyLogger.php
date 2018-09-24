<?php
/**
 * Created by PhpStorm.
 * User: TungDT
 * Date: 8/17/2018
 * Time: 10:12 AM
 */

namespace App\Logging;

use Monolog\Handler\LogglyHandler;
use Monolog\Logger;

class LogglyLogger
{
    public function __invoke($config) {
        $logger = new Logger(env('APP_NAME'));
        $logger->pushHandler(new LogglyHandler(env('LOGGLY_KEY') . '/tag/' . config('services.loggly.tag'), Logger::INFO ));
        return $logger;
    }
}
