<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Customer;
use App\Models\Cusdetail;

class CustomerController extends Controller
{
    public function cusView(){
        $customers = Customer::all();
        // echo "<pre>";
        // print_r($customer);
        // echo "</pre>";
        // die;

        $data = compact("customers");
        return view("allCustomerView")->with($data);
    }

    public function cusDelete($id){
        Customer::find($id)->delete();
        return redirect()->back();
    }

    public function oneToOne(){
        $cusdetail = Customer::with('cusdetail')->find(3)->toArray();
        echo "<pre>";
        print_r($cusdetail);
        echo "</pre>";
        // die;

        // $customer = new Customer(['name' => 'ayush', 'age'=> '10', 'email'=> 'ayush@gmail.com']);
        // $customer->save();

        // $cusdetail = new Cusdetail(['mobile'=>'64527', 'address'=>'gazipur']);
        // $customer->cusdetail()->save($cusdetail);


    }

    public function oneToMany(){
        // $order = Customer::with('order')->find(1);
        // $order = Customer::with('order')->get();
        $order = Customer::withSum('order','price')->get(['name','email']);
        echo "<pre>";
        print_r($order->toArray());
        echo "</pre>";
    }
}
