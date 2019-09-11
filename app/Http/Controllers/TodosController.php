<?php

namespace App\Http\Controllers;
use App\Todos;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){

        return view('todos.index')->with('todos', Todos::all());
    }
    public function show(Todos $todo){

        return view('todos.show')->with('todos',$todo);
    }
    public function create(){
        return view('todos.create');
    }
    public function store(){
        $this->validate(request(), [
            'name' => 'required|min:6:max:12',
            'description' => 'required'
        ]);

        $data = request()->all();
        $todos = new Todos();
        $todos->name = $data['name'];
        $todos->description = $data['description'];
        $todos->completed = false;

        $todos->save();
        session()->flash('success','Todo Created SuccessFully');
        return redirect('/todos');

    }
    public function edit(Todos $todo)
    {
      return view('todos.edit')->with('todo', $todo);
    }
    public function update(Todos $todo)
    {
      $this->validate(request(), [
        'name' => 'required|min:6|max:12',
        'description' => 'required'
      ]);
      $data = request()->all();
      $todo->name = $data['name'];
      $todo->description = $data['description'];
      $todo->save();
      session()->flash('success','Todo Update SuccessFully');
      return redirect('/todos');
    }
    public function destroy(Todos $todo){
        $todo->delete();
        session()->flash('success','Todo Deleted SuccessFully');
        return redirect('/todos');
    }
    public function complete(Todos $todo)
    {
        $todo->completed = True;
        $todo->save();
        session()->flash('success','Todo Completed Successfully');

        return redirect('/todos');
    }
}
