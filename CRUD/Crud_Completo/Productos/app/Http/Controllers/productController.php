<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lists;
use App\Http\Requests\ProductRequest;

class productController extends Controller
{
	public function index()
	{
		return view('index');
	}

	public function list()
	{
		$list_product = Lists::all();
		return view('create',compact('list_product'));
	}

	public function edit($id)
	{
		$product = Lists::find($id);
		return view('update', compact('product'));
	}

	public function update(productRequest $request, $id)
	{
		$product = Lists::find($id);
		$product->name = $request->name;
		$product->description = $request->description;
		$product->price = $request->price;
		$product->save();
		return redirect()->route('product.list');
	}

	public function create(productRequest $request)
	{
		Lists::create($request->all());
		return redirect()->route('product.list');
	}

	public function delete(Request $request, $id)
	{
		Lists::destroy($id);
		return redirect()->route('product.list');
	}

	public function detail($id)
	{
		$list_product = Lists::all()->where('id', '==', $id);
		return view('detail',compact('list_product'));
	}
}
