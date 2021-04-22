<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class ArtikelController extends Controller
{
    public function IndexAdmin()
    {
        return view('admin.web.artikel.index');
    }

    public function Add()
    {
        return view('admin.web.artikel.addedit', ['data' => new Posts]);
    }

    public function Edit($id) {
        return view('master.kawasan.jenis.addedit', ['data' => Posts::findOrFail($id)]);
    }
}
