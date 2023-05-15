<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $properties = Property::OrderBy('created_at', 'desc')->limit(4)->get();
        return view("home", [
            'properties' => $properties
        ]);
    }
}
