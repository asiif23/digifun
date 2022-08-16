<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cek Order ID</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
  </head>
  <body>
    <div class="container mt-5 account-form">
        <h5 class="text-center">Validasi Order id Peserta Tournament</h5>
        <div class="form-group mb-3">
            <label for="filter">
            </label>
            <input type="number" class="form-control" id="filter" placeholder="Masukkan Order ID">
          </div>
    </div>
    <div class="container m-auto p-5 pt-0 text-center">
        <div style="border-style:groove;" class="p-1" id="result">
            <span id="1" class="text-center text-light">Masukkan Order ID Terlebih Dahulu</span>
            <span id="memuat" class="text-center text-warning" hidden>Memuat...
                <span class="spinner-border spinner-border-sm text-end text-warning" role="status" aria-hidden="true" id="3" hidden></span>
            </span>
            <span id="2" style="color: red" class="text-center mt-5" hidden>Ooooppss.. !! Order ID Tidak Ditemukan.</span>
        </div>
    </div>
    <div class="container mb-3" id="isi" hidden>
        <iframe id="iframe" style="width: 100%; height: 700px;" src="" frameborder="0"></iframe>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        $('#filter').keyup(function(){
            var value = $('#filter').val();
            var url = 'check?order_id=' + value;
            // console.log(value);
            $.ajax({
                type: 'GET',
                url: 'filter?order_id=' + value,
                success: function(data){
                    // console.log(data);
                    if(data.length > 0){
                        $('#result').attr('hidden', true);
                        $('#isi').attr('hidden', false);
                        $('#3').attr('hidden', true);
                        $('#iframe').attr('src',url);
                        $('#memuat').attr('hidden', true);
                    }
                    else if(value == ''){
                        $('#result').attr('hidden', false);
                        $('#isi').attr('hidden', true);
                        $('#1').attr('hidden', false);
                        $('#2').attr('hidden', true);
                        $('#3').attr('hidden', true);
                        $('#memuat').attr('hidden', true);
                    }
                    else{
                        $('#result').attr('hidden', false);
                        $('#iframe').attr('src','');
                        $('#isi').attr('hidden', true);
                        $('#1').attr('hidden', true);
                        $('#2').attr('hidden', false);
                        $('#3').attr('hidden', true);
                        $('#memuat').attr('hidden', true);
                    }
                },
            })
        });
    </script>
    <script>
        $(document).ajaxSend( function(){
            $('#1').attr('hidden', true);
            $('#2').attr('hidden', true);
            $('#3').attr('hidden', false);
            $('#memuat').attr('hidden', false);
            $('#isi').attr('hidden', true);
        })
    </script>
  </body>
</html>
