<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(Request $request){
    }

    public function create(Request $request){
        $categories = Category::all();
        return view('tasks/create', [
            'categories' => $categories
        ]);
    }

    public function create_action(Request $request){
        $task = $request->only(['title', 'description', 'category_id', 'due_date' ]);
        $task['user_id'] = 1;
        $dbTask = Task::create($task);
        return redirect('/task/new');
    }

    public function edit($id){
        $task = Task::find($id);
        $categories = Category::all();
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

    

}
