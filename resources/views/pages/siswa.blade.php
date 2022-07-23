<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            <b>Data Siswa</b>
        </legend>
        @foreach ($siswa as $murid)
        Id : {{$murid['id']}} <br>
        Nama : {{$murid['name']}} <br>
        Umur : {{$murid['age']}} <br>
        Status :
        @if ($murid['age'] >= 17)
            Anda berhak mendaatkan KTP
        @else 
            Anda belum berhak mendapatkan KTP
        @endif
        <br>
        @foreach ($murid['mapel'] as $mapel)
        <li>{{$mapel}}</li>
        @endforeach
        <hr>
        @endforeach
    </fieldset>
</body>
</html>