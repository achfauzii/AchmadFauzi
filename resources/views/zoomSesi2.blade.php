<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>Halaman Coba</h1></center>
    <div>
        <h2>looping angka :</h2>
        @for ($i=1; $i<=5; $i++)
            <h2>{{ $i }}</h2>
        @endfor

        @php
        echo 'Bilangan Genap : ';
            for($i=1; $i<=10; $i++){
                if ($i%2 == 0) {
                    echo $i;
                }
            }
        echo "<br>";
        $tinggi_segitiga = 10;
        for($i = 1; $i <= $tinggi_segitiga; $i++) {
            for($j = 1; $j <= $i; $j++) {
            echo " *";
            }
            echo "<br>";
        }  
        @endphp
    </div>

    <img src="{{asset('img/zoomSesi2.jpg')}}" alt="" width="400" srcset="">
    
</body>
</html>