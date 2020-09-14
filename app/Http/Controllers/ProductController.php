<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
  public function data() {
		$data = Product::all();

		return view('product.data', [
			'productData' => $data
		]);
	}

	public function add() {
		$categoryData = Category::all();

		return view('product.add', [
			'categoryData' => $categoryData
		]);
	}

	public function store(Request $request) {
		$data = new Product;
		$data->name = $request->name;
		$data->stock = $request->stock;
		$data->category_id = $request->category;
		$data->save();

		return redirect()->route('product-data');
	}

	public function edit($id) {
		$categoryData = Category::all();
		$data = Product::findOrFail($id);

		return view('product.edit', [
			'data' => $data,
			'categoryData' => $categoryData
		]);
	}

	public function save(Request $request, $id) {
		$data = Product::findOrFail($id);
		$data->name = $request->name;
		$data->stock = $request->stock;
		$data->category_id = $request->category;
		$data->save();

		return redirect()->route('product-data');
	}
	
	public function delete($id) {
		$data = Product::findOrFail($id);
		$data->delete();

		return redirect()->route('product-data');
	}
}