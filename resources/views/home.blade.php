<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STKI</title>
    <link rel="stylesheet" href="{{url('css/materialize.min.css')}}">
</head>
<body>
    <div class="row">
        <div class="col s6">
            <h5>Input Abstrak</h5>
            <form action="{{url('tokenizing')}}" method="POST">
                @csrf
            <div class="row">
                <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea" name="abstrak"></textarea>
                <label for="textarea1">Textarea</label>
                </div>
            </div>
            <button class="waves-effect waves-light btn" type="submit">Hapus Stopwords</button>
            </form>
        </div>
        <div class="col s6">
            <h5>Hasil Penghapusan StopWords</h5>
            @if (!empty($hasil))
                <p>
                    {{$hasil}}
                </p>
            @endif
        </div>
    </div>
    <script src="{{url('js/materialize.min.js')}}"></script>
</body>
</html>
