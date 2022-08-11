@extends('layouts.web.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/web/css/flipcard3d.css') }}">
    <link href="https://vjs.zencdn.net/7.20.1/video-js.css" rel="stylesheet" />
    <link href="https://unpkg.com/@videojs/themes@1/dist/city/index.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Dela Gothic One' rel='stylesheet'>
    <script src="https://vjs.zencdn.net/7.20.1/video.min.js"></script>
    <style>
        @media screen and (max-width: 770px){
            #my-video {
                width: 320px;
                height: 320px;
            }
        }
        @media screen and (max-width: 340px){
            #my-video {
                width: 160px;
                height: 160px;
            }
        }
    </style>

    <!-- ==========Banner Section start Here========== -->
    <section class="banner-section">
        <div class="container">
            <div class="banner-wrapper shape-a">
                <div class="row gy-5 align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="banner-content">
                            <ul id="countdown" class="countdown count-down" data-date="August 26, 2022 09:00:00">
                                <li class="clock-item"><span class="count-number days">0</span>
                                    <p class="count-text">Hari</p>
                                </li>

                                <li class="clock-item"><span class="count-number hours">0</span>
                                    <p class="count-text">Jam</p>
                                </li>

                                <li class="clock-item"><span class="count-number minutes">0</span>
                                    <p class="count-text">Menit</p>
                                </li>

                                <li class="clock-item"><span class="count-number seconds">0</span>
                                    <p class="count-text">Detik</p>
                                </li>
                            </ul>
                            <h1 style="font-style:normal;"><span style="font-family: 'Dela Gothic One';">DIGIFUN</span> Festival 2022</h1>
                            <p>Gabung dengan Event <br>Turnamen E-Sport Kami.</p>
                            <button type="button" class="btn lab-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" id="ff"><span>Register Now</span></button>
                            <p>Powered By:</p>
                            <div class="event-sponsored">
                                <img src="{{ asset('assets/web/images/logo/look-logo.png') }}" alt="sponsor"
                                    style="height: 87px;">
                                <img class="mt-2" src="{{ asset('assets/web/images/logo/iespa.png') }}" alt="sponsor"
                                    style="height: 57px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="banner-image">
                            <img src="{{ asset('assets/web/images/logo/poster.png') }}" style="border-radius: 20px;" alt="banner-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section end Here========== -->

    <section class="schedule-section padding-tb padding-b bg-image">
        <div class="container">
            <div class="section-header text-center">
                <h2>DIGIFUN</h2>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4">
                    <div class="box-container">
                        <div class="box-item">
                            <div class="flip-box">
                                <div class="flip-box-front text-center"
                                    style="background: black;">
                                    <div class="inner color-white">
                                        <h3 class="flip-box-header">E-SPORT</h3>
                                        <p></p>
                                        {{-- <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt=""
                                            class="flip-box-img"> --}}
                                    </div>
                                </div>
                                <div class="flip-box-back text-center"
                                    style="background: black;">
                                    <div class="inner color-white">
                                        <h3 class="flip-box-header">E-SPORT</h3>
                                        <p>Dikarenakan daya tarik dan antusiasme yang tinggi pada turnamen game online khususnya pada game Free Fire, turnamen ini diadakan untuk seluruh lapisan masyarakat Indonesia.</p>
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal" id="ff" class="lab-btn mt-2">Daftar Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-container">
                        <div class="box-item">
                            <div class="flip-box">
                                <div class="flip-box-front text-center"
                                    style="background: #E9585E;">
                                    <div class="inner color-white">
                                        <h3 class="flip-box-header">ENTERTAINMENT</h3>
                                        <p></p>
                                        {{-- <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt=""
                                            class="flip-box-img"> --}}
                                    </div>
                                </div>
                                <div class="flip-box-back text-center"
                                    style="background: #E9585E;">
                                    <div class="inner color-white">
                                        <h3 class="flip-box-header">ENTERTAINMENT</h3>
                                        <p>Saat acara berlangsung akan ada pertunjukan live music, quiz dengan hadiah menarik. Selain itu juga akan diadakan talkshow dengan mengundang berbagai narasumber yang berkompeten di bidang digitalisasi. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-container">
                        <div class="box-item">
                            <div class="flip-box">
                                <div class="flip-box-front text-center"
                                    style="background: #05307F;">
                                    <div class="inner color-white">
                                        <h3 class="flip-box-header">EXPO</h3>
                                        <p></p>
                                        {{-- <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt=""
                                            class="flip-box-img"> --}}
                                    </div>
                                </div>
                                <div class="flip-box-back text-center"
                                    style="background: #05307F;">
                                    <div class="inner color-white">
                                        <h3 class="flip-box-header">EXPO</h3>
                                        <p>Akan digelar fintech dan digital Expo yang diisi dengan booth-booth menarik. Selain itu, akan ada tenant food and beverage yang akan menambah kemeriahan acara.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========About Section start Here========== -->
    <section class="about-section padding-tb padding-b" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                        <video
                        id="my-video"
                        class="video-js vjs-theme-city m-auto mb-3"
                        {{-- controls --}}
                        autoplay
                        muted
                        loop
                        preload="auto"
                        width="640"
                        height="640"
                        data-setup="{}"
                      >
                        <source src="{{ asset('assets/web/video/digifun.mp4')}}" type="video/mp4" />
                        <p class="vjs-no-js">
                          To view this video please enable JavaScript, and consider upgrading to a
                          web browser that
                          <a href="https://videojs.com/html5-video-support/" target="_blank"
                            >supports HTML5 video</a
                          >
                        </p>
                      </video>
                </div>
                <div class="col-lg-10">
                    <div class="section-header text-center">
                        <h2>DIGIFUN</h2>
                        <p>The Future In Your Hand</p>
                    </div>
                    <div class="section-wrapper text-center">
                        <p>
                            Digifun merupakan acara pameran digital, UMKM, aktifitas lomba olahraga elektronik dan hiburan
                            yang dikemas dalam satu ekosistem menarik yang berskala regional yang ditujukan untuk memberikan
                            wawasan mendalam tentang dunia teknologi, digital, dan UMKM.
                            Diharapkan kegiatan ini dapat menumbuhkan pengetahuan mengenai bagaimana penggunaan serta
                            optimalisasi pada dunia digital.
                            Pengetahuan ini penting, mengingat saat ini masyarakat sangat dekat dengan penggunaan teknologi
                            yang terkoneksi dengan dunia digital,
                            sehingga pengaplikasian ilmu mengenai dunia digital dapat merangsang pertumbuhan UMKM yang akan
                            berdampak pada pemulihan ekonomi di Indonesia secara lebih luas.
                        </p>
                        <div class="about-btn-grp">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal" id="ff" class="lab-btn "><span>Register Now</span> </button>
                            <a href="https://wa.me/6281222310801/?text={{ urlencode('Halo Admin, Mau Tanya Seputar Event E-Sport *DIGIFUN*') }}" class="lab-btn"><span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========About Section end Here========== -->

