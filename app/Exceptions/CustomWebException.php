<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Exception;

class CustomWebException extends Exception
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $messages = [
        //
    ];

    public function _construct($errors)
    {
        parent::_construct($errors);

        $args = func_num_args();
    }

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function getMessages()
    {
        return $this->messages;
    }
}
