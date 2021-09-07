<?php

namespace App\Http\Controllers\Api;
use App\Models\Role;
use App\Models\Permission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
        {
            $credentials = [
                'email' => $request->email,
               'password' => $request->password
            ];
            if (auth()->attempt($credentials)) {
                $token = auth()->user()->createToken('TutsForWeb')->accessToken;
                return response()->json([
                "message" => "User Login successfully",
                'user' => auth()->user(),
                'access_token' => $token,
                ], 200);
            } else {
                return response()->json(['error' => 'UnAuthorised'], 401);
            }
        }

        public function register(Request $request)
            {
                $this->validate($request, [
        
                    'name' => 'required|min:3',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|min:6',
                ]);
              $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password)
                ]);
                $token = $user->createToken('TutsForWeb')->accessToken;
                return response()->json(['token' => $token], 200);
            }    


    public function index()
    {
        //
        $data = User::get('name');
        return response()->json([
            "message" => "Retrived Data successfully",
            "data" => $data,
          ], 200);

    }



    public function details(Request $request)
    {
        exception_handling($request);
        // $superAdminRole = Role::where('name', "Super Admin")->first();
        
        $data =  auth()->user();

        return response()->json([
            "message" => "Current User Login successfully",
            'data' => $data,
        ], 200);
    }
    public function roles()
    {  
       $data = Role::get();

        return response()->json([
            "message" => "Retrive Roles successfully",
            'data' => $data,
        ], 200);
    }

    public function permissions()
    {  
       $data = Permission::get();

        return response()->json([
            "message" => "Retrive Permissions successfully",
            'data' => $data,
        ], 200);
    }

    public function rolesandpermissions()
    {  
       $data = Role::with('permission')->get();

        return response()->json([
            "message" => "Retrive Permissions successfully",
            'data' => $data,
        ], 200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
