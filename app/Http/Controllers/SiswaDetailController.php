<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Penulis;
use App\Models\Category;
use App\Models\Penerbit;

class SiswaDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        return view('siswa.buku_show', [
            'buku' => Buku::where('slug', $slug)->firstOrFail(),
        ]);
    }

 
}