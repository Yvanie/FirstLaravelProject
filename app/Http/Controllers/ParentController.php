<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class ParentController extends Controller
{
    public function index(){
        return view('default');
    }
    public function home(){
        return view('pages/home');
    }
    public function service(){
        return view('pages/service');
    }
    public function pricing(){
        return view('pages/pricing');
    }
    public function contact(){
        return view('pages/contact');
    }
    public function list(){
        $datas = user::all();
        return view('pages/users', compact('datas'));
    }

}

