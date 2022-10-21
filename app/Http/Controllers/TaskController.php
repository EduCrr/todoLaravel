<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
    }

    public function create(Request $request){
        $user = Auth::user();
        $categories = Category::where('user_id', $user->id)->get();
        return view('tasks/create', [
            'categories' => $categories
        ]);
    }

    public function create_action(Request $request){
        
        $request->validate([
            'title' => ['required', 'string'],
            'due_date' => ['required'],
            'category_id' => ['required', 'string'],
            'description' => ['required', 'string']
        ]);

        $user = Auth::user();
        $task = $request->only(['title', 'description', 'category_id', 'due_date' ]);
        $task['user_id'] = $user->id;
        $dbTask = Task::create($task);
        return redirect('/task/new');
    }

    public function edit($id){
        $task = Task::find($id);
        $user = Auth::user();
        $categories = Category::where('user_id', $user->id)->get();
        if($task){
            return view('/tasks/edit', [
                'task' => $task,
                'categories' => $categories
            ]);
        }

        return redirect('/');
       
    }

    public function edit_action(Request $request, $id){
        $task = Task::find($id);

        $request->validate([
            'title' => ['required', 'string'],
            'due_date' => ['required'],
            'category_id' => ['required', 'string'],
            'description' => ['required', 'string']
        ]);

        
        $requestData = $request->only(['title', 'is_done', 'due_date', 'category_id', 'description']);

        if($request->input('is_done') === null){
            $requestData['is_done'] = false;
        }
        
        if($task){
            $task->update($requestData);
            $task->save();
            return redirect('/task/edit/'.$id);
        }
    }

    public function edit_action_check(Request $request, $id){
        $task = Task::find($id);
        $requestData = $request->only(['is_done',]);

        if($request->input('is_done') === null){
            $requestData['is_done'] = false;
        }
        
        if($task){
            $task->update($requestData);
            $task->save();
            return redirect('/');
        }
    }

    public function delete(Request $request, $id){
        $task = Task::find($id);
        if($task){
            $task->delete();
            return redirect('/');
        }
         return redirect('/');
    }

     public function changeDone(Request $request, $id){

        if($id){
            $task = Task::find($id);

            if($task->is_done === 1){
                $task->is_done = 0;
            }else if ($task->is_done === 0){
                $task->is_done = 1;
            }

            $task->save();
        }
        
        return redirect('/');

    }

}
