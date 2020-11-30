<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\namaTambahan;

class namatambahanController extends Controller
{
    function index(){
    	return view('addname');
    }

    function addName(Request $request){
    	$post = new namaTambahan();
    	$post->nama = $request->nama_andaTambah;
    	$post->asal_nama = $request->asal_namaTambah;
    	$post->personality = $request->personalityTambah;
    	$post->jenis_kelamin = $request->jenis_kelaminTambah;
    	$post->arti_nama = $request->arti_namaTambah;
    	$post->save();

    	return back()->with('post_created','Post Has Been Created Successfully !');
    }

    public function getName(){

        $posts = namaTambahan::orderBy('id','DESC')->get();
        return view('posts',compact('posts'));
    }

    public function getPostById($id){
        $post = namaTambahan::where('id',$id)->first();
        return view('single-post',compact('post'));
    }

    public function deletePost($id){
        namaTambahan::where('id',$id)->delete();
        return back()->with('post_deleted','Post Has Been Deleted Successfully!');
    }

    public function editPost($id){
        $post = namaTambahan::find($id);
        return view('edit-post',compact('post'));
    }

    public function updatePost(Request $request){
        $post = namaTambahan::find($request->id);
        $post->nama = $request->nama_andaTambah;
        $post->asal_nama = $request->asal_namaTambah;
        $post->personality = $request->personalityTambah;
        $post->jenis_kelamin = $request->jenis_kelaminTambah;
        $post->arti_nama = $request->arti_namaTambah;
        $post->save();

        return back()->with('post_updated','Data has been Updated Successfully !');
    }
}