<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Exception;

class CustomThrowException extends Exception
{

    protected $messages = [
        //
    ];

    public function _construct($errors)
    {
        dd($errors);
        // parent::_construct(\GuzzleHttp\json_encode(['test'=>$errors]));

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
