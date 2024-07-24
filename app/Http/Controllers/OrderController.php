<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\order;

class OrderController extends Controller
{
    //
    public function cust_orders(){
        $orders=customer::find(19)->orders;  //orders is the function in customer model
        foreach($orders as $order){
            echo "Total amount is $order->amount  .the date of order is: $order->order_date";
            echo "<br>";
        }
    }
   public function  cust_data(){
     $customer=order::find(20)->customer;  //customer is the function in order model
          echo" $customer->name" ;               
   }

}
