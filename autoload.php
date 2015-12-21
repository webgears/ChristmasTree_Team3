<?php

function __autoload($class_name) {
    $path = getPath($class_name);
    if (file_exists($path)) {
        require_once $path;
        return true;
    }
    echo "Class not found: " . $path;
    return false;
}

function getPath($class) {
    return './' . str_replace('\\', '/', $class) . '.php';
}