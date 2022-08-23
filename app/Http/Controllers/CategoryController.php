<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category/list', [
            'categories' => Category::orderBY('name', 'asc')->get()
        ]);
    }

    public function show($id)
    {
        $user_id = [];
        if (Auth::check()) {
            $user_id = auth()->user()->id;
        }
        return view('store/list', [
            'stores' => Category::find($id)->stores()->orderBY('name', 'asc')->get(),
            'user_id' => $user_id
        ]);
    }

    public function create($id = null)
    {
        return view('category/newcategory');
    }

    public function store(Request $request, $id)
    {
        $category = Category::find($id);
        $request->validate(Category::$rules);
        if (!$category) $category = new Category();
        $category->fill($request->only(['name']));
        $category->save();
        return redirect('/store');
            
    }
}
