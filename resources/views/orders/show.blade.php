<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script
            type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{config('midtrans.client_key')}}"></script>
        <title>Bootstrap demo</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
            crossorigin="anonymous">
    </head>
    <body>
        <div class="card" style="width: 18rem;">
            <img src="{{asset('img/pisang.jpeg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <table>
                    <tr>
                        <td>Nama :
                            {{$data->name}}</td>
                    </tr>
                    <tr>
                        <td>Alamat :
                            {{$data->alamat}}</td>
                    </tr>
                    <tr>
                        <td>Telepon :
                            {{$data->telepon}}</td>
                    </tr>
                    <tr>
                        <td>Qty :
                            {{$data->qty}}</td>
                    </tr>
                    <tr>
                        <td>Price :
                            {{$data->total_price}}</td>
                    </tr>
                </table>
                <button id="pay-button" class="btn btn-danger">Bayar Sekarang >></button>

            </div>

        </div>
        <script type="text/javascript">
            // For example trigger on button clicked, or any time you need
            var payButton = document.getElementById('pay-button');
            payButton.addEventListener('click', function () {
                // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your
                // transaction token
                window
                    .snap
                    .pay('{{$snapToken}}');
                // customer will be redirected after completing payment pop-up
            });
        </script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
            integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
            crossorigin="anonymous"></script>
    </body>
</html>