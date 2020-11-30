
    @extends('layout.main')

    @section('content')

<div class="wrapper">
<div class="jumbotron">
    <div class="pl-5" id="top">
    <h3 class="font-weight-bold">Hello Mom and Dad!</h3>
    <p class="lead" style="font-size: 22px;">Temukan Nama Terbaik untuk si Buah Hati Kecil</p>
    <hr class="my-4" width="450" align="left">
    <p>Mencoba untuk mendapatkan nama terbaik</p>
    <a class="btn btn-lg" href="generate" role="button"><font color="white">coba disini</font></a>
    </div>
    <div style="padding-top: 110px;">
    <a class="btn-more btn-lg" href="#second" role="button" style="margin-left:50%;"><font color="white">MORE</font></a>
    </div>
</div>
</div>

<div class="wrapper">
<div class="bgsecond">
<div class="container" id="second">
        <p style="padding-top: 70px; font-size: 50px;" align="center">Kelebihan Website Kami</p>
                    <div class="kelebihan" style="padding-top: 40px">
                        <table  align="center" cellpadding="15">
                            <tr align="center">
                                <td>
                                    <img class="img-fluid" src="https://www.flaticon.com/svg/static/icons/svg/822/822225.svg" width="100">
                                 </td>

                                <td>
                                    <img class="img-fluid" src="https://www.flaticon.com/svg/static/icons/svg/942/942196.svg" width="100">
                                </td>

                                <td>
                                    <img class="img-fluid" src="https://www.flaticon.com/svg/static/icons/svg/2618/2618461.svg" width="100">
                                </td>

                            </tr>
                            <tr align="center">
                                <td>
                                    <p class="pt-4">Referensi Nama Berasal dari 4 Bahasa : <br></p>
                            
                            </ul>
                                </td>


                                <td>
                                    <p class="pt-4">Setiap nama memiliki arti yang akurat berdasarkan nama masing-masing</p>
                                </td>

                                <td>
                                    <p class="pt-4">Tidak perlu repot mencari nama terbaik, hanya butuh Satu Klik saja</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                <li>
                                    Bahasa Arab
                                </li>
                                <li>
                                    Bahasa Indonesia
                                </li>
                                <li>
                                    Bahasa Eropa
                                </li>
                                <li>
                                    Bahasa Sansekerta
                                </li>
                                </td>
                            </tr>
                        </table>
                    
                    </div>  
            </div>
</div>

<div class="wrapper">
    <div class="container" id="three">
        <hr class="hr-three">
        
        

    <div id="carouselExample1" class="carousel slide z-depth-1-half" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="../img/slider/sliderindex1.jpeg" width="600" height="600" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../img/slider/sliderindex2.jpg" width="600" height="600" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../img/slider/sliderindex3.jpg" width="600" height="600" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

        <p class="topthree">Tertarik mencoba untuk dicarikan oleh kami nama terbaik untuk si buah kecil anda</p>

        

        <a href="/generate"><button class="btn btn-success text-center">DISINI</button></a>

    </div>
</div>

<br>
<br>
    
    <footer>
        @include('layout.footer')
    </footer>

    @endsection