<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data</title>
    <link rel="stylesheet" href="{{url('css/materialize.min.css')}}">
</head>
<body>
    <div class="row">
        <div class="col s8 offset-s2">
            <h5>Input Abstrak</h5>
            <form action="{{route('inputdata')}}" method="POST">
            @csrf

            <div class="row">
                <div class="input-field col s12">
                    <input id="judul" type="text" class="validate" name="judul">
                    <label for="judul">Judul</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="abstrak" class="materialize-textarea" name="abstrak"></textarea>
                    <label for="abstrak">Abstrak</label>
                </div>
            </div>
            <button class="waves-effect waves-light btn" type="submit">Input Dokumen</button>
            </form>
        </div>
    </div>
    <script src="{{url('js/materialize.min.js')}}"></script>
</body>
</html>
