<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="containerfluid mt-5" style="text-align:center;">
        <h3>
            <?php
            $jam = now('Asia/Jakarta')->format('H:i:s');
            ?>
            Silahkan Scan Kartu anda Untuk Absen:
            @if ($jam >= '05:00:00' && $jam <= '09:30:00')
                Masuk
            @elseif ($jam >= '09:31:00' && $jam <= '10:10:00')
                Istirahat
            @elseif ($jam >= '10:11:00' && $jam <= '11:00:00')
                Kembali
            @else
                Pulang
            @endif
        </h3>
        <img src="{{ asset('images/scan.gif') }}" style="width:600px">
        <form action="proses" method="POST">
            @csrf
            <input type="text" name="absen" autofocus>
        </form>
    </div>
</body>
<script></script>

</html>
