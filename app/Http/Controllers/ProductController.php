<?php

namespace App\Http\Controllers;
use App\Cart;
use Illuminate\Http\Request;
use App\Product;
use Auth;
use App\Order;
use Session;
use Stripe\Stripe;
use Stripe\Charge;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('shop.index',['products'=>$products]);
    }
    public function getAddToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $request->session()->put('cart',$cart);
        return redirect('/products');

    }
    public function getReduceByOne($id)
    {
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->reduceByOne($id);
      if (count($cart->items)>0) {
          Session::put('cart',$cart);
      }else{
        Session::forget('cart');
      }
      return redirect()->route('product.shopping-cart');
    }
    public function getRemoveItem($id)
    {
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->removeItem($id);
      if (count($cart->items)>0) {
          Session::put('cart',$cart);
      }else{
        Session::forget('cart');
      }

      return redirect()->route('product.shopping-cart');
    }
    public function getCart()
    {
        if (!Session::has('cart')) {
          return view('shop.shopping-cart',['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart',['products'=>$cart->items,'total'=>$cart->totalPrice]);
    }
    public function getCheckout()
    {
      if (!Session::has('cart')) {
        return view('shop.shopping-cart',['products' => null]);
      }

      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      $total = $cart->totalPrice;
      return view('shop.checkout',['total' => $total]);
    }
    public function postCheckout(Request $request)
    {
      if (!Session::has('cart')) {
        return redirect()->route('product.shopping-cart');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);

      Stripe::setApiKey('sk_test_3QbpbPug7nPfXq6HwOyxrOqB');
      try {
        $charge = Charge::create(array(
          "amount" => $cart->totalPrice * 100,
          "currency" => "usd",
          "source" => $request->input('stripeToken'), // obtained with Stripe.js
          "description" => "Test charge"
        ));
        $order = new Order();
        $order->cart = serialize($cart);
        $order->name = $request->input('name');
        $order->address = $request->input('address');
        $order->payment_id = $charge->id;
        Auth::user()->orders()->save($order);

      } catch (Exception $e) {
          return redirect()->route('checkout')->with('error',$e->getMessage());
      }
      Session::forget('cart');
      return redirect()->route('products.index')->with('success', 'Succesfully purchased products');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product([
          'title' => $request->input('title'),
          'description' => $request->input('description'),
          'price' => $request->input('price'),
        ]);
        $name = str_replace(' ', '', $request->title);
        $image_for_product = $request->file('imagePath');
        $fileName = $name .".". $image_for_product->getClientOriginalExtension();
        \Image::make($image_for_product)->resize(250, 150)->save( public_path('/img/products/' . $fileName) );
        $real_path = '/img/products/' . $fileName;
        $product->imagePath = $real_path;
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
