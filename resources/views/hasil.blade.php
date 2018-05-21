<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Check</title>
    <link rel="stylesheet" href="{{url('css/materialize.min.css')}}">
</head>
<body>
    <div class="row">
        <div class="col s8 offset-s2">
            <h5>Judul Thesis</h5>
            <h6>{{$judul}}</h6>

            <table class="striped">
                <thead>
                    <tr>
                        <th>Dokumen Ke-</th>
                        <th>Jumlah Kata Sama</th>
                        <th>Jumlah Kata Berbeda</th>
                        <th>Persentase</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($hasil as $hasilx)
                    <tr>
                        @foreach ($hasilx as $x)
                        <td>{{$x}}</td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h5>{{$terima ? 'Judul Thesis Diterima' : 'Judul Thesis Ditolak'}}</h5>

        </div>
    </div>
    <script src="{{url('js/materialize.min.js')}}"></script>
</body>
</html>
