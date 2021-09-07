<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use App\Base\Constants\ErrorStatus;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (CustomThrowException $e, $request) {
            
            // $error = \GuzzleHttp\json_decode($e->getMessage());

            $responseStatusCode = 500;

            return response()->json([ 'error_code'=>$e->getMessage(),'message'=> $e->getMessage(),'success'=>false],$responseStatusCode);
        });

        $this->renderable(function (CustomWebException $e, $request) {
            
            $error = $e->getMessage();

            return back()->withInput($request->all())->with(['error' => $error]);
        });


        // $this->renderable(function (InvalidOrderException $e, $request) {
        //     return response()->view('errors.invalid-order', [], 500);
        // });



    }

}