<?php

namespace App\Http\Controllers;

use App\Models\LogRes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogResController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function regis(){
        return view('register.index');

        function store(Request $request){
            $validateData = $request->validate([
                'nama' => 'required',
                'nohp' => 'required',
                'email' => 'required',
                'pass' => 'required',
            ]);

            $validateData['pass'] = bcrypt($validateData['pass']);

            LogRes::create($validateData);
            return redirect('login')-with('succes','Registrasi Berhasil! , Silahkan Login');
        }
    }

    public function login(){

        return view('login.index');

        function authanticate(Request $request){
            $login = $request->validate([
                        'email' => 'required',
                        'pass' => 'required',
            ]);

            if (Auth::attempt($login)) {
                $request->session()->regenerate();

                return redirect()->intended('');
            }
            return back('')->with('LoginEror','Login Gagal!, Silahkan coba lagi');
        }
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
     * @param  \App\Models\LogRes  $logRes
     * @return \Illuminate\Http\Response
     */
    public function show(LogRes $logRes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LogRes  $logRes
     * @return \Illuminate\Http\Response
     */
    public function edit(LogRes $logRes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LogRes  $logRes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LogRes $logRes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LogRes  $logRes
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogRes $logRes)
    {
        //
    }
}
