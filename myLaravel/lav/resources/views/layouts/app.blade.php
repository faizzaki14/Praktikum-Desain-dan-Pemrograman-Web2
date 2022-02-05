<html>

<head>
    <title>Tubes DDPW 2 @yield('title')</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #636b79;
            color: white;
            text-align: center;
        }

        body {
            background-color: #393E46;
            color: white;
            padding: 1%;
        }
    </style>

</head>

<body>
    @section('sidebar')


    @show
    <div class="container">
        @yield('content')
        <p>CariKerja.com merupakan sebuah website untuk mencari pekerjaan yang ada. anda dapat melihat pekerjaan yang
            sudah tersedia maupun menambah lowongan pekerjaan baru. Silahkan menambah lowongan pekerjaan baru dengan
            menekan button tambah disudut kanan atas</p>
    </div>
    <div class="text-center footer">

        <h5>Created by : Faiz Zaki Ramadhan</h5>

    </div>
</body>

</html>
