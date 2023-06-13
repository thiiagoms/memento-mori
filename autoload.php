<?php

declare(strict_types=1);

spl_autoload_register(function (string $class): void {

    $class = str_replace('MementoMori\\', 'src/', $class);
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

    if (file_exists($class)) {
        require $class;
        return;
    }

    throw new \Exception("File {$class} not found");
});
