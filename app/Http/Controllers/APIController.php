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
    public function getAllHorecas(){
        $horecas = Horeca::where('active', 1)->get();
        return response()->json($horecas);
    }

    public function getAllCategories(){
        $categories = Category::all();
        return response()->json($categories);
    }

    public function getAllOffers(){
        $offers = Offer::all();
        return response()->json($offers);
    }

    public function getAllUsers(){
        $users = User::all();
        return response()->json($users);
    }

    public function getAllCities(){
        $cities = City::all();
        return response()->json($cities);
    }

    public function getAllStates(){
        $states = State::all();
        return response()->json($states);
    }


}
