<?php

namespace App\Http\Controllers;


use App\Models\Todo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TaskController extends Controller
{   
    public function listTask(Request $request) {

        $data = Todo::where('user_id', auth()->user()->id);

        if($request->get('search')){
            $data = $data->where('task', 'LIKE', '%'.$request->get('search').'%')
            ->orWhere('tags', 'LIKE', '%'.$request->get('search').'%');            
        }

        if($request->get('due_date')){
            $date = Carbon::parse($request->get('due_date'));
            $data = $data->whereDate('due_date' ,$date);
        }
        
        if($request->get('status')){
            $data = $data->where('status', 'LIKE', '%'.$request->get('status').'%');
        }
        

        $data = $data->get();

        
        return view('task', ['tasks'=> $data , 'request'=>$request]);
    }

    public function addTaskForm(){
        return view('task-add');
    } 

    public function create(Request $request) {
        $validate = $request->validate([
            'user_id' => 'required|exists:users,id',
            'task' => 'required|string|max:255',
            'description' => 'max:255',
            'status' => 'required|string|max:255',
            'due_date' => 'string|max:255',
            'tags' => 'max:255'
        ]);

        

        Todo::create($validate);
        return redirect('/task');
    }


    public function editTaskForm($id){
        return view('task-edit', ['task' => Todo::where('id', $id)->get()]);
    } 

    public function update($id, Request $request) {
        $validate = $request->validate([
            'task' => 'max:255',
            'description' => 'max:255',
            'status' => 'max:255',
            'due_date' => 'max:255',
            'tags' => 'max:255'
        ]);

        $validate['user_id'] = auth()->user()->id;

        Todo::where('id', $id)
            ->update($validate);

        return redirect('/task')->with('success', 'Task berhasil di update!');
    }
    

    public function destroy($id){
        Todo::destroy($id);

        return redirect('/task')->with('success', 'Task berhasil di hapus!');
    }
}
