<link rel="stylesheet" href="{{ asset('assets/web/css/multistepform.css') }}">
<link rel="stylesheet" href="{{ asset('assets/web/css/flipcard3d.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<style>
    .text-call{
        color: #EBB40B;
    }
    .text-call:hover{
        color: #8B077D;
    }
    @media screen and (max-width: 500px) {
        .responsive-form{
        }
        .step-item{
            font-size: 70%;
        }
        .step-button{
            height: 40px;
            width: 40px;
        }
        .step-button[aria-expanded="true"]{
            height: 50px;
            width: 50px;
        }

    }
    @media screen and (max-width: 555px) {
        h5{
            font-size: 18px;
        }
    }
    @media screen and (max-width: 530px) {
        .lab-btn{
            padding: 0 15px;
            font-size: 13px;
        }
    }
    @media screen and (max-width: 501px) {
        .form-pembayaran{
            font-size: 13px;
        }
    }
    @media screen and (max-width: 490px) {
        h5{
            font-size: 16px;
        }
        h3{
            font-size: 25px;
        }
        input{
            font-size: 15px;
        }
    }
    @media screen and (max-width: 465px) {
        h3{
            font-size: 23px;
        }
        input{
            font-size: 14px;
        }
    }
    @media screen and (max-width: 450px) {
        h5{
            font-size: 15px;
        }
        input{
            font-size: 13px;
        }
    }
    @media screen and (max-width: 415px) {
        h5{
            font-size: 15px;
        }
        input{
            font-size: 12px;
        }
        .form-pembayaran{
            font-size: 11px;
            padding-top: 6px;
        }
        .lab-btn{
            padding: 0 12px;
            font-size: 13px;
        }
        .detail-orderr{
            margin-left: 0 !important;
        }
        .card-orderr{
            padding: 0 !important;
        }
    }
