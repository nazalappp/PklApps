<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peserta</title>
</head>
<body>
    <fieldset>
        <br>
        <table border="1" cellspacing="0" cellpadding="10" align="center">
            <tr>
                <th>TABEL PESERTA</th>
            </tr>
        </table>
        <br> 
        <table border="1" cellspacing="0" cellpadding="10" align="center">
            <tr>
                <th>No Siswa</th>
                <th>Kode MP</th>
            </tr>
            @foreach ($peserta as $ppeserta)
            <tr>
                <td>{{$ppeserta['no_siswa']}}</td>
                <td>{{$ppeserta['kode_mp']}}</td>
            </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>