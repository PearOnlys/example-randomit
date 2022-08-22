<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;

class ReviewController extends Controller
{
    public function index($store_id){
        $reviews = Review::where('store_id','=',$store_id)->get();
        $store = Store::find($store_id)->get();
        return view('review/list',[
            'reviews' => $reviews,
            'store' => $store[0]
        ]);
    }

    public function create($store_id){
        $store = Store::where('id','=',$store_id)->get();
        foreach ($store as $store) {
            $store = $store;
        }
        return view('review/newreview',[
            'store' => $store
        ]);
    }

    public function store($store_id){
        $store = Store::find($store_id);
        $store->reviews()->create([
            'user_id' => auth()->user()->id,
            'store_id' => $store->id,
            'rating' => request('rating'),
            'comment' => request('comment')
        ]);
        return redirect('/store/'.$store_id);
    }
}
