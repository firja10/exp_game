<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Nominal;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    //
    
    public function adminHome()
    {
        # code...

        return view('admin/home');

    }


    public function Landing()
    {
        # code...
    
        $kategoris = Kategori::all();
        return view('home',compact('kategoris'));
        

    }



    public function LandingHome()
    {
        # code...
    
        $kategoris = Kategori::all();
        return view('home',compact('kategoris'));
        

    }

    public function Order($id,Kategori $kategori )
    {
        # code...

        // $nominals = new Nominal;
        $kategori = Kategori::FindOrfail($id);
        $data = DB::table('nominals')->where('kategori_id',$id)->get();
        return view('order.order',compact('kategori','data'));

    }


    public function ListInvoice()
    {
        # code...

        $orders = Order::all()->slice(0,3);
        

        return view('order.invoice',compact('orders'));

    }







    // public function Invoice($invoice_code)
    // {
    //     # code...

    //     $orders = Order::findOrFail($invoice_code);
    //     return view('order.invoice_id',compact('orders'));

    // }







    public function Invoice($id)
    {
        # code...

        $orders = Order::findOrFail($id);
        return view('order.invoice_id',compact('orders'));

    }

















    public function PostOrder(Request $request)
    {
        # code...
        Order::create($request->all());
        $orderscount = DB::table('orders')->count();
        $ordersid = DB::table('orders')->where('id',$orderscount);
        return redirect('/invoice/list')->with('success-pesan','Anda Telah Melakukan Pemesanan, Silakan Lakukan Pembayaran');
    }








}
