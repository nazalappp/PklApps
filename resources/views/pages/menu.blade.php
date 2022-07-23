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
           <strong> Menu</strong>
        </legend>
        @foreach ($menu as $mennu)
        <ul>
            <li>{{$mennu['beranda']}}</li><br>
            <li>{{$mennu['berita']}}</li>
            <ul>
                <li>{{$mennu['list']}}</li>
                @foreach ($mennu['olga'] as $olga)
                <ul>
                    <li>{{$olga}}</li>
                </ul>
                @endforeach
                @foreach ($mennu['list2'] as $list2)
                <li>{{$list2}}</li>
                @endforeach
            </ul>
            <li>{{$mennu['tentang']}}</li> <br> 
        </ul>
        @endforeach
    </fieldset>
</body>
</html>