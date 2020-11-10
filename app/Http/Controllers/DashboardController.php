<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Invoice;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function index(){
    //     return view('dashboard.index');
    // }
    public function index()
    {
        $showCounts = Invoice::where('customer_id',$id)->count();
        return view('dashboard.index',['showCounts'=>$showCounts,'id'=>$id]);
        // $Invoice = invoice::selectRaw('COALESCE(sum(CASE WHEN status = 0 THEN subtotal END), 0) as pending, 
        // COALESCE(count(CASE WHEN status = 3 THEN subtotal END), 0) as shipping,
        // COALESCE(count(CASE WHEN status = 4 THEN subtotal END), 0) as completeOrder')
        // ->where('customer_id', auth()->guard('customer')->user()->id)->get();
        // return view('dashboard.index', compact('orders'));
    }
}
