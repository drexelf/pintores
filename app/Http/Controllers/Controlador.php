<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
class Controlador extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function validarlogin(Request $request){
        $user = $request->input('user');
        $password = $request->input('password');
        $key = $request->input('key');

        if($user==='Luis' && $password==='1421'){
            $url= 'index';
        }else{
            $url='admin.login';
        }
        return view($url);
    }
    public function edvard(){
        return view('edm');
    }
    public function leo(){
        return view('ldv');
    }
    public function miguel(){
        return view('ma');
    }
    public function pic(){
        return view('pc');
    }
    public function van(){
        return view('vg');
    }
    public function ini(Request $request){
        return view('index');
    }
}
