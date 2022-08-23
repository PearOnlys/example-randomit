<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
  public function index()
  {
    $store_id = User::find(auth()->user()->id)->favouriteStores()->get();
    return view('favourite', [
      'stores' => $store_id
    ]);
  }

  public function store($store_id)
  {
    $attributes = [
      'store_id' => $store_id
    ];
    User::find(auth()->user()->id)->favouriteStores()->attach($attributes);
    return back();
  }

  public function destroy($store_id)
  {
    User::find(auth()->user()->id)->favouriteStores()->where('store_id', '=', $store_id)->detach();
    return back();
  }
}
