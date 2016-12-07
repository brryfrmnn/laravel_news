<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//gunakan model post
use App\Post;
use App\Comment;

class FrontController extends Controller
{
    /*Fungsi front controller untuk menampilkan halaman depan.
    kita tahu bahwa halaman depan menampilkan banyak data 
    seperti last post, popular post, dan masih banyak lagi.
    supaya alur data lebih baik, kita buat controller khusus */

    public function index()
    {
    	$posts = Post::with('user','category')
    					->orderBy('id','desc')
    					->limit(2)
    					->get();

    	$random_posts = Post::inRandomOrder()->limit(3)->get(); //random post untuk side bar disamping

    	/*$recent_comments = Comment::with('post')
    								->orderBy('id','desc')
    								->limit(3)
    								->get();*/ 
    	//berikan semua data2 ke view front.index
    	return view('front.index',compact('posts','random_posts','recent_comments'));

    }
}