</style>
<!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-4gjWr7lGlDXz52VZ">
</script>
<!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
<meta name="csrf_token" content="{{ csrf_token() }}" />

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
                                Player
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
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" id="4">
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
                            <div class="card-body responsive-form" class="account-wrapper">
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
                                        <label for="logo" class="form-pembayaran">Masukkan Logo Tim. ( *jika ada )</label>
                                        <input type="file" placeholder="Masukkan Logo" name="logo"
                                            id="logo" value="{{ asset('images/logo-squad/foto.png') }}">
                                    </div>
                                    <br>
                                    <span class="form-pembayaran">- Pastikan Seluruh Form sudah terisi dan mengikuti seluruh Step Pendaftaran.</span><br>
                                    <span class="form-pembayaran">- Jika muncul popup error silahkan gunakan Email atau No Handhphone yang berbeda.</span><br>
                                    <span class="form-pembayaran">- Jika terdapat kendala dalam proses registrasi, silahkan <a href="https://wa.me/6281222310801/?text={{ urlencode('Halo Admin, Saya Mengalami Kendala Saat Proses Registrasi Event E-Sport *DIGIFUN*') }}"><span class="text-call">hubungi kami</span> </a>.</span>
                                    <div class="card-footer text-end">
                                        <button type="button" class="btn lab-btn bg-warning me-2"
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
                                    <h5 id="detail_player">Detail Player (Minimal <span id="jmlh-orang">4</span> Player)</h5>
                                    <p class="form-pembayaran">*Maksimal 7 Player</p>
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
                                        <p id="attention" hidden>Kosongi dan Klik "Submit" Jika tidak ada Pemain Cadangan.</p>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Nama Player" name="name_player"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" placeholder="Masukkan ID Game" name="id_game"
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
                            <div class="card-body text-center justify-content-center">
                                <div class="text-center m-3">
                                    <h5>Silahkan Lakukan Pembayaran</h5>
                                </div>
                                <div style="border-style:groove;" class="p-3 card-orderr">
                                    <div class="row text-center justify-content-center">
                                        <span id="logo_squad_img" hidden></span>
                                        <div class="col-12">
                                            <img id="logo_squad" src="" alt="Logo Squad" width="200" height="200" hidden />
                                        </div>
                                        <div class="col-12">
                                            <h6 class="mt-2 mb-2"><b><span id="squad_name"></span></b></h6>
                                        </div>
                                    </div>
                                    <div class="row text-start ms-2 detail-orderr">
                                        <div class="col-4 form-pembayaran">Order Id</div>
                                        <div class="col-8 text-center"><b><span id="order_id" class="text-danger form-pembayaran">Klik Bayar Sekarang!</span></b></div>
                                    </div>
                                    <div class="row text-start ms-2 detail-orderr">
                                        <div class="col-4 form-pembayaran">Nama Tim</div>
                                        <div class="col-8 text-center"><span id="team_name" class="text-danger form-pembayaran">Isi Form Terlebih Dahulu</span></div>
                                    </div>
                                    <div class="row text-start ms-2 detail-orderr">
                                        <div class="col-4 form-pembayaran">Leader</div>
                                        <div class="col-8 text-center"><span id="leader_name" class="text-danger form-pembayaran">Isi Form Terlebih Dahulu</span></div>
                                    </div>
                                    <div class="row text-start ms-2 detail-orderr">
                                        <div class="col-4 form-pembayaran">Email</div>
                                        <div class="col-8 text-center"><span id="email_order" class="text-danger form-pembayaran">Isi Form Terlebih Dahulu</span></div>
                                    </div>
                                    <div class="row text-start ms-2 detail-orderr">
                                        <div class="col-4 form-pembayaran">Phone</div>
                                        <div class="col-8 text-center"><span id="phone_order" class="text-danger form-pembayaran">Isi Form Terlebih Dahulu</span></div>
                                    </div>
                                </div>
                                <span class="form-pembayaran" id="gopay-attention">*Hanya Menerima Pembayaran via GO-PAY</span>
                                <br>
                                <br>
                                <div id="detail_orders" hidden>
                                    <p class="text-start">Order Details</p>
                                    <table class="table bg-light bordered">
                                        <tbody>
                                            <tr>
                                            <th>Biaya Registrasi</th>
                                            <td>Rp. 50.000</td>
                                            </tr>
                                            <tr>
                                            <th>Platform Fee</th>
                                            <td>Rp. 5.000</td>
                                            </tr>
                                            <tr>
                                            <th>Total Pembayaran</th>
                                            <td><b>Rp. 55.000</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <input type="text" name="name-order" id="order-name" hidden>
                                <input type="text" name="phone-order" id="order-phone" hidden>
                                <input type="text" name="email-order" id="order-email" hidden>
                                <input type="text" name="address-order" id="order-address" hidden>
                                <input type="text" name="token-order" id="order-token" hidden>
                                <input type="text" name="status-order" id="order-status" hidden>
                                <div style="border-style:groove;" class="mb-2">
                                    <strong><b><span class="text-danger form-pembayaran" id="perhatian">PERHATIAN !!!</span></b></strong><br>
                                    <span class="text-warning form-pembayaran text-start" id="perhatian">*Jangan Tutup Pop Up Sebelum Pembayaran Sukses !</span>
                                </div>
                                <button class="btn btn-sm lab-btn" id="pay-button">Bayar Sekarang</button>
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
                                    <span class=" form-pembayaran">*sebagai tanda bukti pembayaran dan syarat registrasi ulang.</span>
                                </div>
                                <div style="width: 100%; height: 1200px;" id="inpois" hidden>
                                    <iframe id="iframe" src="" frameborder="1" style="width: 100%; height: 100%;"></iframe>
                                </div>
                            </div>
                            <div class="card-footer text-center" id="inpoiss" hidden>
                                <button class="btn btn-sm lab-btn mb-3" id="download">Download Invoices</button>
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
                console.log(data.leader_id[count].id);
                $('input[name="leader_id"]').val(data.leader_id[count].id);
                $('input[name="name-order"]').val(data.leader_id[count].name);
                $('#leader_name').text(data.leader_id[count].name).removeClass('text-danger');
                $('#team_name').text(data.leader_id[count].nama_tim).removeClass('text-danger');
                $('#squad_name').text(data.leader_id[count].nama_tim);
                $('#email_order').text(data.leader_id[count].email).removeClass('text-danger');
                $('#phone_order').text(data.leader_id[count].no_hp).removeClass('text-danger');
                $('#logo_squad_img').text(data.leader_id[count].logo);
                $('input[name="phone-order"]').val(data.leader_id[count].no_hp);
                $('input[name="email-order"]').val(data.leader_id[count].email);
                $('input[name="address-order"]').val(data.leader_id[count].alamat);
            },
            error: function(data) {
                alert("Harap Koreksi Kembali Form Isian Anda!");
                // console.log(data);
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
                $('input[name="name_player"]').val('');
                $('input[name="nick"]').val('');
                var sum = 1;
                $('#player_ke').each(function() {
                    sum += +$(this).text()||1;
                });
                var player = $('#player_ke').text();
                $('#player_ke').text(sum);
                // console.log(player);
                if ($('#player_ke').text() === '4') {
                    $('#addplayer').attr('hidden', true);
                    $('#submit-player').attr('hidden', false);
                }
                else if ($('#player_ke').text() === '5') {
                    $('#addplayer').attr('hidden', true);
                    $('#submit-player').attr('hidden', false);
                    $('#attention').attr('hidden', false);
                    $('input[name="id_game"]').attr('required', false);
                    $('input[name="nick"]').attr('required', false);
                    $('input[name="name_player"]').attr('required', false);
                }
                else if ($('#player_ke').text() === '8') {
                    $('#addplayer').attr('hidden', true);
                    $('#submit-player').attr('hidden', true);
                    $('#player').attr('hidden', true);
                    $('#detail_player').attr('hidden', true);
                    $('#form-player').attr('hidden', true);
                    $('#notice_player').attr('hidden', false);
                    $('#attention').attr('hidden', true);
                    $('#detail_orders').attr('hidden', false);
                    $('#logo_squad').attr('hidden', false);
                    gambar_squad()
                    $('#3').click();
                    midtrans();
                    var leader = $('input[name="token-order"]').val();
        console.log(leader);
                }
            },
            error: function() {
                alert("Harap diteliti Kembali!");
            }
        });
    });
