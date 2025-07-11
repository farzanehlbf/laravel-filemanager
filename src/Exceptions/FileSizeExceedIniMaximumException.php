<?php

namespace UniSharp\LaravelFilemanager\Exceptions;

use Exception;

class FileSizeExceedIniMaximumException extends Exception
{
    public function __construct()
    {
        $this->message = trans('laravel-filemanager::lfm.error-file-size', ['max' => ini_get('upload_max_filesize')]);
    }
}
