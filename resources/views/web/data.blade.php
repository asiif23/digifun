<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Peserta Tournament DIGIFUNFEST 2022</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/swiper.min.css') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/web/images/x-icon/01.png') }}">

    <style>
        .dt-buttons{
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .buttons-excel,.buttons-csv,.buttons-pdf,.buttons-print{
            background-color: white !important;
            color: black;
            border-radius: 20px;
            border: none;
        }
        .buttons-excel:hover,.buttons-csv:hover,.buttons-pdf:hover,.buttons-print:hover{
            background-color: rgb(15, 53, 155) !important;
            color: rgb(250, 250, 250);
            /* border-radius: 20px; */
            border: none !important;
            width: 70px;
            font-weight: bold;
        }
        .dataTables_empty{
            color: rgb(250, 250, 250) !important;
        }
        .paginate_button{

        }
        .page-link{
            border-radius: 5px !important;
            color: rgb(15, 53, 155) !important;
            font-weight: bold;
            margin-left: 10px;
            margin-top: 5px;
        }
        .page-link:hover{
            background: rgb(15, 53, 155) !important;
            color: rgb(250, 250, 250) !important;
        }
        .page-item.active .page-link{
            color: wheat !important;
            background: transparent !important;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
    <h3 class="text-center mt-5">Data Peserta Lengkap</h3>
    <div class="container m-auto p-3" style="border-style:groove;">
        <table id="example" class="table table-responsive table-hover table-bordered mt-5" style="width:100%">
                <thead class="bg-black text-light">
                    <tr>
                        <th>No</th>
                        <th>Order ID</th>
                        <th>Nama Leader</th>
                        <th>Nama Tim</th>
                        <th>Email</th>
                        <th>No. Handphone</th>
                        <th>Asal Kota</th>
                        <th>Logo</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php
                        $no = 1;
                    ?>
                    @foreach ($order as $item)
                        <tr>
                            <td class="text-white">{{ $no++ }}</td>
                            <td class="text-white">{{ $item->order_id }}</td>
                            <td class="text-white">{{ $item->leader->name }}</td>
                            <td class="text-white">{{ $item->leader->nama_tim }}</td>
                            <td class="text-white">{{ $item->email }}</td>
                            <td class="text-white">
                                @if (substr($item->phone,0,1) == '0')
                                    <a href="https://wa.me/{{ substr_replace($item->phone,"62",0,1) }}?text={{ urlencode('Hai Fun People, Join Grup *Technical Meeting* Free Fire Turnamen Digifun Festival 2022
                                        dengan Klik Link berikut: https://chat.whatsapp.com/B7TOU3YdBfSAgPGu5ZUyuV') }}">{{ $item->phone }}</a>
                                @else
                                    <a href="https://wa.me/62{{ $item->phone }}?text={{ urlencode('Hai Fun People, Join Grup *Technical Meeting* Free Fire Turnamen Digifun Festival 2022
                                    dengan Klik Link berikut: https://chat.whatsapp.com/B7TOU3YdBfSAgPGu5ZUyuV') }}">{{ $item->phone }}</a>
                                @endif
                            </td>
                            <td class="text-white">{{ $item->alamat }}</td>
                            <td>
                                <a href="{{ url('images/logo-squad/' . $item->leader->logo) }}" download="{{ $item->leader->nama_tim }}">
                                    <img class="img-fluid" style="height: 50px" src="{{ asset('images/logo-squad/' . $item->leader->logo) }}" alt="">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot class="bg-black text-light">
                    <tr>
                        <th>No</th>
                        <th>Order ID</th>
                        <th>Nama Leader</th>
                        <th>Nama Tim</th>
                        <th>Email</th>
                        <th>No. Handphone</th>
                        <th>Asal Kota</th>
                        <th>Logo</th>
                    </tr>
                </tfoot>
        </table>
    </div>
    </div>

{{-- Script --}}


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
<script>
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: true,
        buttons: [  'excel', 'pdf', 'csv']
    } );

    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>
</body>
</html>
