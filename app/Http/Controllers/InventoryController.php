<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    
    public function customer(){
    	return view('website.pages.customer');
    }
    public function purchase(){
    	return view('website.pages.purchase');
    }
    
    public function inventory(){
    	return view('website.pages.inventory');
    }
    public function supplier(){
    	return view('website.pages.supplier');
    }
    public function sales(){
    	return view('website.pages.sales');
    }
}
