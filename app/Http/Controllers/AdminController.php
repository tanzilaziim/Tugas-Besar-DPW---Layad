<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = laporan::all();
        return view('admin.dashboard', 
        [
            'data' => $data,
        ]);
    }

    public function reportlist(){
        $data = laporan::all();
        return view('admin.report.list', ['title' => 'none'],
        [
            'data' => $data,
        ]);
    }

    public function completelist(){
        $data = laporan::where('status', 'selesai')->get();
        return view('admin.report.complete', ['title' => 'none'],
        [
            'data' => $data,
        ]);
    }

    public function create()
    {
        return view('user.home', ['title' => 'home']);
    }
    /**
     * Store a newly created resource in storage.
     */

    public function send(string $id)
    {
        $data = laporan::where('id', $id)->first();
        return view('admin.report.done', ['title' => 'none'], ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $path = 'uploads';

        $data = [
            'status' => 'selesai',
            'tanggal_selesai' => now(),
            'solusi' => $request->solusi,
            'kesimpulan' => $request->kesimpulan,
        ];

        // Periksa apakah data dengan ID yang diberikan ada
        $laporan = laporan::find($id);

        if (!$laporan) {
            return redirect()->route('list')->with('error', 'Laporan tidak ditemukan.');
        }

        // Update data laporan
        $laporan->update($data);

        return redirect()->route('list')->with('success', 'Penyelesaian laporan berhasil dikirim!');
    }

}
