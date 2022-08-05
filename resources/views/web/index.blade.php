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
                            <a type="button" class="btn lab-btn" href="{{ url('register') }}"><span>Register Now</span></a>
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
                                        <a href="{{ url('register') }}" class="lab-btn mt-2">Daftar Sekarang</a>
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
    <section class="about-section padding-tb padding-b">
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
                            <a href="{{ url('register') }}" class="lab-btn "><span>Register Now</span> </a>
                            <a href="https://wa.me/6281222310801/?text={{ urlencode('Halo Admin, Mau Tanya Seputar Event E-Sport *DIGIFUN*') }}" class="lab-btn"><span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========About Section end Here========== -->

    <!-- ==========schedule Section start Here========== -->
    <section class="schedule-section padding-tb padding-b bg-image">
        <div class="container-fluid p-5">
            <div class="section-header">
                <h2>Event Schedule</h2>
                <p>A Representation of the event planning</p>
            </div>
            <div class="section-wrapper shape-b">
                <div class="row gx-4 gy-5">
                    <div class="col-lg-4">
                        <div class="schedule-left schedule-pack">
                            <h5>26 Agustus 2022</h5>
                            <div class="schedule-list" id="accordionExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseEight" aria-expanded="true"
                                            aria-controls="collapseEight">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="{{ asset('assets/web/images/event/member/04.png') }}"
                                                        alt="speaker">

                                                </span>
                                                <span class="h7">Dinner Break</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseEight" class="accordion-collapse collapse"
                                        aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingNine">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true"
                                            aria-controls="collapseNine">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="{{ asset('assets/web/images/event/member/08.png') }}"
                                                        alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="{{ asset('assets/web/images/event/member/02.png') }}"
                                                            alt="speaker">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                        <img src="{{ asset('assets/web/images/event/member/03.png') }}"
                                                            alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Live Music Performance</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseNine" class="accordion-collapse collapse"
                                        aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="schedule-left schedule-pack">
                            <h5>27 Agustus 2022</h5>
                            <div class="schedule-list" id="accordionExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="{{ asset('assets/web/images/event/member/01.png') }}"
                                                        alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="{{ asset('assets/web/images/event/member/02.png') }}"
                                                            alt="speaker">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                        <img src="{{ asset('assets/web/images/event/member/03.png') }}"
                                                            alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Registration & Breakfast</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true"
                                            aria-controls="collapseFour">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="{{ asset('assets/web/images/event/member/04.png') }}"
                                                        alt="speaker">

                                                </span>
                                                <span class="h7">Lunch Brack</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="schedule-right schedule-pack">
                            <h5>28 Agustus 2022</h5>
                            <div class="schedule-list" id="accordionExample-2">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Eight">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-Eight"
                                            aria-expanded="true" aria-controls="collapse-Eight">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="{{ asset('assets/web/images/event/member/04.png') }}"
                                                        alt="speaker">

                                                </span>
                                                <span class="h7">Dinner Break</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Eight" class="accordion-collapse collapse"
                                        aria-labelledby="heading-Eight" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Nine">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-Nine"
                                            aria-expanded="true" aria-controls="collapse-Nine">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="{{ asset('assets/web/images/event/member/08.png') }}"
                                                        alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="{{ asset('assets/web/images/event/member/02.png') }}"
                                                            alt="speaker">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                        <img src="{{ asset('assets/web/images/event/member/03.png') }}"
                                                            alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Live Music Performance</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Nine" class="accordion-collapse collapse"
                                        aria-labelledby="heading-Nine" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="schedule-btns text-center mt-5">
                    <a href="#" class="lab-btn">Download Schedule</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========schedule Section end Here========== -->


    <!-- Speakers section start here -->
    <section class="speakers-section padding-tb padding-b">
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
                                        <h5><a href="speaker-details.html">Zisnad Q. Alex</a> </h5>
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
                                        <h5><a href="speaker-details.html">Taylor R. Miller </a> </h5>
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
                                    <img src="{{ asset('assets/web/images/speakers/03.png') }}" alt="speaker">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a href="speaker-details.html"> Robot S. Jhonson</a> </h5>
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
                                    <img src="{{ asset('assets/web/images/speakers/04.png') }}" alt="speaker">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a href="speaker-details.html">Ekez O. Menth</a> </h5>
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
                                    <img src="{{ asset('assets/web/images/speakers/05.png') }}" alt="speaker">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a href="speaker-details.html">Broklyn L. Doel</a> </h5>
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
                                    <img src="{{ asset('assets/web/images/speakers/06.png') }}" alt="speaker">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a href="speaker-details.html">Mr. Rassel H.</a> </h5>
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
                <div class="download-button text-center mt-5">
                    <a class="lab-btn">Download Schedule</a>
                </div>
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
                    <div class="gold-sponsor">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/web/images/sponsor/04.png') }}" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/web/images/sponsor/05.png') }}" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/web/images/sponsor/06.png') }}" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/web/images/sponsor/07.png') }}" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/web/images/sponsor/08.png') }}" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/web/images/sponsor/09.png') }}" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/web/images/sponsor/10.png') }}" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/web/images/sponsor/11.png') }}" alt="sponsor">
                            </div>
                        </div>
                    </div>
                    <div class="silver-sponsor">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/web/images/sponsor/12.png') }}" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/web/images/sponsor/13.png') }}" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/web/images/sponsor/14.png') }}" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/web/images/sponsor/15.png') }}" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/web/images/sponsor/16.png') }}" alt="sponsor">
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="lab-btn"><span>
                        Become a Sponsor
                    </span></a>
            </div>
        </div>
    </section>
    <!-- ======= Sponsor sectin end here ======== -->

    <!-- ===== Pricing Plan Start here  ==== -->
    {{-- <section class="pricing-plan-section padding-tb padding-b">
        <div class="container">
            <div class="section-header">
                <h2>Our Pricing Plan</h2>
                <p>Choose Your Plan That Fits You Best</p>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="pricing-item">
                            <div class="pricing-inner">
                                <div class="pricing-header">
                                    <h3>1-Day-Pass</h3>
                                    <p>For Normal Seating</p>

                                </div>
                                <div class="pricing-content">
                                    <ul class="facilites">
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Event Attendance
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Networking Area Access
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Tea And Coffee
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Lunch
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Free Wifi
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> 3 Lottery Ticket
                                        </li>
                                    </ul>
                                    <div class="get-ticket">
                                        <a href="#">
                                            <ul>
                                                <li class="vat">
                                                    <h4>$24</h4>
                                                    <p>ex. VAT</p>
                                                </li>
                                                <li class="icon"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </li>
                                                <li class="ticket-text">
                                                    <p>Get Ticket</p>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="pricing-item">
                            <div class="pricing-inner">
                                <div class="pricing-header">
                                    <h3>Full Pass</h3>
                                    <p>For Corporate Seating</p>

                                </div>
                                <div class="pricing-content">
                                    <ul class="facilites">
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Event Attendance
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Networking Area Access
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Tea And Coffee
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Lunch
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Free Wifi
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> 3 Lottery Ticket
                                        </li>
                                    </ul>
                                    <div class="get-ticket">
                                        <a href="#">
                                            <ul>
                                                <li class="vat">
                                                    <h4>$24</h4>
                                                    <p>ex. VAT</p>
                                                </li>
                                                <li class="icon"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </li>
                                                <li class="ticket-text">
                                                    <p>Get Ticket</p>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="pricing-item">
                            <div class="pricing-inner">
                                <div class="pricing-header">
                                    <h3>VIP Pass</h3>
                                    <p>For VIP Seating</p>

                                </div>
                                <div class="pricing-content">
                                    <ul class="facilites">
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Event Attendance
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Networking Area Access
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Tea And Coffee
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Lunch
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Free Wifi
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> 3 Lottery Ticket
                                        </li>
                                    </ul>
                                    <div class="get-ticket">
                                        <a href="#">
                                            <ul>
                                                <li class="vat">
                                                    <h4>$24</h4>
                                                    <p>ex. VAT</p>
                                                </li>
                                                <li class="icon"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </li>
                                                <li class="ticket-text">
                                                    <p>Get Ticket</p>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ===== Pricing Plan end here  ==== -->

    <!-- ===== Event Gift start here  ==== -->
    {{-- <section class="event-gift-section padding-tb padding-b bg-image">
        <div class="container">
            <div class="row flex-lg-row-reverse">
                <div class="col-lg-6 col-12">
                    <div class="section-header">
                        <h2>Event Gifts</h2>
                        <p>Our Complimentary Gifts For You</p>
                    </div>
                    <div class="section-wrapper">
                        <div class="gift-content">
                            <p>
                                It is a long established fact that a reader will be distracted by theing
                                readable content of a page when looking at its layout. The point info
                                using Lorem Ipsum is that it has a more-or-less
                            </p>
                            <ul class="gift-list">
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Exclusive T-shirt</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Lather Bag</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Mug</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Gift Hamper</li>
                            </ul>
                            <div class="register-button">
                                <a href="#" class="lab-btn"><span>Register Now</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="image-part">
                        <img src="{{ asset('assets/web/images/gift/01.png') }}" alt="gift-img">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ===== Event Gift end here  ==== -->

    <!-- ===== News Section Start here  ==== -->
    {{-- <section class="news-section padding-tb padding-b">
        <div class="container">
            <div class="section-header">
                <h2>Recent News</h2>
                <p>Start Your Remarkable Journey</p>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="news-item">
                            <div class="news-inner">
                                <div class="news-thumb">
                                    <img src="{{ asset('assets/web/images/news/01.jpg') }}" alt="Image">
                                </div>
                                <div class="news-content">
                                    <h6><a href="#">
                                            How Marching For Science
                                            Risks Politicizing It
                                        </a>
                                    </h6>
                                    <p><span><i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span> December 24, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="news-item">
                            <div class="news-inner">
                                <div class="news-thumb">
                                    <img src="{{ asset('assets/web/images/news/02.jpg') }}" alt="Image">
                                </div>
                                <div class="news-content">
                                    <h6><a href="#">
                                            How Marching For Science
                                            Risks Politicizing It
                                        </a>
                                    </h6>
                                    <p><span><i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span> December 24, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="news-item">
                            <div class="news-inner">
                                <div class="news-thumb">
                                    <img src="{{ asset('assets/web/images/news/03.jpg') }}" alt="Image">
                                </div>
                                <div class="news-content">
                                    <h6><a href="#">
                                            How Marching For Science
                                            Risks Politicizing It
                                        </a>
                                    </h6>
                                    <p><span><i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span> December 24, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ===== News Section end here  ==== -->
@endsection
