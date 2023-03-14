<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
use App\Models\train;

class MainController extends Controller
{
//    public function index() {
//         $trains = train::all();
//         return view('welcome', [
//             'trains' => $trains
//         ]);
//     }

        public function index() {
            $trains = train::where('data', '>=', date('Y-m-d'))->get();
            return view('welcome', [
                'trains' => $trains
            ]);
        }
}


