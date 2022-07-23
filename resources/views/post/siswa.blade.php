<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <fieldset>
        <br><br>
        <table border="1" cellspacing="0" cellpadding="10" align="center">
            <tr>
                <th>TABEL SISWA</th>
            </tr>
        </table>
        <br> 
        <table border="1" cellspacing="0" cellpadding="10" align="center">
            <tr>
                <th>No Siswa</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
            </tr>
            @foreach ($siswa as $ssiswa)
            <tr>
                <td>{{$ssiswa['no_siswa']}}</td>
                <td>{{$ssiswa['nama']}}</td>
                <td>{{$ssiswa['jk']}}</td>
                <td>{{$ssiswa['jurusan']}}</td>
            </tr>
            @endforeach
        </table>
        <br><br><hr>
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
        <br><br><hr>
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
        <br><br>
    </fieldset>
</body>
</html>