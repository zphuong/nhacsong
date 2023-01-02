<?php

namespace App\Http\Controllers;

use App\Models\Tune;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller{

    public function index(){
        $this->response['data'] = '$this->tuneRepo->getAll()';

        return response()->json($this->response);

    }
}
