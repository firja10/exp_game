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

    public function Order($id,Kategori $orderskategori )
    {
        # code...

        $nominals = new Nominal;
        $orderskategori = Kategori::FindOrfail($id);
        $datanomin = $nominals->where('kategori_id',$nominals)->get();
        return view('order.order',compact('orderskategori','datanomin'));

    }








}
