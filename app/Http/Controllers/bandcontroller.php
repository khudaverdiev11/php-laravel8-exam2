<?php

namespace App\Http\Controllers;

use App\Models\band;
use Illuminate\Http\Request;

class bandcontroller extends Controller
{
    public function getBand(){
        $band=new band();
        $my_band=$band->latest()->first();
        return view("welcome",compact("my_band"));
    }
}
