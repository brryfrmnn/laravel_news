<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests; //untuk menerima request dari form/inputan
use App\Post; //jangan lupa gunakan dulu model Post nya supaya controllernya tahu
use Auth;

class PostController extends Controller
{
    public function create()
    {
    	return view('post.create'); //hanya memberikan tampilan pada view input-post.blade.php
    }

    public function store(Request $request)
    {
    	$title   = $request->title; //simpan ke variable title biar mudah
    	$article = $request->article;

        //path folder
        $destination = public_path('images'); //buat dulu folder images di folder public
        if ($request->hasFile('photo')) {
            //cek dulu apakah jpg/png ?);

            if ($request->photo->extension() == 'png' or $request->photo->extension() == 'jpg') {
                $nama_file = $request->photo->getClientOriginalName(); //simpan nama file di variable
                //lakukan pemindahan gambar sesuai destinasi 
                $move = $request->photo->move($destination,$nama_file);
                if (!$move) {
                    return 'gagal upload gambar';
                }
                // dd($destination);
            } else {
                return "file bukan png";
            }

        } else {
            $nama_file = 'default.png'; //nama file = default.png jika tidak upload gambar
        }

    	$post = new Post; //deklarasikan objek dari model POST ke variable
    	$post->title = $title; //masukan isi dari var $title ke field title
    	$post->article = $article; //masukan article dari var $title ke field article
        $post->image  = $nama_file; //yang disimpan ke database nama fileny saja bukan gambarnya
    	$post->category_id  =1;
        $post->user_id = Auth::user()->id;
        $post->save(); //simpan ke database

    	return 'berhasil';
    }
}
