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
    <title>Invoices User</title>
    <style>
        body {
            -webkit-print-color-adjust: exact;
        }

        @media print {
            @page {
                margin: 0;
                size: portrait;
            }

            body {
                margin: 1.6cm;
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
        <div class="container-fluid mt-5">
            <div class="card">
                <div class="card-header" style="background: #01163E">
                    <div class="d-flex justify-content-between text-white">
                        <div>
                            <span>Tertanggal: <strong>{{ $item->created_at }}</strong></span>
                        </div>
                        <div>
                            <span class="text-end"> Status Pembayaran: <strong>{{ $item->status }}</strong></span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
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
                                        <td class="left strong">{{ $tim->nickname }}</td>
                                        <td class="right">{{ $tim->id_game }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="p-3">
                    <div class="text-start mb-2">
                        <strong><b>Rincian Pembayaran</b></strong>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead style="background: #01163E" class="text-white">
                                <tr>
                                    <th class="center">#</th>
                                    <th>Item</th>
                                    {{-- <th>Description</th>
    
                                        <th class="right">Unit Cost</th> --}}
                                    <th class="center">Qty</th>
                                    <th class="right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="center">1</td>
                                    <td class="left strong">Biaya Registrasi</td>
                                    {{-- <td class="left">Extended License</td>
    
                                        <td class="right">$999,00</td> --}}
                                    <td class="center">1</td>
                                    <td class="right">Rp. 50.000</td>
                                </tr>
                                <tr>
                                    <td class="center">2</td>
                                    <td class="left strong">Platform Fee</td>
                                    {{-- <td class="left">Extended License</td>
    
                                        <td class="right">$999,00</td> --}}
                                    <td class="center">1</td>
                                    <td class="right">Rp. 5.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-end me-4">
                        <strong><b>Grand Total: <span>Rp. 55.000</span></b></strong>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endforeach

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
    <script></script>
</body>

</html>
