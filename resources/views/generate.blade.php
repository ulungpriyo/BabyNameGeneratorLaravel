

    @extends('layout.main')

    @section('content')

    <form action="generate" method="post">
        
        @csrf

        <h1>Form Inputan Nama</h1>

        <fieldset id="UserDataFields">
            <legend align="center">Silahkan Mengisi Nama Anda</legend>

            <div class="control-group">
                <label for="">Nama Anda: </label>
                <input type="text" name="nama_andaGenerate" id="nama_anda" value="" placeholder="Nama Keluarga Jika Ada">
            </div>

            <div class="control-group" >
                
                <label for="">Asal Nama : </label>
                <select name="operatorAsal" value="" required="">
                <option value="">-----Pilih Asal Nama-----</option>
                <option value="asalBa">Bayi Arab</option>
                <option value="asalBi">Bayi Indonesia</option>
                <option value="asalBe">Bayi Eropa</option>
                <option value="asalBs">Bayi Sansekerta</option>
                </select>
            </div>

            <div class="control-group">
                
                <label for="">Personality : </label>
                <select name="operatorPersonality" value="" required="">
                <option value="">-----Pilih Personality-----</option>
                <option value="Energetic">Energetic</option>
                <option value="Creative">Creative</option>
                <option value="Romantic">Romantic</option>
                <option value="Supportive">Supportive</option>
                </select>
            </div>

            <div class="control-group">
                
                <label for="">Jenis Kelamin : </label>
                <select name="operatorjenisKelamin" value="" required="">
                <option value="">-----Jenis Kelamin-----</option>
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
                </select>
            </div>

            <div class="control-group">
                
                <label for="">Kata : </label>
                <select name="operatorjumlahKata" value="" required="">
                <option value="">-----Jumlah Kata-----</option>
                <option value="1">Satu Kata</option>
                <option value="2">Dua Kata</option>
                </select>
            </div>

        </fieldset>

        <fieldset id="FormAction">
            <legend>Selesai mengisikan form?</legend>

            <a href="generate" class="btn btn-reset mr-4" role="button">Reset</a>
            <button type="submit" name="submit" class="btn btn-copy ml-4">Proses</buttonn>
           
            
        </fieldset>

    </form>

<div class="container pt-4">
    <div>
        <div class="text-center">
            <label for="">Nama : </label>
    <input type="text" name="nama_andaGenerate" id="nama_hasil" value="{{ $result ?? '' }}">
        <button class="btn btn-copy ml-4" onclick="namaFunction()"> Salin Nama </button>
        </div>
    

    <script type="text/javascript">
        function namaFunction() {
            var copyText = document.getElementById("nama_hasil");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            alert("Nama telah disalin");
        }
    </script>
        <div class="text-center pt-4">
            <label for="">Arti Nama : </label>
    <input type="text" name="nama_andaGenerate" id="arti_hasil" value="{{ $arti_nama  ?? '' }}">

    <button class="btn btn-copy ml-4" onclick="artiFunction()"> Salin Arti Nama </button>
        </div>
    

    <script type="text/javascript">
        function artiFunction() {
            var copyText = document.getElementById("arti_hasil");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            alert("Arti Nama telah disalin");
        }
    </script>

        </div>
    </div>
</div>

<br><br><br><br><br><br>

    <footer>
        @include('layout.footer')
    </footer>
    
    @endsection