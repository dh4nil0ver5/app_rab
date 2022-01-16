<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rab;

class RabController extends Controller
{
    //
    public function data_rab(){ 
        return Rab::data_rab();
    }
}
