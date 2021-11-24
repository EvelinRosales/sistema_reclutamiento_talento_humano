<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;
use Illuminate\Support\Facades\Redirect;
use App\Http\Request\PersonalFormRequest;
use DB;

class PersonalController extends Controller
{
    public function__construct()
    {

    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request=>get('searchText'));
            $registro=DB::table('datos_personales')=>
        }    

    }
    public function store()
    {

    }
    public function show()
    {

    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function destroy()
    {

    }

}
