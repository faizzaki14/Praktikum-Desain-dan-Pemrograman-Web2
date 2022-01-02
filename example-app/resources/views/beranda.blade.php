<?php
    $array = [1,2,3,4,5,6,7,8,9,10];
    $nama = "Faiz";
    $nilai = 90;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Ini Beranda</h1>

    <p>
        {{ "Selamat Datang" }}
    </p>

    @if (1 + 1 == 2)
    <p>
        {{ "Jawaban Benar" }}
    </p>

    @endif

    @for ($i = 0; $i < count($array); $i++) <p>
        {{ $array[$i] }}
        </p>
        @endfor
        <hr>
        <h1>Percabangan</h1>
        @if (1 + 1 == 2)
        <p>
            {{ "Jawaban Benar" }}
        </p>
        @else
        <p>
            {{ "Jawaban Salah" }}
        </p>


        @endif

        @if ($nama == "Faiz")
        <p>
            {{ "Nama Saya Faiz" }}
        </p>

        @elseif ($nama == "Rizki")
        <p>
            {{ "Nama Saya Rizki" }}
        </p>

        @else
        <p>
            {{ "Nama Saya Tidak Diketahui" }}
        </p>

        @endif

        <hr>
        <h1>Percabangan Switch</h1>

        @switch($nilai)
        @case(90)
        {{ "Nilai Anda A" }}
        @break
        @case(80)
        {{ "Nilai Anda B" }}
        @break
        @case(70)
        {{ "Nilai Anda C" }}
        @break

        @default
        {{ "Nilai Anda D" }}

        @endswitch

</body>

</html>
