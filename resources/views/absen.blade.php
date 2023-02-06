<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absen</title>
</head>
<body>
<form action="/proses_absen" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="" class="form-check-control">Scan RFID Siswa</label>
    <input type="number" name="rfid">
    <button type="submit">
        
    </button>
</form>
</body>
</html>
