<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;
use DB;
use App\Models\Customers;
use App\Models\Invoice;
use App\Models\Transaksi;

class DashboardController extends Controller
{
    // public function index(){
    //     return view('dashboard.index');
    // }
    public function index()
    {
        $showCustomer = DB::table('customers')->count();
        $showInvoice = DB::table('invoices')->count();
        $showLunas = DB::table('invoices')->pluck('status');
        foreach ($showLunas as $status){
            echo $status;
        }
        $datacustomer = \App\Models\Customer::all();
        $customer1 = [];
        foreach($datacustomer as $dc){
            $customer1[]= $dc->nama;
        }
        //dd($customer1);

        return view('dashboard.index') 
        ->with('showCustomer', $showCustomer)
        ->with('showInvoice', $showInvoice)
        ->with('showLunas', $showLunas)

        ->with('showLunas', $showLunas)
        ->with('customerName',$customer1);
        
    }

}
