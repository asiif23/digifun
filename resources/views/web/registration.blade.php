@extends('layouts.web.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/web/css/multistepform.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/flipcard3d.css') }}">
@section('content')

    <!-- Login Section Section Starts Here -->
    <section class="schedule-section padding-tb padding-b bg-image" style="height: 100vh;">
        <div class="container m-auto mt-5">
            <div class="section-header text-center">
                <h2>PILIH KATEGORI GAME</h2>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-6">
                    <div class="box-container">
                        <div class="box-item">
                            <div class="flip-box">
                                <div class="flip-box-front text-center"
                                    style="background-image: url('https://i.postimg.cc/t4TH5BBx/Free-Fire.png');">
                                    <div class="inner color-white">
                                        {{-- <h3 class="flip-box-header">FREE FIRE</h3> --}}
                                        <p></p>
                                        {{-- <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt=""
                                            class="flip-box-img"> --}}
                                    </div>
                                </div>
                                <div class="flip-box-back text-center"
                                    style="background: #670E49;">
                                    <div class="inner color-white">
                                        <h3 class="flip-box-header">FREE FIRE</h3>
                                        <button type="button" class="btn lab-btn mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal" id="ff">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="box-container">
                        <div class="box-item">
                            <div class="flip-box">
                                <div class="flip-box-front text-center"
                                style="background-image: url('https://i.postimg.cc/kgDk8B5N/mobile-legend.png');">
                                    <div class="inner color-white">
                                        {{-- <h3 class="flip-box-header">MOBILE LEGENDS</h3> --}}
                                        <p></p>
                                        {{-- <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt=""
                                            class="flip-box-img"> --}}
                                    </div>
                                </div>
                                <div class="flip-box-back text-center"
                                    style="background: #392379;">
                                    <div class="inner color-white">
                                        <h3 class="flip-box-header">MOBILE LEGENDS</h3>
                                        <button type="button" class="btn lab-btn mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal" id="ml">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
  <!-- Modal Mobile Legends -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content" style="background: #00102E">
        <div class="container p-5">
            <h3 class="text-center">Pendaftaran Turnamen <span id="jenis-game"></span> </h3>
            <div class="accordion" id="accordionExample">
                <div class="steps">
                    <progress id="progress" value=0 max=100></progress>
                    <div class="step-item">
                        <button class="step-button text-center" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1
                        </button>
                        <div class="step-title">
                            Leader
                        </div>
                    </div>
                    <div class="step-item">
                        <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2
                        </button>
                        <div class="step-title">
                            Informasi Player
                        </div>
                    </div>
                    <div class="step-item">
                        <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3
                        </button>
                        <div class="step-title">
                            Pembayaran
                        </div>
                    </div>
                    <div class="step-item">
                        <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4
                        </button>
                        <div class="step-title">
                            Invoice
                        </div>
                    </div>
                </div>
    
                <div class="card" style="background: #01153D;">
                    <div id="headingOne">
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="card-body" class="account-wrapper">
                            <form action="" class="account-form" method="POST" anctype="multipart/form">
                                @csrf
                                <div class="text-center m-3">
                                    <h5>Detail Informasi Penanggung Jawab</h5>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="category_id" value="" hidden id="cat_id">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Masukkan Nama" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Masukkan Email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Masukkan Asal Kota" name="asal_kota" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" placeholder="Masukkan Nomor HP tanpa +62 atau 0" name="no_hp" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Masukkan Nama Tim" name="nama_tim" required>
                                </div>
                                <div class="form-group">
                                    <label for="logo">Masukkan Logo Tim. ( *jika ada )</label>
                                    <input type="file" placeholder="Masukkan Logo" name="logo">
                                </div>
                                <div class="card-footer text-end">
                                    <button type="button" class="btn btn-warning me-2" data-bs-dismiss="modal">Batal</button>
                                    <button class="btn lab-btn " type="submit">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card" style="background: #01153D;">
                    <div id="headingTwo">
    
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="card-body" class="account-wrapper">
                            <form action="" class="account-form">
                                <div class="text-center m-3">
                                    <h5>Detail Player (Minimal <span id="jmlh-orang"></span> Orang)</h5>
                                </div>
                                <h6>Player 1</h6>
                                <div class="form-group">
                                    <input type="number" placeholder="Masukkan ID Game" name="id_game" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Masukkan Nick in Game" name="nick" required>
                                </div>
                                <h6>Player 2</h6>
                                <div class="form-group">
                                    <input type="number" placeholder="Masukkan ID Game" name="id_game" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Masukkan Nick in Game" name="nick" required>
                                </div>
                                <h6>Player 3</h6>
                                <div class="form-group">
                                    <input type="number" placeholder="Masukkan ID Game" name="id_game" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Masukkan Nick in Game" name="nick" required>
                                </div>
                                <h6>Player 4</h6>
                                <div class="form-group">
                                    <input type="number" placeholder="Masukkan ID Game" name="id_game" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Masukkan Nick in Game" name="nick" required>
                                </div>
                                <h6>Player 5</h6>
                                <div class="form-group">
                                    <input type="number" placeholder="Masukkan ID Game" name="id_game" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Masukkan Nick in Game" name="nick" required>
                                </div>
                                <h6>Player 6</h6>
                                <div class="form-group">
                                    <input type="number" placeholder="Masukkan ID Game" name="id_game">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Masukkan Nick in Game" name="nick">
                                </div>
                                <h6>Player 7</h6>
                                <div class="form-group">
                                    <input type="number" placeholder="Masukkan ID Game" name="id_game">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Masukkan Nick in Game" name="nick">
                                </div>
                                <div class="card-footer text-end">
                                    <button class="btn lab-btn" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card" style="background: #01153D;">
                    <div id="headingThree">
    
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <div class="text-center m-3">
                                <h5>Pilih Metode Pembayaran</h5>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="card" style="background: #01153D;">
                    <div id="headingFour">
    
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <div class="text-center m-3">
                                <h5>Download Invoices</h5>
                                <span>*sebagai tanda bukti pembayaran</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  {{-- End Of Modal Mobile Legends --}}




    <script>
        const stepButtons = document.querySelectorAll('.step-button');
        const progress = document.querySelector('#progress');

        Array.from(stepButtons).forEach((button, index) => {
            button.addEventListener('click', () => {
                progress.setAttribute('value', index * 100 / (stepButtons.length -
                1)); //there are 3 buttons. 2 spaces.

                stepButtons.forEach((item, secindex) => {
                    if (index > secindex) {
                        item.classList.add('done');
                    }
                    if (index < secindex) {
                        item.classList.remove('done');
                    }
                })
            })
        })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('#ff').click(function () {
            $('#jenis-game').text('Free Fire');
            $('#jmlh-orang').text('4');
            $('#cat_id').val('1');
        });
        $('#ml').click(function () {
            $('#jenis-game').text('Mobile Legends');
            $('#jmlh-orang').text('5');
            $('#cat_id').val('2');
        });
    </script>
    <!-- Login Section Section Ends Here -->
@endsection
