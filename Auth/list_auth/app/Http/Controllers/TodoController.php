<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ListRequest;
use App\Http\Requests\DeleteRequest;

class TodoController extends Controller
{
	public function index()
	{
		return view('dashboard');
	}

	public function todo_index()
	{
		$user_auth = Auth::id();
		$categories = Todo::where('user_id', $user_auth)->get();
		return view('todo_index',compact('categories'));
	}

	public function todo_update_view($id)
	{
		$product = Todo::find($id);
		return view('todo_update_view', compact('product'));
	}

	public function todo_store(ListRequest $request)
	{
		$user_id = Auth::id();
		Todo::create([
			'title' => $request->input('title'),
			'user_id'=> $user_id
		]);
		return redirect()->route('todo.lista');
	}

	public function todo_update(ListRequest $request, $id)
	{
		$product = Todo::find($id);
		$product->title = $request->title;
		$product->save();
		return redirect()->route('todo.lista');
	}

	public function todo_delete(DeleteRequest $request, $id)
	{
		Todo::destroy($id);
		return redirect()->route('todo.lista');
	}
}
