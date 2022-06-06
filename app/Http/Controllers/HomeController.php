<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('login.check');
    }
 
    public function index(){
        $tasks = Task::all();
        return view("home", compact('tasks'));
    }

    public function create(){
        return view('create');
    }
}
