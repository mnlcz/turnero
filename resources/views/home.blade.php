<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Turnero</title>
    @vite(['resources/js/app.js'])
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 5%;
            font-size: 24px;
        }

        .form-data {
            margin-bottom: 10px
        }

        .submit-btn {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Trámite nro {{ $proxTurno }}</h2>
        <form method="post" action="{{ route('turno.store') }}">
            @csrf
            @method('post')
            <div class="form-data">
                <label class="form-label" for="type">Tipo de trámite:</label>
                <select class="form-select" name="type" id="type">
                    <option value="CONSULTA GENERAL">Consulta general</option>
                    <option value="RECLAMO">Reclamo</option>
                    <option value="TARIFA SOCIAL">Tarifa social</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary submit-btn">Siguiente</button>
        </form>
    </div>
</body>

</html>
