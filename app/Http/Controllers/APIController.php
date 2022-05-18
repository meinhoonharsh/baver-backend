<?php

namespace App\Http\Controllers;
use App\Models\Horeca;
use App\Models\Category;
use App\Models\Offer;
use App\Models\User;
use App\Models\City;
use App\Models\State;

use Illuminate\Http\Request;

class APIController extends Controller
{
    //
    public function getAllHorecas()
    {
        $horecas = Horeca::all();
        return response()->json($horecas);
    }


}
