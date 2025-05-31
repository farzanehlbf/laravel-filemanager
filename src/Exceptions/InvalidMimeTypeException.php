<?php

namespace UniSharp\LaravelFilemanager\Exceptions;

use Exception;

class InvalidMimeTypeException extends Exception
{
    public function __construct($mimetype)
    {
        $this->message = trans('laravel-filemanager::lfm.error-mime') . $mimetype;
    }
}
