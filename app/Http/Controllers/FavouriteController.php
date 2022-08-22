<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    public function index(){
      $store_id = User::find(auth()->user()->id)->favouriteStores()->get();
      return view('favourite',[
        'stores' => $store_id
      ]);
    }

    public function store($store_id){
        $attributes = [
          'user_id' => auth()->user()->id,
          'store_id' => $store_id
        ];
        Store::find($store_id)->favouriteUsers()->attach([$attributes]);
        return back();
    }

    public function destroy($store_id){
      Store::find($store_id)->favouriteUsers()->where('user_id','=',auth()->user()->id)->detach();
      return back();
    }
}
