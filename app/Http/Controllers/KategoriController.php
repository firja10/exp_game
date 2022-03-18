<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\CommonMark\Node\Inline\Image;
use Symfony\Component\Console\Input\Input;


class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategoris = Kategori::all();
        return view('admin.kategori.kategori', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.kategori.kategori');



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
        // Kategori::create($request->all());



        $kategoris = new Kategori();

        
        if($request->hasFile('photo_kategori'))
        {

            $file = $request->photo_kategori;
            $namafile = $file->getClientOriginalName();
            $file->move('assets/img/mobile_games', $namafile);
            $gambar = $namafile;

            // $kategoris['photo_kategori'] = request()->file('photo_kategori')->store('assets/img/mobile_games');

            // $filename = $request['photo_kategori']->getClientOriginalName();


           
            // $request["photo_kategori"]->storeAs('Kategori', $filename, 'public'); 

            
        }






        $kategoris['nama_kategori'] = $request->nama_kategori;
        $kategoris['photo_kategori'] = $gambar;
        $kategoris['slug'] = $request->slug;
        $kategoris->save();


        return redirect('/admin/kategori')->with('successfull','Data Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Kategori $kategori)
    {
        //
        $kategoris = Kategori::findOrFail($id);
        return view('admin.kategori.edit_kategori',compact('kategoris'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori, $id)
    {
        //
        $kategoris = Kategori::Findorfail($id);
        $kategoris->delete();
        return redirect('/admin/kategori')->with('delete','Data Succesfully Deleted');
    }
}
