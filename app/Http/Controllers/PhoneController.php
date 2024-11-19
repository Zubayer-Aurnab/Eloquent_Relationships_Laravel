<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller

{
    public function index()
    {
        return Phone::with('user')->get();
    }
}
