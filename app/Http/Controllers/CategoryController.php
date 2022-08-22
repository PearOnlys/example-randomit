<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){
        return view('category/list',[
        'categories' => Category::orderBY('name','asc')->get()
        ]);
    }
    
    public function show($id){
        if(Auth::check()){
            $user_id = auth()->user()->id;
        }else{
            $user_id = [];
        }
        return view('store/list',[
        'stores' => Store::where('category_id','=',$id)->orderBY('name','asc')->get(),
        'user_id' => $user_id
        ]);
    }

    public function create($id = null){
        return view('category/newcategory');
    }

    public function store(){
        $attribute = request()->validate([
        'name' => 'required|max:255|unique:categories,name'
    ]);
        Category::create($attribute);
        return redirect('/store');
    }
}
