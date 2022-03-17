<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Nominal;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;
use App\Models\User;

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


    public function APIML()
    {
        # code...


// $curl = curl_init();

// curl_setopt_array($curl, [
// 	CURLOPT_URL => "https://true-id-mobile-legends.p.rapidapi.com/razepedia.my.id/api/trueid_ml.php?userid=553832456&zoneid=8215",
// 	CURLOPT_RETURNTRANSFER => true,
// 	CURLOPT_FOLLOWLOCATION => true,
// 	CURLOPT_ENCODING => "",
// 	CURLOPT_MAXREDIRS => 10,
// 	CURLOPT_TIMEOUT => 30,
// 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// 	CURLOPT_CUSTOMREQUEST => "GET",
// 	CURLOPT_HTTPHEADER => [
// 		"x-rapidapi-host: true-id-mobile-legends.p.rapidapi.com",
// 		"x-rapidapi-key: 35b70b45d9msh545615deb616ff6p1e79f8jsnd9aa411b5471"
// 	],
// ]);

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
// 	echo "cURL Error #:" . $err;
// } else {
// 	echo $response;
// }

// $kumpulan = json_decode($response, true);


// return view('coba_api', compact('kumpulan'));


return view('coba_api');



}














    public function Invoice($id)
    {
        # code...

        $orders = Order::findOrFail($id);
        $nominals = DB::table('nominals')->where('id',$orders->nominal)->first();
        return view('order.invoice_id',compact('orders','nominals'));

    }

















    public function PostOrder(Request $request)
    {
        # code...
        Order::create($request->all());
        $orderscount = DB::table('orders')->count();
        $ordersid = DB::table('orders')->where('id',$orderscount);
        return redirect('/invoice/list')->with('success-pesan','Anda Telah Melakukan Pemesanan, Silakan Lakukan Pembayaran');
    }



    // Halaman Admin Lainnya ( Order / Invoice ): 


    public function semuainvoice()
    {
        # code...
        $orders = Order::all();

        $orderdua = Order::all();

       
        

        return view('admin.order.invoice',compact('orders', 'orderdua'));

    }


    public function hapusinvoice($id)
    {
        # code...

        $orders = Order::FindOrfail($id);
        $orders->delete();
        return redirect('/admin/invoice')->with('success-delete-invoice', 'Data Sukses Dihapus');

    }






    public function updatekonfirmasiinvoice($id, Request $request)
    {
        # code...

        $orders = Order::where('id', $id)->update([
            'status_order' =>2,
            'nomor_whatsapp'=>$request['nomor_whatsapp'],
        ]);

        // $this->whatsappNotif($orders['nomor_whatsapp']);

        return redirect('/admin/invoice')->with('success-update-konfirmasi-invoice','Data Invoice Sukses Dikonfirmasi');


    }



    private function whatsappNotif(string $recipient)
    {
        # code...
        $id = getenv("TWILIO_AUTH_SID");
        $token = getenv("TWILIO_AUTH_TOKEN");
        $wa_from = getenv("TWILIO_WHATSAPP_FROM");
        $twilio = new Client($id, $token);

        $body = "Hallo, Test";

        return $twilio->messages->create("whatsapp:$recipient",["from" => "whatsapp:$wa_from", "body" => $body]);
    }





    
    public function updateGagalinvoice($id, Request $request)
    {
        # code...

        $orders = Order::where('id', $id)->update([
            'status_order' =>3,
        ]);

        return redirect('/admin/invoice')->with('success-update-konfirmasi-invoice','Data Invoice Sukses Dikonfirmasi');


    }



    public function pencarianinvoice()
    {
        # code...
        // $orders = Order::all();
        $orders = DB::table('orders')->paginate(1);

        return view('pencarian_invoice', ['orders'=>$orders]);

    }



    // public function searchinvoice(Request $request)
    // {
    //     # code...
    //     $searchinvoice = $request->post('searchinvoice');
    //     // $orders = DB::table('orders')->where('invoice_code','like',"%".$searchinvoice."%")->paginate();
    //     // $orders = DB::table('orders')->where('invoice_code','like',"%".$searchinvoice."%")->get();
    //     $orders = DB::table('orders')->where('invoice_code', $searchinvoice)->get();
        
    //     $orderarray = (array) $orders;
    //     $id = (int) $orderarray['id'];

    //     // $pembelis = Pembeli::findOrFail($id);
    //     return view('order.invoice_id', compact('id'));
    //     // return redirect('/daftar_invoice/'.$id);
    // }








    public function searchinvoice(Request $request)
    {
        # code...
        $searchinvoice = $request->post('searchinvoice');
        // $orders = DB::table('orders')->where('invoice_code','like',"%".$searchinvoice."%")->get();

        if($searchinvoice == '' || $searchinvoice = ' ' )
        {
            $orders = '';
        }

        else {
            $orders = DB::table('orders')->where('invoice_code','like',"%".$searchinvoice."%")->paginate(3);
        }

  


        // $pembelis = Pembeli::findOrFail($id);
        return view('pencarian', ['orders'=>$orders]);
        // return redirect('/daftar_invoice/'.$id);
    }



    public function halaman_daftar_anggota_baru()
    {
        # code...

        return view('anggota_baru');

    }










    public function daftaranggotabaru( Request $request )
    {
        # code...
        User::create($request->all());
        
        return redirect('/daftar_anggota_baru')->with('anggota-baru','Success Add User Data');
        
    
    }




    public function updatestatusanggotabaru( Request $request, $id)
    {
        # code...
       $users = User::where('id', $id)->update([
            'is_admin'=>1,
       ]);

       return redirect('admin/user')->with('new-user','User baru telah ditambahkan');
        
    }
























}
