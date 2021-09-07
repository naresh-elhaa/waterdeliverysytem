<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Exceptions\CustomWebException;
use App\Exceptions\CustomThrowException;


if(!function_exists('appName()')){

    function appName()
    {
        return "Water Delivery System";
    }
}


if(!function_exists('pagination()')){

    function pagination()
    {
        return 20;
    }
}


function exception_handling(Request $request)
{
    if( $request->is('api/*')){
        //write your logic for api call
        throw new CustomThrowException('test',(int)500);
    }else{
        //write your logic for web call
        throw new CustomWebException('test');
    }

    if( Request::wantsJson()){
    }else{
    }

}

