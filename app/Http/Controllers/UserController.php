<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $requiredData = [
            'name' => $request->field_nome,
            'email' => $request->field_email,
            'password' => Hash::make($request->field_senha)
        ];

        if($request->field_senha == $request->field_senha_nova){
            User::create($requiredData);
            return response()->json([
                'status' => 200
            ]);
        }else{
            return response()->json([
                'status' => "Error: as senhas não coincidem."
            ]);
        }

    }

    public function login(Request $request)
    {

        if (Auth::attempt(['email' => $request->emailLogin, 'password' => $request->passLogin])){
            return response()->json([
                'status' => 200,
                'dadosEnviados' => $request->emailLogin .' | ' . $request->passLogin
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'dadosEnviados' => $request->emailLogin .' | ' . $request->passLogin
            ]);
        }
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
