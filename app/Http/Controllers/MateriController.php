<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil parameter pencarian
        $search = $request->input('search');

        // Jika ada input pencarian, lakukan query
        $materis = [];
        if ($search) {
            $materis = Materi::where('judul', 'like', "%{$search}%")->get();
        }

        // Kembalikan view dengan data pencarian & hasil
        return view('materi.index', compact('materis', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     * (Jika kamu mau menambahkan form untuk buat materi baru)
     */
    public function create()
    {
        return view('materi.create');
    }

    /**
     * Store a newly created resource in storage.
     * (Jika kamu mau menyimpan data materi lewat form)
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'   => 'required|string|max:255',
            'pdf_url' => 'required|url' // minimal cek url
        ]);

        Materi::create([
            'judul' => $request->judul,
            'pdf_url' => $request->pdf_url,
        ]);

        return redirect()->route('materi.index')->with('success', 'Materi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     * Dalam kebutuhanmu, kita langsung redirect ke link PDF saat user menekan judul.
     * Namun kalau tetap ingin method show, isi bisa sebagai fallback.
     */
    public function show(Materi $materi)
    {
        // Jika ingin langsung redirect:
        return redirect($materi->pdf_url);
    }

    /**
     * Show the form for editing the specified resource.
     * (Kalau diinginkan)
     */
    public function edit(Materi $materi)
    {
        return view('materi.edit', compact('materi'));
    }

    /**
     * Update the specified resource in storage.
     * (Kalau diinginkan)
     */
    public function update(Request $request, Materi $materi)
    {
        $request->validate([
            'judul'   => 'required|string|max:255',
            'pdf_url' => 'required|url'
        ]);

        $materi->update([
            'judul' => $request->judul,
            'pdf_url' => $request->pdf_url,
        ]);

        return redirect()->route('materi.index')->with('success', 'Materi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     * (Kalau diinginkan)
     */
    public function destroy(Materi $materi)
    {
        $materi->delete();
        return redirect()->route('materi.index')->with('success', 'Materi berhasil dihapus');
    }
}
