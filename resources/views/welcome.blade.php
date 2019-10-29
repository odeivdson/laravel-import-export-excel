<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <title>Laravel - Import/Export Excel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background: #000428;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #004e92, #000428);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to left, #004e92, #000428); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="card bg-light mt-3">
            <div class="card-header">
                <h1>Laravel 6.4 + Excel</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Importar dados</button>
                    <a class="btn btn-warning" href="{{ route('export') }}">Exportar Dados</a>
                </form>
            </div>
        </div>

        <div class="card bg-light mt-3">
            <div class="card-header">
                <h1>Usuários cadastrados no banco de dados</h1>
            </div>

            <div class="card-body">

                <table class="table">
                    <thead>
                    <tr>
                        <th> Nome</th>
                        <th> Email</th>
                        <th> created_at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td> {{$user->name}} </td>
                            <td> {{$user->email}} </td>
                            <td> {{$user->created_at}} </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>


    </div>
    </body>
</html>
