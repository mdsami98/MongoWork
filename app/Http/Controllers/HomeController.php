<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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

    public function showUser(){
        $users = User::all();

        return view('users', [
            'users' =>$users
        ]);

    }


    public function showUserAjax(){
        return view('users-ajax');
    }


    public function ajaxRequest(){
        return datatables()->of(User::latest()->get())
                ->addColumn('action', function ($data){
                    return '
                <button  id="is_active" class=""><i class="glyphicon glyphicon-star"></i> 
                </button>
                <button  id="edit" class="edit btn btn-sm btn-info blue">
                            <i class="fa fa-pencil-square-o"></i> Edit
                </button>
                ';
                })->make(true);
    }


}
