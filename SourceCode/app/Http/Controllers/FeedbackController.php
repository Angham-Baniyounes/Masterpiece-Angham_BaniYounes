<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Product;
use Illuminate\Http\Request;
use Auth;

class FeedbackController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        $feedbacks = Feedback::with('product')->get();
    }

    public function create()
    {
        //
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'message' => ['required', 'min:10', 'max:500'],
        ]);
        $feedback = new Feedback();
        $feedback->feedback_message = $request->message;
        $product = Product::where('id', $id)->firstOrFail();
        $feedback->product_id = $product->id;
        $user_id = Auth::id();
        $feedback->user_id = $user_id;
        $feedback->feedback_rating = $request->input('star');
        $feedback->product()->associate($product);
        $feedback->save();
        return redirect()->route('product.show', $id)->with('msg', 'Comment Added Successfully');
    }

    public function show(Feedback $feedback)
    {
        //
    }

    public function edit(Feedback $feedback)
    {
        //
    }

    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    public function destroy(Feedback $feedback)
    {
        //
    }
}
