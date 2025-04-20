<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
    {
        return view('index');
    }
    public function login($id = null)
    {
        if(isset($id) && $id == 123){

            return view('auth.login', ['id'=>$id]);
        }else{
            return view('index');
        }
    }
    public function atualizacao()
    {
        return view('auth.atualizacao');
    }
    public function insercao()
    {
        return view('auth.insercao');
    }
    public function logado()
    {
        return view('auth.logado');
    }
}
