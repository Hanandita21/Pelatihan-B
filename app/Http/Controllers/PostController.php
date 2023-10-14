<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //read data post
    public function tampil()
    {
        //query get data table post
        $data = Post::orderBy('id', 'ASC')->get();

        return view('post.index', compact('data'));
    }

    //update data post
    public function tambah()
    {
        return view('post.create');
    }

    //create data post
    public function simpan(Request $request)
    {
        //validasi
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        //query simpan
        Post::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('post.tampil')->with('success', 'Berhasil menambahkan data post');
    }

    //delete data post
}
