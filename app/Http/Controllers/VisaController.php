<?php

namespace App\Http\Controllers;

use App\Models\Visa;
use Illuminate\Http\Request;

class VisaController extends Controller
{
    public function index()
    {

        $visa = Visa::all();
        return view('visas.index', ['visas' => $visa]);

    }
}
