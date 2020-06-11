<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryesController extends Controller
{


    public function index()
    {

    }


    public function documents()
    {
        return view("documents");
    }


    public function operations()
    {
        return view("operations");
    }

    public function reports()
    {
        return view("reports");
    }
}
