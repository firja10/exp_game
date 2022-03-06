<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all()->slice(0,3);
        return view('order.invoice',compact('orders'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // Order::create($request->all());

   

        $terakhir = DB::table('orders')->latest('id')->first();
        $array_akhir = (array) $terakhir;
        $id_previous = (int) $array_akhir['id'] ;
        $last_id = $id_previous + 1;



        $orders = new Order() ;
        $orders['id_user'] = $request->id_user;
        $orders['id_server'] = $request->id_server;
        $orders['nominal'] = $request->nominal;
        $orders['promo_code'] = $request->promo_code; 
        $orders['metode_bayar'] = $request->metode_bayar; 
        $orders['status_order'] = $request->status_order;
        $orders['nomor_whatsapp'] = $request->nomor_whatsapp;
        $orders['harga_order'] = $request->harga_order;
        $orders['user_id'] = $request->user_id;
        $orders['produk_id'] = $request->produk_id;
        $orders['bukti_bayar'] = $request->bukti_bayar; 

        $waktu = date("Ymd");

        $orders['invoice_code'] = $waktu . $last_id;
        


        // $orders['invoice_code'] = $request->invoice_code; 
        $orders['nama_game'] = $request->nama_game;
        
        $orders->save();

        $ordersId = $orders['id'];




        // $orderscount = DB::table('orders')->count();
        // $ordersid = DB::table('orders')->where('id',$orderscount);
        return redirect('/daftar_invoice/'.$ordersId)->with('success-pesan','Anda Telah Melakukan Pemesanan, Silakan Lakukan Pembayaran');



    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //




    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order, $id)
    {
        //

        if($request->hasFile('bukti_bayar'))
        {

            $filename = $request['bukti_bayar']->getClientOriginalName();

            if(Order::find($id)->bukti_bayar)
            {

                Storage::delete('/public/storage/Order/'.Order::find($id)->bukti_bayar);

            }

            $request["bukti_bayar"]->storeAs('Order', $filename, 'public'); }

            else {
                $filename=Order::find($id)->bukti_bayar;
            }

        
            $orders = Order::where('id', $id)->update([
                'status_order' => 1,
                'bukti_bayar' =>$filename,
            ]);


            return redirect('/daftar_invoice/'. $id)->with('update_bukti','Bukti Bayar Berhasil Diupdate');




    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
