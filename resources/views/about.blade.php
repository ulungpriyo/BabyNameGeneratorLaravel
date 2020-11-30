
    @extends('layout.main')

    @section('content')

    <div class="section section-page section-lg">
    <!-- <div class="thumbnail thumbnail-bg bg-left hidden-xs" style="background-image:url('http://www.hayyana.co.id/images/about-bg.jpg');"></div> -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center">
                    <div class="thumbnail">
                    <img src="https://images.glints.com/unsafe/1024x0/glints-dashboard.s3.amazonaws.com/company-logo/aaba5b74c2994d07a21fdbf0139ddbee.png" width="400" height="400" class="gambarAbout">
                </div>
            </div>
            <div class="col-sm-6 aboutText">
                <h2 class="heading tentangkamiAbout" style="text-align: center;">Tentang Kami</h2>
                <div style="text-align: justify;"><p class="pt-4" style="text-align: center; font-weight: bold; font-family: 'Josefin Sans', sans-serif; font-size: 30px;">PT. HEPTACO Digital Media (7CO) <br> We are A Money MAGNET!</p> 
                <span style="font-weight: bold;">Heptaco </span>merupakan E-Commerce Enabler yang membawa perusahaan Anda menghasilkan revenue maksimal dengan inovasi teknologi dan strategi marketing digital terkini.</p>
            </div>            
            </div>
        </div>
    </div>
</div>


<footer>
        @include('layout.footer')
    </footer>


@endsection