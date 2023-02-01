<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaxesController extends Controller
{
    public function create(){
        return view('pages.taxes');
    }
}
