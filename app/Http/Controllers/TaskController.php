<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(Request $request){
        Task::create($request->all());
        return redirect()->back()->with(['data'=>'Movie added successfully!']);
    }
	
	public function destroy($id)
    {
		$data = Task::find($id);
        $data->delete();
        return redirect()->back()->with(['data'=>'Movie deleted successfully!']);
    }
	
	public function editData($id)
    {
		$data = Task::find($id);
		return view('edit',['data'=>$data]);
    }
	
	public function update(Request $request)
	{
		$data = Task::find($request->id);
		$data->question=$request->question;
		$data->description=$request->description;
		$data->save();
		return redirect('home');
	}
}
