<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use Auth; //Auth adalah authentication yang mengharuskan login terlebih dahulu
use Session; //Session digunakan untuk membuat flash message

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::with('user')->paginate(6); //angka 6 berarti tiap 1 halaman hanya 6 data
        $nama = "testing";
        return view('category.index',compact('category','nama'));
        //compact digunakan untuk mengirimkaan data dari $category ke view 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $name   = $request->name; //simpan ke variable title biar mudah
        $user_id = Auth::user()->id; //gunakan Auth agar mendapatkan user_id yang sedang login

        $category = new Category; //deklarasikan objek dari model Category ke variable
        $category->name = $name; //masukan isi dari var $name ke field name
        $category->user_id = $user_id; //masukan user_id dari var $user_id ke field user_id
        if ($category->save()) { //jika berhasil di simpan
            //membuat flash message
            Session::flash("flash_notification", [
                "level"=>"success",
                "message"=>"Berhasil menyimpan $category->name"
            ]);
            //akhir flash message
        } else {
            //membuat flash message
            Session::flash("flash_notification", [
                "level"=>"danger",
                "message"=>"Gagal menyimpan $category->name"
            ]);
            //akhir flash message
        }
        // redirect ke route category.create
        return redirect()->route('category.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //memanggil data yang memiliki id tertentu
        //gunakan method find untuk mencari primary key dari data yang dicari
        $category = Category::find($id);
        return view('category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //memanggil data yang memiliki id tertentu
        //gunakan method find untuk mencari primary key dari data yang dicari
        $category = Category::find($id);
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name   = $request->name; //simpan ke variable title biar mudah
        $user_id = Auth::user()->id; //gunakan Auth agar mendapatkan user_id yang sedang login

        $category = Category::find($id); //deklarasikan objek dari model Category ke variable
        $category->name = $name; //masukan isi dari var $name ke field name
        $category->user_id = $user_id; //masukan user_id dari var $user_id ke field user_id
        if ($category->save()) { //jika berhasil di simpan
            //membuat flash message
            Session::flash("flash_notification", [
                "level"=>"success",
                "message"=>"Berhasil mengubah $category->name"
            ]);
            //akhir flash message
        } else {
            //membuat flash message
            Session::flash("flash_notification", [
                "level"=>"danger",
                "message"=>"Gagal mengubah $category->name"
            ]);
            //akhir flash message
        }
        // redirect ke route category.create
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category->delete()) { //jika berhasil di hapus
            //membuat flash message
            Session::flash("flash_notification", [
                "level"=>"success",
                "message"=>"Berhasil Menghapus $category->name"
            ]);
            //akhir flash message
        } else {
            //membuat flash message
            Session::flash("flash_notification", [
                "level"=>"danger",
                "message"=>"Gagal Menghapus $category->name"
            ]);
            //akhir flash message
        }
        // redirect ke route category.create
        return redirect()->route('category.index');
    }
}
