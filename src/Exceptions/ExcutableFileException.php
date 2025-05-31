<?php

namespace UniSharp\LaravelFilemanager\Exceptions;

use Exception;

class ExcutableFileException extends Exception
{
    public function __construct()
    {
        $this->message = 'Invalid file detected';
    }
}
