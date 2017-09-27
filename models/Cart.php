<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 20.09.2017
 * Time: 20:31
 */

namespace app\models;


use app\assets\AppAsset;
use yii\base\Model;

class Cart extends AppAsset
{
    public function addToCart($product, $qty=1){
      if(isset($_SESSION['cart'][$product->id_product])){
          $_SESSION['cart'][$product->id_product]['qty']+=$qty;
      }
      else{
          $_SESSION['cart'][$product->id_product]=[
              'qty'=>$qty,
              'name'=>$product->title,
              'price'=>$product->price,
              'img'=>$product->picture,
          ];
      }
      $_SESSION['cart.qty']=isset( $_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
      $_SESSION['cart.sum']=isset( $_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty*$product->price : $qty*$product->price;
    }

    public function recalc($id){
        if(!isset($_SESSION['cart'][$id])){
            return false;
        }
        $qtyMinus = $_SESSION['cart'][$id]['qty'];
        $sumMinus=$_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['price'];
        $_SESSION['cart.qty']-= $qtyMinus;
        $_SESSION['cart.sum']-=$sumMinus;
        unset ($_SESSION['cart'][$id]);
    }


}