<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('assets/web/css/invoices.css') }}"> --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/web/images/x-icon/01.png') }}">
    <title>Invoices User</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
    <style>
        body {
            -webkit-print-color-adjust: exact;
        }

        @media print {
            @page {
                margin: 0;
                size: landscape;
                padding: 0;
            }

            body {
                margin: 0.9cm;
            }
        }
        .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
            /* background-color: #E9575F;
            color: white; */
        }
        .table>:not(caption)>*>*{
            /* background-color: #500E64;
            color: white; */
        }
    </style>
</head>

<body>
    @foreach ($order as $item)
        <div class="card">
            <div class="card-header" style="background: #01163E">
                <div class="d-flex justify-content-between text-white">
                    <div>
                        <span>Tertanggal: <strong>{{ $item->created_at }}</strong></span>
                    </div>
                    <div>
                        <span class="text-end"> Status Registrasi: <strong>{{ $item->status }}</strong></span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="m-3 ms-1">
                    {!! $qrcode !!}
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <h6 class="mb-3">From:</h6>
                        <div>
                            <strong>Digifun Festival</strong>
                        </div>
                        {{-- <div>Madalinskiego 8</div> --}}
                        <div>Jl. Melati No.5A, Purwosari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57142</div>
                        <div>Email: digifun.fest@gmail.com</div>
                        <div>Phone: +62 812-2231-0801</div>
                    </div>

                    <div class="col-6">
                        <h6 class="mb-3">To:</h6>
                        <div>
                            <strong>{{ strToUpper($item->name) }}</strong>
                        </div>
                        <div><b>{{ ucfirst($item->leader->nama_tim) }}</b></div>
                        <div>{{ $item->alamat }}</div>
                        <div>Email: {{ $item->email }}</div>
                        <div>Phone: (+62) {{ $item->phone }}</div>
                    </div>
                </div>
                <div class="text-start mb-2">
                    <strong><b>Detail Tim</b></strong>
                </div>
                <div class="table-responsive-sm">
                    <table class="table table-striped table-bordered table-hover">
                        <thead style="background: #01163E" class="text-white">
                            <tr>
                                <th class="center">No</th>
                                <th>Nama Pemain</th>
                                <th>Nick Game</th>
                                <th class="center">ID Game</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                            ?>
                            @foreach ($tim as $tim )
                                <tr>
                                    <td class="center">{{$no++}}</td>
                                    <td class="left strong">{{ $tim->name }}</td>
                                    <td class="left strong">{{ $tim->nickname }}</td>
                                    <td class="right">{{ $tim->id_game }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
