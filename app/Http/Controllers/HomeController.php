<?php

namespace App\Http\Controllers;

use App\Models\Tune;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller{

    public function index(){
        $user = User::find(1);
        $song = $user->song;
        return $user;
//        $tune = Tune::find(1);
//        return $tune;
    }
}
