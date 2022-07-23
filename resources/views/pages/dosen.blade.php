<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset><br>
        <center>
        <legend>
            <strong>Data Kampus</strong><br><br>
        </legend>
        @foreach ($dosen as $Dosen)
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Nama Dosen</th>
                <th>Mata Kuliah</th>
            </tr>
            <tr>
                <td>{{$Dosen['nama']}}</td>
                <td>{{$Dosen['matkul']}}</td>
            </tr><hr>
        </table>

        @php
            $no = 1;
            $nilai = 0;
        @endphp

        <br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Nilai</th>
                <th>Grade</th>
            </tr>
            @foreach ($Dosen['mahasiswa'] as $Mahasiswa)
            <tr>
                <td>{{$no}}</td>
                <td>{{$Mahasiswa['namamahasiswa']}}</td>
                <td>{{$Mahasiswa['nilai']}}</td>
                <td>
                @if($Mahasiswa['nilai'] >= 90 && $Mahasiswa['nilai'] <= 100)
                    A    
                @elseif($Mahasiswa['nilai'] >= 80 && $Mahasiswa['nilai'] <= 89)
                    B                
                @elseif($Mahasiswa['nilai'] >= 70 && $Mahasiswa['nilai'] <= 79)
                    C    
                @elseif($Mahasiswa['nilai'] >= 50 && $Mahasiswa['nilai'] <= 69)
                    D
                @elseif($Mahasiswa['nilai'] <= 49 && $Mahasiswa['nilai'] >= 0)
                    E
                @endif
                </td>
            </tr>
            @php
            $no++;
            $nilai += $Mahasiswa['nilai'];
            $rata = $nilai / count($Dosen['mahasiswa']);
            if($rata >= 90 && $rata <= 100){
                $grade = 'A';
            }
            elseif($rata >= 80 && $rata <= 89){
                $grade = 'B';
            }                
            elseif($rata >= 70 && $rata <= 79){
                $grade = 'C';
            }    
            elseif($rata >= 50 && $rata <= 69){
                $grade = 'D';
            }
            elseif($rata <= 49 && $rata >= 0){
                $grade = 'E';
            }
            @endphp
            @endforeach
        </table>
        <br>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <td><strong>Total Nilai</strong></td>
                <td> : </td>
                <td>{{$nilai}}</td>
            </tr>
            <tr>
                <td><strong>Rata-rata</strong></td>
                <td> : </td>
                <td>{{$rata}}</td>
            </tr>
            <tr>
                <td><strong>Grade</strong></td>
                <td> : </td>
                <td>{{$grade}}</td>
            </tr>
        </table>
        <br>
        @endforeach
        </center>
    </fieldset>
</body>
</html>