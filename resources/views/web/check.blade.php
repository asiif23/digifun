<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
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
                            <span class="text-end"> Status Pembayaran: <strong>{{ $item->status }}</strong></span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-6">
                            {{-- <h6 class="mb-3">To:</h6> --}}
                            <div>
                                <strong>{{ strToUpper($item->name) }}</strong>
                            </div>
                            <div><b>{{ ucfirst($item->leader->nama_tim) }}</b></div>
                            <div>{{ $item->alamat }}</div>
                            <div>Email: {{ $item->email }}</div>
                            <div>Phone: (+62) {{ $item->phone }}</div>
                        </div>
                        <div class="col-6 text-end">
                            <img src="{{ asset('images/logo-squad/' . $item->leader->logo) }}" alt="{{ $item->leader->nama_tim }}" style="height: 150px;">
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    {{-- <script>
        $('#')
    </script> --}}
  </body>
</html>
