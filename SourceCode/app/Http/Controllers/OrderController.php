<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Contracts\Session\Session;

class OrderController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $orders = Order::all();
        $ordersTable = [];
        foreach ($orders as $order) {
            $order_product = DB::table("order_product")
                ->where("order_id", $order->id)
                ->get();
            $ordersTable[] = [
                "order" => $order,
                "order_product" => $order_product,
            ];
        }
        return view("dashboard.orders.orders", compact("ordersTable"));
    }

    public function changeStatus($id, $status)
    {
        // dd($id, $status);
        $order = Order::find($id);
        $order->status = $status;
        $order->save();
        return back();
    }

    public function store(Request $request)
    {
        // $user = $request->session()->get('loginUser');

        $user_id = Auth::user()->id;
        
        // dd($request->phoneRequired);
        // if ($request->phoneRequired) {
            //     request()->validate([
        //         'address' => 'required',
        //         'user_mobile' => 'required',
        //         ]);
        //     $user = User::find($user_id);
        //     $user->user_mobile = $request->get('user_mobile');
        //     $user->save();
        // } else {
            //     request()->validate([
        //         'address' => 'required',
        //     ]);
        // }

        // receive cart data
        $cart = $request->session()->get('cart');
        
        // calculate the total price & total quantity
        
        dd('Hi');
        // transform  the array to one dimension array
        $cart_quantity = [];
        $single_product_price = [];
        $totalPrice = 0;
        $totalQty = 0;
        foreach ($cart as $item) {
            $productsPrice = DB::table('products')
            ->select('product_price', 'product_discount')
            ->where('id', '=', $item["product"])
                ->get();
                
                $totalPrice += ($productsPrice[0]->product_price - ($productsPrice[0]->product_price * $productsPrice[0]->product_discount)) * $item["qty"];
            $totalQty += $item["qty"];
        }
        //add to order table order
        $order = new Order;
        $order->user_id = $user_id;
        // calculate the total number of product
        
        $order->total_quantity = $totalQty;
        
        $order->total_price = $totalPrice;
        
        $order->address = $request->address;
        
        $order->save();
        
        $id = DB::getPdo()->lastInsertId();
        
        if (count($cart)) {
            foreach ($cart as $item) {
                DB::table('order_product')->insert(
                    [
                        'product_id' => $item['product'],
                        'order_id' => $id,
                        'quantity' => $item['qty'],
                        ]
                    );
                }
            }

        $request->session()->forget('cart');
        // return redirect('')
    }

    public function create()
    {
        //
    }



    public function show(Order $order)
    {
        //
    }


    public function edit(Order $order)
    {
        //
    }


    public function update(Request $request, Order $order)
    {
        //
    }


    public function destroy(Order $order)
    {
        //
    }
}
