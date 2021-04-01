<?php 
namespace App\Services;
use App\Models\Cart;
use Session;
class CartService {


    /**
     * @integer $id 
     * return collection $data
     */
    static function reduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        if(isset($cart->items[$id]['qty'])){
          
            if(isset($cart->items[$id]))
            $cart->items[$id]['qty']--;
            $cart->items[$id]['price'] -= $cart->items[$id]['item']['price'];
            $cart->totalQty--;
            $cart->totalPrice -= $cart->items[$id]['item']['price'];
    
            if($cart->items[$id]['qty'] <= 0)
            {
                unset($cart->items[$id]);
            }
        }else{
          return abort(404);
        }
        
    }


}