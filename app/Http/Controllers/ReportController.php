<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    public function index()
    {
        $data = laporan::all();
        $jumlahLaporanMasuk = count($data); 
        $jumlahLaporanSelesai = laporan::where('status', 'selesai')->count();
        return view('user.report.index', ['title' => 'none'], 
        [
            'data' => $data,
            'jumlahLaporanMasuk' => $jumlahLaporanMasuk,
            'jumlahLaporanSelesai' => $jumlahLaporanSelesai, 
        ]);
    }

    public function countreport()
    {
        $data = laporan::all();
        $jumlahLaporanMasuk = count($data); 
        $jumlahLaporanSelesai = laporan::where('status', 'selesai')->count();
        return view('user.stats', ['title' => 'stats'], 
        [
            'data' => $data,
            'jumlahLaporanMasuk' => $jumlahLaporanMasuk,
            'jumlahLaporanSelesai' => $jumlahLaporanSelesai, 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.home', ['title' => 'home']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = 'uploads';
    
        // Check if a file is uploaded
        if ($request->hasFile('bukti')) {
            $file = $request->file('bukti');
            // Validate file type (PDF)
            $allowedTypes = ['pdf'];
            $fileExtension = strtolower($file->getClientOriginalExtension());
            
            if (!in_array($fileExtension, $allowedTypes)) {
                // File type is not allowed, handle accordingly (e.g., show an error message)
                return redirect()->back()->with('error', 'File bukti harus berformat PDF.');
            }
    
            // Validate file size (50 MB)
            $maxFileSize = 50 * 1024 * 1024; // 50 MB in bytes
            
            if ($file->getSize() > $maxFileSize) {
                // File size exceeds the limit, handle accordingly (e.g., show an error message)
                return redirect()->back()->with('error', 'Ukuran file bukti tidak boleh melebihi 50 MB.');
            }
    
            // Move the file to the specified path
            $fileName = $file->getClientOriginalName();
            $file->move($path, $fileName);
            $buktiPath = $path . '/' . $fileName;
        } else {
            // Jika tidak ada file yang diunggah, atur $buktiPath menjadi null atau sesuai kebutuhan
            $buktiPath = null;
        }
    
        // Continue with the rest of your logic (e.g., saving to the database)
    
        // Return a response or redirect as needed
    

        Laporan::create([
            'judul' => $request->judul,
            'pelapor' => $request->pelapor,
            'terlapor' => $request->terlapor,
            'tanggal' => $request->tanggal,
            'tempat' => $request->tempat,
            'isi' => $request->isi,
            'bukti' => $buktiPath, // Gunakan $buktiPath yang sudah diatur
            'user_id' => auth()->user()->id,
        ]);
    
        return redirect()->route('home')->with('success', 'Laporan berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        $data = laporan::where('id', $id)->first();
        return view('user.report.edit', ['title' => 'none'], ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        $path = 'uploads';

        // Check if a file is uploaded
        if ($request->hasFile('bukti')) { 
            $file = $request->file('bukti'); 

            // Validate file type (PDF)
            $allowedTypes = ['pdf'];
            $fileExtension = strtolower($file->getClientOriginalExtension());

            if (!in_array($fileExtension, $allowedTypes)) {
                // File type is not allowed, handle accordingly (e.g., show an error message)
                return redirect()->back()->with('error', 'File bukti harus berformat PDF.');
            }

            // Validate file size (50 MB)
            $maxFileSize = 50 * 1024 * 1024; // 50 MB in bytes

            if ($file->getSize() > $maxFileSize) {
                // File size exceeds the limit, handle accordingly (e.g., show an error message)
                return redirect()->back()->with('error', 'Ukuran file bukti tidak boleh melebihi 50 MB.');
            }

            // Move the file to the specified path
            $fileName = $file->getClientOriginalName();
            $file->move($path, $fileName);
            $buktiPath = $path . '/' . $fileName;
            } else {
                // Jika tidak ada file yang diunggah, atur $buktiPath menjadi null atau sesuai kebutuhan
                $buktiPath = null;
            }

            $data = [
                'judul' => $request->judul,
                'pelapor' => $request->pelapor,
                'terlapor' => $request->terlapor,
                'tanggal' => $request->tanggal,
                'tempat' => $request->tempat,
                'isi' => $request->isi,
            ];

            // Hanya atur 'bukti' jika file diunggah 
            if ($buktiPath !== null) {
                $data['bukti'] = $buktiPath; // 
            }

            laporan::where('id', $id)->update($data);

            return redirect()->route('report');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        laporan::where('id', $id)->delete();
        return redirect()->route('laporans.index');
    }
}