</script>
<script type="text/javascript">
    function midtrans()
    {
        var name = $('input[name="name-order"]').val();
        var phone = $('input[name="phone-order"]').val();
        var email = $('input[name="email-order"]').val();
        // var address = $('input[name="address-order"]').val();
        var token = $('input[name="token-order"]').val();
        // console.log(address,name,phone,email,token);
        $.ajax({
            type: 'GET',
            url: '/midtrans?name=' + name + '&email=' + email + '&phone=' + phone,
            data:'_token = <?php echo csrf_token() ?>',
            success: function(data) {
                $('input[name="token-order"]').val(data.token);
                console.log(data);
                    // For example trigger on button clicked, or any time you need
                var payButton = document.getElementById('pay-button');
                    payButton.addEventListener('click', function () {
                    $('#pay-button').click();
                    // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                    window.snap.pay(data.token, {
                        onSuccess: function(result){
                            /* You may add your own implementation here */
                            // console.log(result);
                            // console.log(result.status_message);
                            $('input[name="status-order"]').val('SUKSES');
                            $('#order_id').text(result.order_id).removeClass('text-warning').removeClass('text-danger').addClass('text-success');
                            $('#pay-button').text('PEMBAYARAN SUKSES').prop('disabled', true);
                            $('#perhatian').attr('hidden', true);
                            $('#gopay-attention').attr('hidden', true);
                            order();
                        },
                        onPending: function(result){
                            /* You may add your own implementation here */
                            // console.log(result);
                            // console.log(result.status_message);
                            $('input[name="status-order"]').val('PENDING');
                            $('#order_id').text('Selesaikan Pembayaran').removeClass('text-danger').addClass('text-warning');
                            $('#pay-button').text('Lihat Status Pembayaran');
                        },
                        onError: function(result){
                            /* You may add your own implementation here */
                            // console.log(result);
                            // console.log(result.status_message);
                            $('input[name="status-order"]').val('GAGAL');
                            $('#order_id').text(result.order_id).removeClass('text-danger');
                            $('#pay-button').text('Lihat Status Pembayaran');
                            order()
                        },
                        onClose: function(){

                        }
                    })
                    // customer will be redirected after completing payment pop-up
                });
            },
        });
    }
</script>
<script>
    function order()
    {
        var status = $('input[name="status-order"]').val();
        var name = $('input[name="name-order"]').val();
        var phone = $('input[name="phone-order"]').val();
        var email = $('input[name="email-order"]').val();
        var token = $('input[name="token-order"]').val();
        var order = $('#order_id').text();
        var leader = $('input[name="token-order"]').val();
        console.log(leader);
        $.ajax({
            type: 'GET',
            url: '/order?email=' + email + '&phone=' + phone + '&status=' + status + '&snap_token=' + token + '&name=' + name + '&order_id=' + order,
            data:'_token = <?php echo csrf_token() ?>',
            success: function (data) {
                // alert('sukses menambahkan ke table order');
                $('#4').click();
                invoice();
            },
            error: function (data) {
                alert('Pembayaran Gagal, Harap hubungi Admin');
                console.log(data);
            }
        })
    }

    function gambar_squad()
    {
        var sumber_logo = $('#logo_squad_img').text();
        var src_attr = 'images/logo-squad/' + sumber_logo;
        console.log(src_attr);
        $('#logo_squad').attr('src', src_attr);
    }

    function invoice()
    {
        var order = $('#order_id').text();
        var url = 'invoice-details?order_id=' + order;
        $('#iframe').attr('src',url);
        $('#inpois').attr('hidden', false);
        $('#inpoiss').attr('hidden', false);
        $('#download').click(function () {
            var myIframe = document.getElementById("iframe").contentWindow;
                myIframe.focus();
                myIframe.print();
                return false;
        });
    }
</script>
<!-- Login Section Section Ends Here -->
