<?php

namespace App\Http\Controllers;
use App\User;
use App\Product;
use Illuminate\Http\Request;
use Auth;

class CartController extends Controller
{
    public function __construct() {
        $this->middleware("auth");
    }

    public function index()
    {
        $cart = session()->get("cart");
        if ($cart && count($cart)) {
            $cartDetails = [];
            $total = 0;
            foreach ($cart as $product) {
                $productDetails = Product::where("id", '=', $product['product'])->get();
                $cartPro = [];
                $cartPro["product"] = $productDetails[0];
                if ($cartPro["product"]->product_discount != 0) {
                    $cartPro["product"]->product_price = ($cartPro["product"]->product_price) - (($cartPro["product"]->product_price) * ($cartPro["product"]->product_discount));
                }
                $cartPro["qty"] = $product["qty"];
                $cartDetails[] = $cartPro;
                $total += $cartPro["product"]->product_price * $product["qty"];
            }
            return view('public.cart', compact('cartDetails', 'total'));
        } 
        else {
            return back()->with('msg', 'cart os empty.');
        }
    }
    public function addToCart(Request $req)
    {
        if (!$req->session()->has("cart")) {
            $req->session()->put("cart", [["product" => $req->id, "qty" => $req->qty]]);
        } else {
            $cart = $req->session()->get("cart");
            foreach ($cart as $key => $item) {
                if ($item["product"] == $req->id) {
                    $cart[$key]["qty"] += $req->qty;
                    $req->session()->put("cart", $cart);
                    return back()->with('success', 'product was update to cart.');
                }
            }
            $cart[] = ["product" => $req->id, "qty" => $req->qty];
            $req->session()->put("cart", $cart);
        }

        return back()->with('success', 'product was added to cart.');
    }
    public function delete($id)
    {
        $cart = session()->get("cart");
        $cartNew = [];
        foreach ($cart as $item) {
            if ($item["product"] != $id) {
                $cartNew[] = $item;
            }
        }
        session()->put("cart", $cartNew);
        return back();
    }
    public function update(Request $request)
    {
        $cart = session()->get("cart");
        foreach ($cart as $key => $item) {
            $id = $cart[$key]['product'];
            $cart[$key]['qty'] = $request->$id;
            $request->session()->put("cart", $cart);

        }
        return back()->with('success', 'Cart was update successfully.');

    }
    // =============================
    public function Checkout()
    {
        $cart = session()->get("cart");
        $cartDetails = [];
        $total = 0;
        foreach ($cart as $product) {
            $productDetails = Product::select('product_name', 'product_price', 'product_discount')
                ->where("id", '=', $product['product'])->get();
            $cartPro = [];
            $cartPro["product"] = $productDetails[0];
            $cartPro["product"]->price = ($cartPro["product"]->product_price) - (($cartPro["product"]->product_price) * ($cartPro["product"]->product_discount));

            $cartPro["qty"] = $product["qty"];
            $cartDetails[] = $cartPro;
            $total += $cartPro["product"]->product_price * $product["qty"];
        }
//         function Get_DataById($table='',$id='',$data=array())
// {
//     return DB::table($table)->where('id', $id)->first();
// }
        // ========
        // dd( Auth::user()->id);
        // if(session('loginUser') == null) {
        //     return redirect('/login');
        // }
        // $id = session('loginUser')['id'];
        $id = Auth::user()->id;

        // Auth::user()->name
        $users = User::where('id', '=', $id)->get();
        $user = $users[0];

        return view('public.checkout', compact('cartDetails', 'total', 'user'));

    }
}
