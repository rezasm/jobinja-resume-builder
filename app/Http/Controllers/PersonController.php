<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function getData(){


        return ['msg' => 'hello vue from laravel'];



    }
}
