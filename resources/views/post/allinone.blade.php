<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
</head>
<body>
    <center>
    <fieldset>
        <legend><strong>DATA</strong></legend>
        <br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>DATA PENGUNJUNG</th>
            </tr>
        </table>
        <br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID Pengunjung</th>
                <th>Nama Pengunjung</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>No Telpon</th>
                <th>No KTP</th>
            </tr>
            @foreach ($pengunjung as $ppengunjung)
            <tr>
                <td>{{$ppengunjung['id_pengunjung']}}</td>
                <td>{{$ppengunjung['nm_pengunjung']}}</td>
                <td>{{$ppengunjung['alamat']}}</td>
                <td>{{$ppengunjung['JK']}}</td>
                <td>{{$ppengunjung['no_tlp']}}</td>
                <td>{{$ppengunjung['no_ktp']}}</td>
            </tr>
            @endforeach
        </table>
        <br><hr>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>DATA KARYAWAN</th>
            </tr>
        </table>
        <br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID Karyawan</th>
                <th>Nama Karyawan</th>
                <th>Jenis Kelamin</th>
            </tr>
            @foreach ($karyawan as $kkaryawan)
            <tr>
                <td>{{$kkaryawan['id_karyawan']}}</td>
                <td>{{$kkaryawan['nm_karyawan']}}</td>
                <td>{{$kkaryawan['JK']}}</td>
            </tr>
            @endforeach
        </table>
        <br><hr>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>DATA TRANSAKSI</th>
            </tr>
        </table>
        <br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No Transaksi</th>
                <th>ID Pengunjung</th>
                <th>ID Karyawan</th>
                <th>Jumlah Kamar</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Keluar</th>
                <th>Lama Nginap</th>
                <th>Total Harga</th>
            </tr>
            @foreach ($transaksi as $ttransaksi)
            <tr>
                <td>{{$ttransaksi['no_transaksi']}}</td>
                <td>{{$ttransaksi['id_pengunjung']}}</td>
                <td>{{$ttransaksi['id_karyawan']}}</td>
                <td>{{$ttransaksi['jmlh_kamar']}}</td>
                <td>{{$ttransaksi['tgl_masuk']}}</td>
                <td>{{$ttransaksi['tgl_keluar']}}</td>
                <td>{{$ttransaksi['lama_nginap']}}</td>
                <td>{{$ttransaksi['total_harga']}}</td>
            </tr>
            @endforeach
        </table>
        <br><hr>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>DATA DETAIL TRANSAKSI</th>
            </tr>
        </table>
        <br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID DTL Transaksi</th>
                <th>No Transaksi</th>
                <th>No Kamar</th>
            </tr>
            @foreach ($detail as $ddetail)
            <tr>
                <td>{{$ddetail['id_dtl_transaksi']}}</td>
                <td>{{$ddetail['no_transaksi']}}</td>
                <td>{{$ddetail['no_kamar']}}</td>
            </tr>
            @endforeach
        </table>
        <br><hr>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>DATA KAMAR</th>
            </tr>
        </table>
        <br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No Kamar</th>
                <th>Jenis Kamar</th>
                <th>Harga</th>
            </tr>
            @foreach ($kamar as $kkamar)
            <tr>
                <td>{{$kkamar['no_kamar']}}</td>
                <td>{{$kkamar['jenis_kamar']}}</td>
                <td>{{$kkamar['harga']}}</td>
            </tr>
            @endforeach
        </table>
    </fieldset>
    </center>
</body>
</html>