<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;
use DB;

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

        return view('dashboard.index') 
        ->with('showCustomer', $showCustomer)
        ->with('showInvoice', $showInvoice)
        ->with('showLunas', $showLunas);
        
    }

}
