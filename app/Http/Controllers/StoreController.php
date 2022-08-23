<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Delivery;
use App\Models\Review;
use App\Models\Store;
use App\Models\StoreUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function index()
    {
        $userId = [];
        if (Auth::check()) {
            $userId = auth()->user()->id;
        }
        return view('store/list', [
            'stores' => Store::orderBy('name', 'asc')->with('category', 'delivery', 'favouriteUsers')->get(),
            'user_id' => $userId
        ]);
    }

    public function random()
    {
        if (Store::count() < 3) {
            return back();
        } else {
            $id = random_int(1, Store::count());
            $rating = Store::find($id)->reviews()->avg('rating');
            if ($rating < 2) {
                return redirect("/store/random");
            }
            return redirect('store/' . $id);
        }
    }

    public function show($id)
    {
        $favourites = [];
        if (Auth::check()) {
            $favourites  = User::find(auth()->user()->id)->favouriteStores()->where('store_id', '=', $id)->get();
        }

        $store = Store::find($id);
        return view('store/store', [
            'store' => $store,
            'rating' => $store->reviews()->avg('rating'),
            'favourites' => $favourites
        ]);
    }

    public function create($id = null)
    {
        return view('store/newstore', [
            'categories' => Category::orderBy('name', 'asc')->get(),
            'deliveries' => Delivery::orderBy('name', 'asc')->get()
        ]);
    }

    public function store(Request $request, $id)
    {
        $store = Store::find($id);
        $request->validate(Store::$rules);
        if (!$store) $store = new Store();
        $store->fill($request->only('name','category_id','delivery_id'));
        $store->save();
        return redirect('/store/list');
    }

    public function edit($id)
    {
        return view('store/editstore', [
            'store' => Store::find($id),
            'categories' => Category::orderBy('name', 'asc')->get(),
            'deliveries' => Delivery::orderBy('name', 'asc')->get()
        ]);
    }

    public function update($id)
    {
        $store = Store::find($id);
        $store->name = request()->input('name');
        $store->category_id = request()->input('category_id');
        $store->delivery_id = request()->input('delivery_id');
        $store->update();
        return redirect('store/' . $id);
    }
}
