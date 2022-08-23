<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;

class ReviewController extends Controller
{
    public function index($store_id)
    {
        $store = Store::find($store_id);
        return view('review/list', [
            'reviews' => $store->reviews()->orderBY('id', 'desc')->get(),
            'store' => $store
        ]);
    }

    public function create($store_id)
    {
        return view('review/newreview', [
            'store' => Store::find($store_id)
        ]);
    }

    public function store($store_id)
    {
        $store = Store::find($store_id);
        // $review = new Review();
        // $review->store_id = $store_id;

        $store->reviews()->create([
            'user_id' => auth()->user()->id,
            'rating' => request('rating'),
            'comment' => request('comment')
        ]);
        return redirect('/store/' . $store_id);
    }
}