@include('layouts.web.schedule')


    <!-- Speakers section start here -->
    <section class="speakers-section padding-tb padding-b" id="speakers">
        <div class="container">
            <div class="section-header">
                <h2>Our Speakers</h2>
                <p>Meet Our World’s Leading Speakers</p>
            </div>
            <div class="section-wrapper shape-b">
                <div class="row g-5">
                    <div class="col-lg-6 col-12">
                        <div class="speaker-item">
                            <div class="speaker-inner">
                                <div class="speaker-thumb">
                                    <img src="{{ asset('assets/web/images/speakers/01.png') }}" alt="speaker">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a href="speaker-details.html">Zen Al-Anshory</a> </h5>
                                        <p>Speaker</p>
                                    </div>
                                    <div class="spkr-content-details">
                                        <p>Completey conceplua high quality
                                            nice markes rather than long term
                                            impact human capital</p>
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                            <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="#"><i class="icofont-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="speaker-item">
                            <div class="speaker-inner">
                                <div class="speaker-thumb">
                                    <img src="{{ asset('assets/web/images/speakers/02.png') }}" alt="speaker">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a href="speaker-details.html">Erose Parwita </a> </h5>
                                        <p>Speaker</p>
                                    </div>
                                    <div class="spkr-content-details">
                                        <p>Completey conceplua high quality
                                            nice markes rather than long term
                                            impact human capital</p>
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                            <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="#"><i class="icofont-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="download-button text-center mt-5">
                    <a class="lab-btn">Download Schedule</a>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Speakers section end here -->

    <!-- ======= Sponsor sectin start here ======== -->
    <section class="sponsor-section padding-tb padding-b bg-image">
        <div class="container">
            <div class="section-header">
                <h2>Event Sponsors</h2>
                <p>Check Who Makes The Event Possible</p>
            </div>
            <div class="section-wrapper text-center shape-b">
                <div class="all-sponsor">
                    <div class="platinum-sponsor">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/web/images/sponsor/01.png') }}" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/web/images/sponsor/02.png') }}" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/web/images/sponsor/03.png') }}" alt="sponsor">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <a href="#" class="lab-btn"><span>
                        Become a Sponsor
                    </span></a> --}}
            </div>
        </div>
    </section>
    <!-- ======= Sponsor sectin end here ======== -->
@endsection
