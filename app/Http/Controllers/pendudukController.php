<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penduduk;

class pendudukController extends Controller
{

    protected $penduduk;

    public function __construct(){
        $this->penduduk = new penduduk();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response['penduduk'] = $this->penduduk->all();
        return view('pages.index')->with($response);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->penduduk->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['penduduk'] = $this->penduduk->find($id);
        return view('pages.edit')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $penduduk = $this->penduduk->find($id);
        $penduduk->update(array_merge($penduduk->toArray(), $request->toArray()));
        return redirect('penduduk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $penduduk = $this->penduduk->find($id);
        $penduduk->delete();
        return redirect('penduduk');
    }
}
