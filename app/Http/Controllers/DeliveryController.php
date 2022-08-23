<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeliveryController extends Controller
{
    public function show($id)
    {
        $user_id = [];
        if (Auth::check()) {
            $user_id = auth()->user()->id;
        }
        return view('store/list', [
            'stores' => Delivery::find($id)->stores()->orderBY('name', 'asc')->get(),
            'user_id' => $user_id
        ]);
    }

    public function create($id = null)
    {
        return view('delivery/newdelivery');
    }

    public function store(Request $request, $id)
    {
        $delivery = Delivery::find($id);
        $request->validate(Delivery::$rules);
        if (!$delivery) $delivery = new Delivery();
        $delivery->fill($request->only(['name']));
        $delivery->save();
        return redirect('/store');
    }
}
