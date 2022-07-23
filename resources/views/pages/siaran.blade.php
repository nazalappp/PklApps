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
        <center>
        <legend>
            <br>
            <strong>Jadwal Siaran TV</strong> <br><br><hr>
        </legend>
        <br>
        <table border="1" cellpadding="10" cellspacing="0">
            @foreach ($siaran as $penyiaran)
            <tr>
                <th colspan="3">{{$penyiaran['saluran']}}</th>
            </tr>
            <tr>
                <th>Nama Siaran</th>
                <th>Jam Tayang</th>
                <th>Tanggal</th>
            </tr>
            @foreach ($penyiaran['jadwal'] as $jadwal)
            <tr>
                <td>{{$jadwal['siaran']}}</td>
                <td>{{$jadwal['jam']}}</td>
                <td>{{$jadwal['tanggal']}}</td>
            </tr>
            @endforeach
            @endforeach
        </table>
        </center>
    </fieldset>
</body>
</html>