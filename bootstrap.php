<?php

declare(strict_types=1);

if (php_sapi_name() != 'cli') {
    die("<h1>Only in CLI mode </h1>");
}

use MementoMori\Commands\MementoMoriCommand;
use MementoMori\Services\MementoMoriService;
use MementoMori\Helpers\ContainerDI;

require_once __DIR__ . '/autoload.php';

$container = new ContainerDI();

$container->add('MementoMoriService',fn(): object => new MementoMoriService());
$container->add('MementoMoriCommand', fn(object $container): object => new MementoMoriCommand(
    $container->get('MementoMoriService')
));

$app = $container->get('MementoMoriCommand');
