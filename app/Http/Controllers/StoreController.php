<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use App\supplier;
use App\inventory;
use App\sale;
use App\purchase;

class StoreController extends Controller
{
     public function customer(){
    	return view('store.pages.customer');
    }

    		// add
    public function cus_add(Request $req){
    	   $validatedData = $req->validate([
        'secrial_number' => 'required|max:50',
        'cus_name' => 'required',
        
    ]);
    	$secrial_number =$req->secrial_number;
    	$cus_name =$req->cus_name;


    	$obj = new customer();

    	$obj->secrial_number = $secrial_number;
    	$obj->cus_name = $cus_name;
    	if($obj -> save()){
    	// echo 'inserted successfully';
    		return redirect('store/customer')->with('inserted','inserted successfully');
    }


    }

    		// purchase



    public function sales(){
    	return view('store.pages.sales');
    }


    	public function sale_add(Request $req){
    //     $validatedData = $req->validate([
    //     'secrial_number' => 'required|max:50',
    //     'cus_name' => 'required',
        
    // ]);
        $customer =$req->customer;
        $invoice_no =$req->invoice_no;
        $product_code =$req->product_code;
        $product_description =$req->product_description;
        $quantity =$req->quantity;
        $rate =$req->rate;
        $amount =$req->amount;
        $payment =$req->payment;


        $obj = new sale();

        $obj->customer = $customer;
        $obj->invoice_no = $invoice_no;
        $obj->product_code = $product_code;
        $obj->product_description = $product_description;
        $obj->quantity = $quantity;
        $obj->rate = $rate;
        $obj->amount = $amount;
        $obj->payment = $payment;
        if($obj -> save()){
        // echo 'inserted successfully';
            return redirect('store/sales')->with('inserted','inserted successfully');
    }


    }








    public function inventory(){
    	return view('store.pages.inventory');
    }

    	public function inventory_add(Request $req){
    // 	   $validatedData = $req->validate([
    //     'secrial_number' => 'required|max:50',
    //     'cus_name' => 'required',
        
    // ]);
    	$Product_code =$req->Product_code;
    	$product_description =$req->product_description;
    	$opening_quantity =$req->opening_quantity;


    	$obj = new inventory();

    	$obj->Product_code = $Product_code;
    	$obj->product_description = $product_description;
    	$obj->opening_quantity = $opening_quantity;
    	if($obj -> save()){
    	// echo 'inserted successfully';
    		return redirect('store/inventory')->with('inserted','inserted successfully');
    }


    }



    public function supplier(){
    	return view('store.pages.supplier');
    }


    	public function sup_add(Request $req){
    	   $validatedData = $req->validate([
        'secrial_number' => 'required|max:50',
        'sup_name' => 'required',
        
    ]);
    	$secrial_number =$req->secrial_number;
    	$sup_name =$req->sup_name;


    	$obj = new supplier();

    	$obj->secrial_number = $secrial_number;
    	$obj->sup_name = $sup_name;
    	if($obj -> save()){
    	// echo 'inserted successfully';
    		return redirect('store/supplier')->with('inserted','inserted successfully');
    }


    }






    public function purchase(){
    	return view('store.pages.purchase');
    }

            // purchase add
    public function purchase_add(Request $req){
    //     $validatedData = $req->validate([
    //     'secrial_number' => 'required|max:50',
    //     'cus_name' => 'required',
        
    // ]);
        $suplier =$req->suplier;
        $invoice_no =$req->invoice_no;
        $product_code =$req->product_code;
        $product_description =$req->product_description;
        $quantity =$req->quantity;
        $rate =$req->rate;
        $amount =$req->amount;
        $payment =$req->payment;


        $obj = new purchase();

        $obj->supplier = $suplier;
        $obj->invoice_no = $invoice_no;
        $obj->product_code = $product_code;
        $obj->product_description = $product_description;
        $obj->quantity = $quantity;
        $obj->rate = $rate;
        $obj->amount = $amount;
        $obj->payment = $payment;
        if($obj -> save()){
        // echo 'inserted successfully';
            return redirect('store/purchase')->with('inserted','inserted successfully');
    }


    }
}
