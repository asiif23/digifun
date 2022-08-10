<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/web/css/invoices.css') }}">
    <title>Invoices User</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row m-auto">
            <div class="col-md-12">
                <div class="row">
                    <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                        <div class="row">
                            <div class="receipt-header">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="receipt-left">
                                        <img class="img-responsive" alt="iamgurdeeposahan"
                                            src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                            style="width: 71px; border-radius: 43px;">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                                    <div class="receipt-right">
                                        <h5>Company Name.</h5>
                                        <p>+1 3649-6589 <i class="fa fa-phone"></i></p>
                                        <p>company@gmail.com <i class="fa fa-envelope-o"></i></p>
                                        <p>USA <i class="fa fa-location-arrow"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="receipt-header receipt-header-mid">
                                <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                    <div class="receipt-right">
                                        <h5>Customer Name </h5>
                                        <p><b>Mobile :</b> +1 12345-4569</p>
                                        <p><b>Email :</b> customer@gmail.com</p>
                                        <p><b>Address :</b> New York, USA</p>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="receipt-left">
                                        <h3>INVOICE # 102</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-md-9">Payment for August 2016</td>
                                        <td class="col-md-3"><i class="fa fa-inr"></i> 15,000/-</td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9">Payment for June 2016</td>
                                        <td class="col-md-3"><i class="fa fa-inr"></i> 6,00/-</td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9">Payment for May 2016</td>
                                        <td class="col-md-3"><i class="fa fa-inr"></i> 35,00/-</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <p>
                                                <strong>Total Amount: </strong>
                                            </p>
                                            <p>
                                                <strong>Late Fees: </strong>
                                            </p>
                                            <p>
                                                <strong>Payable Amount: </strong>
                                            </p>
                                            <p>
                                                <strong>Balance Due: </strong>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <strong><i class="fa fa-inr"></i> 65,500/-</strong>
                                            </p>
                                            <p>
                                                <strong><i class="fa fa-inr"></i> 500/-</strong>
                                            </p>
                                            <p>
                                                <strong><i class="fa fa-inr"></i> 1300/-</strong>
                                            </p>
                                            <p>
                                                <strong><i class="fa fa-inr"></i> 9500/-</strong>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
        
                                        <td class="text-right">
                                            <h2><strong>Total: </strong></h2>
                                        </td>
                                        <td class="text-left text-danger">
                                            <h2><strong><i class="fa fa-inr"></i> 31.566/-</strong></h2>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        
                        <div class="row">
                            <div class="receipt-header receipt-header-mid receipt-footer">
                                <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                    <div class="receipt-right">
                                        <p><b>Date :</b> 15 Aug 2016</p>
                                        <h5 style="color: rgb(140, 140, 140);">Thanks for shopping.!</h5>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="receipt-left">
                                        <h1>Stamp</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
    </div>

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
</body>

</html>
