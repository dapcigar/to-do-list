<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::get(); //Display result using descending order
        

        return view('index', ['todos' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,

            [
                'title'=>'required',
                'content'=> 'required',
                'due'=> 'required'


            ]
        
        
         );

         $todo = new Todo();
         $todo->title = $request->input('title');
         $todo->content = $request->input('content');
         $todo->due = $request->input('due');
         $todo->save();
         return redirect('/')->with('success', 'Todo created Successfully!!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $todo = Todo::find($id);

        return view('show')->with('todo',$todo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $todo = Todo::find($id);

        return view('edit')->with('todo',$todo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $todo = Todo::find($id);
        $todo->title = $request->input('title');
         $todo->content = $request->input('content');
         $todo->due = $request->input('due');
         $todo->save();
         return redirect('/')->with('success', 'Todo Edited Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/')->with('success', 'Todo Deleted Successfully!!');
    }
}
