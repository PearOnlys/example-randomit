<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeliveryController extends Controller
{   
    public function show($id){
        if(Auth::check()){
            $user_id = auth()->user()->id;
        }else{
            $user_id = [];
        }
        return view('store/list',[
        'stores' => Store::where('delivery_id','=',$id)->orderBY('name','asc')->get(),
        'user_id' => $user_id
        ]);
    }

    public function create($id = null){
        return view('delivery/newdelivery');
    }

    public function store(){
        $attribute = request()->validate([
        'name' => 'required|max:255|unique:deliveries,name'
    ]);
        Delivery::create($attribute);
        return redirect('/store');
    }
}
