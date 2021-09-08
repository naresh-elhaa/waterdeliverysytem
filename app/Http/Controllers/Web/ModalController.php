<?php

namespace App\Http\Controllers\Web;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VehicleModel;
use App\Http\Task\VehicleModelTask;
use App\Http\Requests\StoreAssetRequest;

class ModalController extends Controller
{
    public $task;

    public function __construct()
    {
        $this->task = new VehicleModelTask();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request ,VehicleModel $vehiclemodels)
    {

        
        //  exception_handling($request);

         $vehiclemodels  = $this->task->index($request);

         return view('models.index',compact('vehiclemodels','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return view('models.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();

        $vehiclemodels = VehicleModel::create($input);

        return redirect()->route('modal_index',compact('request'))->with(['success'=>'registered_successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleModel $vehiclemodels,Request $request)
    {
        //

        return view('models.edit',compact('vehiclemodels','request'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,VehicleModel $vehiclemodels)
    {

        $vehiclemodels->update($request->all());
      
        return redirect()->route('modal_index',compact('vehiclemodels','request'))->with(['success'=>'updated_successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //


    }
}
