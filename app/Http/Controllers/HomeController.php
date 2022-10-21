<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

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
    public function index(Request $request){
        $user = Auth::user();
        $categories = Category::where('user_id', $user->id)->get();
        $tasks = Task::where('user_id', $user->id)->get();

        return view('home', [
            'tasks' => $tasks,
            'categories' => $categories
        ]);
    }

     public function changeCategory(Request $request){
        $user = Auth::user();
        $id =  $request->category_id;
     
        if($id !== '' ){
            $tasks2 = Task::where('user_id', $user->id)->where('category_id', $id)->get();
        }else if ($id === false){
            $tasks2 = Task::where('user_id', $user->id)->get();
        }
        
        return view('home', [
            'tasks' => $tasks,
           
        ]);

    }
}

