<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Review;

class ReviewController extends Controller
{
    public function store(Request $request, $productId){
        $this->validate($request, [
            'star' => 'required|numeric',
            'comment' => 'required|string'
        ]);
        /**
         * $request->all() has all the data submitted via form
         */
        $formInput = $request->all();
        $userId = Auth::user()->id;
        $data = array(
            'rating' => $formInput['star'],
            'review_detail' => $formInput['comment'],
            'user_id' => $userId,
            'product_id' => $productId
        );

        Review::create($data);
        session()->flash('snackbar-message', "Review added!");
        return back();
    }
}
