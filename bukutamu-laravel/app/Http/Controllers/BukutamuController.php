<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Bukutamu;
use Illuminate\Http\Request;

class BukutamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukutamu = DB::table('bukutamu')->paginate(15);

        return view('bukutamu.index', compact('bukutamu'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bukutamu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'komentar' => 'required'
        ]);

        Bukutamu::create($request->all());

        return redirect()->route('bukutamu.index')
            ->with('success', 'Sukses menyimpan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function show(Bukutamu $bukutamu)
    {
        return view('bukutamu.show', compact('bukutamu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function edit(Bukutamu $bukutamu)
    {
        return view('bukutamu.edit', compact('bukutamu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bukutamu $bukutamu)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'komentar' => 'required'
        ]);
        $bukutamu->update($request->all());

        return redirect()->route('bukutamu.index')
            ->with('success', 'Sukses update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bukutamu $bukutamu)
    {
        $bukutamu->delete();

        return redirect()->route('bukutamu.index')
            ->with('success', 'Sukses hapus data');
    }
}
