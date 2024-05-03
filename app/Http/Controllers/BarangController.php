<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Satuan;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Barang';
        // ELOQUENT
        $barang = barang::with('satuan')->get();

        return view('barang.index', [
            'pageTitle' => $pageTitle,
            'barangs' => $barang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Insert Barang';

        // ELOQUENT
        $satuans = satuan::all();
        return view('barang.create', compact('pageTitle', 'satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Attribute dengan angka',
            'unique' => 'Attribute yang sama sudah tersimpan',
            'exists' => 'Attribute tidak ada pada database'
        ];
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|unique:App\Models\Barang,kode_barang',
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
            'satuan_barang' => 'required|exists:App\Models\Satuan,kode_satuan'
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $barang = new Barang;
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->satuan_barang = $request->satuan_barang;
        $barang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Detail Barang';
        // ELOQUENT
        $barang = barang::find($id);
        return view('barang.show', compact('pageTitle', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';
        // ELOQUENT
        $satuans = satuan::all();
        $barang = barang::find($id);
        return view(
            'barang.edit',
            compact(
                'pageTitle',
                'satuans',
                'barang'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Attribute dengan angka',
            'unique' => 'Attribute yang sama sudah tersimpan',
            'exists' => 'Attribute tidak ada pada database'
        ];
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|unique:App\Models\Barang,kode_barang',
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
            'satuan_barang' => 'required|exists:App\Models\Satuan,kode_satuan'
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $barang = barang::find($id);
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->satuan_barang = $request->satuan_barang;
        $barang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // ELOQUENT
        barang::find($id)->delete();
        return redirect()->route('barang.index');
    }
}
