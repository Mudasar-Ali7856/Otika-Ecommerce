<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(){
        return view('pages.orders');
    }

    public function index(){
        return view('pages.orderreturn');
    }
}
