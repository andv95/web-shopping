<?php
namespace App;


use http\Env\Request;

class Cart
{
    public $products = array();
    public $property = array();
    public $totalPrice = 0;
    public $totalQuanty = 0;

    public function __construct($cart)
    {
        if ($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuanty = $cart->totalQuanty;
            $this->property = $cart->property;
        }
    }


    public function AddCart($product, $id, $request)
    {
        $newProduct = [
            'product_id' => $product->id,
            'quanty' => $request['quantity'],
            'price' => $product->price,
            'productInfo' => $product,
            'property' => array([
                'color_id' => $request['color'],
                'size_id' => $request['size']
            ]),
        ];

        if (!$this->products) {
            if (array_key_exists($id, $this->products)) {
                $this->products = array($newProduct);
            }
        }

        $this->products[] = $newProduct;
    }


////

////
////    public function AddCart($product, $id, $request)
////    {
//////        dd($request);
////        $newProduct = [
////            'quanty' => $request['quantity'],
////            'price' => $product->price,
////            'productInfo' => $product,
////            'property' => array([
////                'color' => $request['color'],
////                'size' => $request['size-detail']
////            ]),
////        ];
//////        dd($newProduct);
////        $plusQuanty = $request['quantity'];
////
////        if ($this->products) {
////            if (array_key_exists($id, $this->products)) {
////                $newProduct = $this->products[$id];
////            }
////        }
////
////        $newProduct['price'] = $newProduct['quanty'] * $product->price;
////        $this->products[$id] = $newProduct;
////        $this->totalPrice += $product->price;
////        $this->totalQuanty++;
////    }
////
////    public function DeleteItemCart($id)
////    {
////        $this->totalQuanty -= $this->products[$id]['quanty'];
////        $this->totalPrice -= $this->products[$id]['price'];
////        unset($this->products[$id]);
////    }
////
////    public function UpdateCart($id, $quanty)
////    {
////        $this->totalQuanty -= $this->products[$id]['quanty'];
////        $this->totalPrice -= $this->products[$id]['price'];
////
////        $this->products[$id]['quanty'] = $quanty;
////        $this->products[$id]['price'] = $quanty * $this->products[$id]['productInfo']->price;
////
////        $this->totalPrice += $this->products[$id]['price'];
////        $this->totalQuanty += $this->products[$id]['quanty'];
////    }
////
////    public function SaveListItemCart(Request $request, $id, $quanty)
////    {
////
////    }


}

?>
