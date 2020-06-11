<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function addForm()
    {
        return view('contact');
    }

    public function addFormStore (ContactRequest $request)
    {
//        $validation =  $request->validate([
//           'name'=>'required|min:3|max:7',
//        ]);


    }
}
