<?php

namespace App\Http\Controllers;

use App\Models\Nominal;
use Illuminate\Http\Request;
use App\Models\Kategori;

class NominalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $nominal = Nominal::all();
        $kategoris = Kategori::all();
        // $kategoris = DB::table('nominals')->where('id',)
        return view('admin.nominal.nominal',compact('nominal','kategoris'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.nominal.nominal');

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

        $nominal = Nominal::create($request->all());
        return redirect('/admin/nominal');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nominal  $nominal
     * @return \Illuminate\Http\Response
     */
    public function show(Nominal $nominal, $id)
    {
        //
    
        $nominal = Nominal::findorFail($id);
        return view('admin.nominal.nominal_id', compact('nominal'));

    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nominal  $nominal
     * @return \Illuminate\Http\Response
     */
    public function edit(Nominal $nominal, $id)
    {
        //

        $nominal = Nominal::findorFail($id);
        return view('admin.nominal.nominal_id', compact('nominal'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nominal  $nominal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nominal $nominal, $id)
    {
        //

        $nominal = Nominal::where('id', $id)->update([

            'nominal_kategori'=>$request['nominal_kategori'],
            'harga_nominal'=>$request['harga_nominal'],
            'kategori_id'=>$request['kategori_id'],

            
        ]);

        return redirect('/admin/nominal')->with('success-update-nominal','Data Nominal Telah Terupdate');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nominal  $nominal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nominal $nominal, $id)
    {
        //

        $nominal = Nominal::findOrFail($id);
        $nominal->delete();
        return redirect('/admin/nominal')->with('success-delete-nominal','Data Nominal Telah Dihapus');


    }
}
