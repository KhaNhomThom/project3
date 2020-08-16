<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Kittipop Duangjai",
            "age" => 20,
        ];
        return view("welcome", $data);
    }

}
