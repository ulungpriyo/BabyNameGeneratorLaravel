	@extends('layout.main')

	@section('content')

	@if(Session::has('post_updated'))
    <div class="alert alert-success" role="alert">
        {{Session::get('post_updated')}}
    </div>
    @endif

    <form action="{{route('post.update')}}" method="POST">
        
        
        @csrf

        
        <h1>Edit Data</h1>

        <input type="hidden" name="id" value="{{$post->id}}" />
        <fieldset id="UserDataFields">
            <legend align="center">Silahkan Mengedit Data Anda</legend>

            <div class="control-group">
                <label for="">Nama Anda : </label>
                <input type="text" name="nama_andaTambah" id="nama_andaTambah" value="{{$post->nama_anda}}">
            </div>

            <div class="control-group">
                <label for="">Asal Nama : </label>
                <input type="text" name="asal_namaTambah" id="asal_namaTambah" value="{{$post->asal_nama}}">
            </div>

            <div class="control-group">
                <label for="">Personality : </label>
                <input type="text" name="personalityTambah" id="personalityTambah" value="{{$post->personality}}">
            </div>

            <div class="control-group">
                <label for="">Jenis Kelamin : </label>
                <input type="text" name="jenis_kelaminTambah" id="jenis_kelaminTambah" value="{{$post->jenis_kelamin}}">
            </div>

            <div class="control-group">
                <label for="">Arti Nama : </label>
                <input type="text" name="arti_namaTambah" id="arti_namaTambah" value="{{$post->arti_nama}}">
            </div>

        </fieldset>

        <fieldset id="FormAction">
            <legend>Selesai mengisikan form?</legend>

            <input type="reset" value="Reset Data">
            <button class="btn btn-success">Update Data</button>
            
        </fieldset>

        <a href="/posts" class="btn btn-success" align="center">Cek Data</a>

    </form>
	@endsection