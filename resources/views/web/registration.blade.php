@extends('layouts.web.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/web/css/multistepform.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/flipcard3d.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
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
                                <div class="flip-box-back text-center" style="background: #670E49;">
                                    <div class="inner color-white">
                                        <h3 class="flip-box-header">FREE FIRE</h3>
                                        <button type="button" class="btn lab-btn mt-2" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal" id="ff">Daftar</button>
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
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                    id="1">
                                    1
                                </button>
                                <div class="step-title">
                                    Leader
                                </div>
                            </div>
                            <div class="step-item">
                                <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                    id="2">
                                    2
                                </button>
                                <div class="step-title">
                                    Informasi Player
                                </div>
                            </div>
                            <div class="step-item">
                                <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="3">
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
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="card-body" class="account-wrapper">
                                    <div hidden id="notice_leader">
                                        <span>Form telah Terkirim !</span>
                                     </div>
                                    <form class="account-form" method="POST" data-action="{{ route('registrasi') }}"
                                        anctype="multipart/form" id="leader">
                                        @csrf
                                        <div class="text-center m-3">
                                            <h5>Detail Informasi Penanggung Jawab</h5>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="category_id" value="1" hidden id="cat_id">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Nama" name="name"
                                                id="name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" placeholder="Masukkan Email" name="email"
                                                id="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Asal Kota" name="asal_kota"
                                                id="asal_kota" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" placeholder="Masukkan Nomor HP tanpa +62 atau 0"
                                                name="no_hp" id="no_hp" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Nama Tim" name="nama_tim"
                                                id="nama_tim" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="logo">Masukkan Logo Tim. ( *jika ada )</label>
                                            <input type="file" placeholder="Masukkan Logo" name="logo"
                                                id="logo">
                                        </div>
                                        <div class="card-footer text-end">
                                            <button type="button" class="btn btn-warning me-2"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button class="btn lab-btn leader-submit" type="submit">Next</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="background: #01153D;">
                            <div id="headingTwo">

                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="card-body" class="account-wrapper">
                                    <div class="text-center m-3">
                                        <h5 id="detail_player">Detail Player (Minimal <span id="jmlh-orang">4</span> Orang)</h5>
                                    </div>
                                    <div>
                                        <h6 id="form-player">Player <span id="player_ke">1</span></h6>
                                        <div hidden id="notice_player">
                                           <span>Pendaftaran Seluruh Player telah Kami Terima !</span>
                                        </div>
                                        <form method="POST" data-action="{{ url('registrasiplayer') }}" anctype="multipart/form" id="player" class="account-form">
                                            @csrf
                                            <div class="form-group">
                                                <input type="number" name="leader_id" hidden>
                                            </div>
                                            <p id="attention" hidden>Isi dengan "-" atau "kosong", jika tidak ada pemain cadangan</p>
                                            <div class="form-group">
                                                <input type="text" placeholder="Masukkan ID Game" name="id_game"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Masukkan Nick in Game" name="nick"
                                                    required>
                                            </div>
                                            <button type="submit" class="btn lab-btn" id="addplayer"><i class="bi bi-person-plus"></i> Tambah Player</button>
                                            <div class="card-footer text-end">
                                                <button class="btn btn-sm lab-btn" type="submit" id="submit-player" hidden>Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="background: #01153D;">
                            <div id="headingThree">

                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
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
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#leader').on('submit', function(e) {
            e.preventDefault();
            var url = $(this).attr('data-action');
            $.ajax({
                type: 'POST',
                url: url,
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: true,
                processData: false,
                success: function(data) {
                    // alert(data.success);
                    $('#2').click();
                    $('#1').off('click');
                    $('#leader').attr('hidden', true);
                    $('#notice_leader').attr('hidden', false);
                    var count = data.leader_id.length - 1;

                    // console.log(count);
                    // console.log(data.leader_id[count].id);
                    $('input[name="leader_id"]').val(data.leader_id[count].id);
                },
                error: function() {
                    alert("Harap Koreksi Kembali Form Isian Anda!");
                }
            });
        });
        $('#player').on('submit', function(e) {
            e.preventDefault();
            var url = $(this).attr('data-action');
            $.ajax({
                type: 'POST',
                url: "{{ route('registrasi.player') }}",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    // $('input[name="leader_id"]').val(data.leader_id[count].id);
                    $('input[name="id_game"]').val('');
                    $('input[name="nick"]').val('');
                    var sum = 1;
                    $('#player_ke').each(function() {
                        sum += +$(this).text()||1;
                    });
                    var player = $('#player_ke').text();
                    $('#player_ke').text(sum);
                    console.log(player);
                    if ($('#player_ke').text() === '4') {
                        $('#addplayer').attr('hidden', true);
                        $('#submit-player').attr('hidden', false);
                    }
                    else if ($('#player_ke').text() === '5') {
                        $('#addplayer').attr('hidden', true);
                        $('#submit-player').attr('hidden', false);
                        $('#attention').attr('hidden', false);
                    }
                    else if ($('#player_ke').text() === '8') {
                        $('#addplayer').attr('hidden', true);
                        $('#submit-player').attr('hidden', true);
                        $('#player').attr('hidden', true);
                        $('#detail_player').attr('hidden', true);
                        $('#form-player').attr('hidden', true);
                        $('#notice_player').attr('hidden', false);
                        $('#attention').attr('hidden', true);
                        $('#3').click();
                    }
                },
                error: function() {
                    alert("Harap diteliti Kembali!");
                }
            });
        });
    </script>
    <!-- Login Section Section Ends Here -->
@endsection
