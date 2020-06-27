<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdmController extends Controller
{

public function __construct() {

    }

   public function main()
    {

    return view('layouts.index');

    }

   public function inst()
    {


    return view('phpinfo');

    }

    public function hello()
    {

        dd("HOLA MUNDO");
    }

    
    public function toread()
    {

        dd("THIS IS PAL-QUE-READ");
    }

    
}