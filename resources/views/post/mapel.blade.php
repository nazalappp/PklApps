<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Pelajaran</title>
</head>
<body>
    <fieldset>
        <br>
        <table border="1" cellspacing="0" cellpadding="10" align="center">
            <tr>
                <th>TABEL MATA PELAJARAN</th>
            </tr>
        </table>
        <br> 
        <table border="1" cellspacing="0" cellpadding="10" align="center">
            <tr>
                <th>Kode MP</th>
                <th>Nama MP</th>
                <th>SKS</th>
                <th>Semester</th>
            </tr>
            @foreach ($mapel as $mmapel)
            <tr>
                <td>{{$mmapel['kode_mp']}}</td>
                <td>{{$mmapel['nama_mp']}}</td>
                <td>{{$mmapel['sks']}}</td>
                <td>{{$mmapel['semester']}}</td>
            </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>