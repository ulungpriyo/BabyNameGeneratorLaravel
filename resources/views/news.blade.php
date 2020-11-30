
      @extends('layout.main')

      @section('content')

        <div class="container" style="padding-top: 150px;"  >
            <h2 class="judul-tentang" align="left">Tumbuh Kembang Anak </h2>
        </div>
        <div class="content-row">
            <div class="left-col">
                <img class="gambar" src="img/bayi1.jpg">
             </div>

             <div class="right-col">
                <h1><a href="/artikel">Tumbuh Kembang Anak</a></h1>
                <h2>Fungsi dan Tahapan Pemberian Teether Bayi yang Tepat</h2>
                <p>Masa pakai teether bayi adalah 1 tahun setelah itu sebaiknya dibuang dan tidak diberikan pada bayi lain.</p>
             </div>
        </div>

       <section>
        <div class="content-row">

        <table  align="center" cellpadding="15" >
            <tr >
                <td align="center">
                    <img class="gambar1" src="img/anak-kidal.jpeg">
                </td>
                <td align="center">
                    <img class="gambar1" src="img/berat-badan.jpeg">
                </td>
                <td align="center">
                    <img class="gambar1" src="img/anak-kidal.jpeg">
                </td>            
            </tr>
            <tr align="center">
                <td>
                    <p style="font-size: 20px">Tumbuh Kembang Anak</p>
                </td>
                <td>
                  <p style="font-size: 20px">  Tumbuh Kembang Anak</p>
                </td>
                <td>
                   <p style="font-size: 20px"> Tumbuh Kembang Anak</p>
                </td>
            </tr>
             <tr class="baca2" align="center">
                <td >
                  <h3 align="left">Penyebab Anak Kidal dan Fakta Menarik Seputar Kecerdasannya</h3>
                </td>
                <td>
                   <h3 align="left"> Cek Berat Badan Ideal Bayi Sesuai Tahapan Usianya di Sini </h3>
                </td>
                <td>
                   <h3 align="left"> Ukuran Lingkar Kepala Bayi Laki-laki dan Perempuan Normal</h3>
                </td>
            </tr>
             <tr align="center">
                <td>
                  <p style="font-size: 20px"> Sejumlah penelitian menemukan kecenderungan anak kidal lebih mahir dalam</p>
                </td>
                <td>
                   <p style="font-size: 20px">Berat badan bayi akan terus mengalami perubahan seiring tumbuh kembangnya setiap</p>
                </td>
                <td>
                    <p style="font-size: 20px">Biasanya pemeriksaan lingkar kepala bayi diikuti oleh cek berat badan dan tinggi badan</p>
                </td>
            </tr>
        </table>
          </div>
           
       </section>

       <div class="container" style="padding-top: 150px;"  >
            <h2 class="judul-tentang" align="left">Pola Asuh Anak </h2>
        </div>
        <div class="content-row">
            <div class="left-col">
                <img class="gambar" src="img/apa-itu.jpeg">
             </div>

             <div class="right-col">
                <h1><a href="/artikel2">Pola Asuh Anak</a></h1>
                <h2>Tantrum Anak - Penyebab, Gejala, dan Cara Mengatasi</h2>
                <p>Tantrum adalah kondisi anak meledakan emosi atau mengamuk dengan cara menangis, menjerit, sampai melempar barang</p>
             </div>
        </div>

       <section>
        <div class="content-row">

        <table  align="center" cellpadding="15" border-spacing="10">
            <tr >
                <td align="center">
                    <img class="gambar1" src="img/anak-kidal.jpeg">
                </td>
                <td align="center">
                    <img class="gambar1" src="img/berat-badan.jpeg">
                </td>
                <td align="center">
                    <img class="gambar1" src="img/anak-kidal.jpeg">
                </td>            
            </tr>
            <tr align="center">
                <td>
                    <p style="font-size: 20px">Tumbuh Kembang Anak</p>
                </td>
                <td>
                  <p style="font-size: 20px">  Tumbuh Kembang Anak</p>
                </td>
                <td>
                   <p style="font-size: 20px"> Tumbuh Kembang Anak</p>
                </td>
            </tr>
             <tr class="baca2" align="center">
                <td >
                  <h3 align="left">Penyebab Anak Kidal dan Fakta Menarik Seputar Kecerdasannya</h3>
                </td>
                <td>
                   <h3 align="left"> Cek Berat Badan Ideal Bayi Sesuai Tahapan Usianya di Sini </h3>
                </td>
                <td>
                   <h3 align="left"> Ukuran Lingkar Kepala Bayi Laki-laki dan Perempuan Normal</h3>
                </td>
            </tr>
             <tr align="center">
                <td>
                  <p style="font-size: 20px"> Sejumlah penelitian menemukan kecenderungan anak kidal lebih mahir dalam</p>
                </td>
                <td>
                   <p style="font-size: 20px">Berat badan bayi akan terus mengalami perubahan seiring tumbuh kembangnya setiap</p>
                </td>
                <td>
                    <p style="font-size: 20px">Biasanya pemeriksaan lingkar kepala bayi diikuti oleh cek berat badan dan tinggi badan</p>
                </td>
            </tr>
        </table>
          </div>
           
       </section>

      <footer>
        @include('layout.footer')
    </footer>


      @endsection