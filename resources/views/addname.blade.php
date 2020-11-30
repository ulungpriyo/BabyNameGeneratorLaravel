	@extends('layout.main')

	@section('content')

	@if(Session::has('post_created'))
    <div class="alert alert-success" role="alert">
        {{Session::get('post_created')}}
    </div>
    @endif

    <form action="{{route('post.create')}}" method="POST">
        
        
        @csrf

        <h1>Form Inputan Nama</h1>

        <fieldset id="UserDataFields">
            <legend align="center">Silahkan Mengisi Nama Anda</legend>

            <div class="control-group">
                <label for="">Nama Anda : </label>
                <input type="text" name="nama_andaTambah" id="nama_andaTambah" value="">
            </div>

            <div class="control-group">
                <label for="">Asal Nama : </label>
                <input type="text" name="asal_namaTambah" id="asal_namaTambah" value="">
            </div>

            <div class="control-group">
                <label for="">Personality : </label>
                <input type="text" name="personalityTambah" id="personalityTambah" value="">
            </div>

            <div class="control-group">
                <label for="">Jenis Kelamin : </label>
                <input type="text" name="jenis_kelaminTambah" id="jenis_kelaminTambah" value="">
            </div>

            <div class="control-group">
                <label for="">Arti Nama : </label>
                <input type="text" name="arti_namaTambah" id="arti_namaTambah" value="">
            </div>

        </fieldset>

        <fieldset id="FormAction">
            <legend>Selesai mengisikan form?</legend>

            <input type="reset" value="Reset Data">
            <input type="submit" name="submit" value="Proses">
            
        </fieldset>

        <a href="/posts" class="btn btn-success" align="center">Cek Data</a>

    </form>

	@endsection