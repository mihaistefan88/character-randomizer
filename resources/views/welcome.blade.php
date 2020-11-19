<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Character randomizer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/superhero/bootstrap.min.css" integrity="sha384-HnTY+mLT0stQlOwD3wcAzSVAZbrBp141qwfR4WfTqVQKSgmcgzk+oP0ieIyrxiFO" crossorigin="anonymous">

        <style>
            html, body{height: 100%;}
            .full-page{height: 100vh;width: 100vw;}
            body {
                font-family: 'Nunito';

            }
        </style>
    </head>
    <body class="antialiased h-100">
        <div class="container h-100">
            @if (!empty($result))
                <div class="result p-3 m-3 border-bottom border-dark">
                    <table class="m-auto">
                @foreach ($result as $key => $value)
                    <tr>
                    <td><strong class="mr-5">{{$key}}</strong></td>
                    <td class="text-right"><em>{{$value}}</em></td>
                    </tr>
                @endforeach
                    </table>
                </div>
            @endif
            <form method="post" class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary">Randomize character</button>
                <input type="hidden" name="rand" value="1" />
                @csrf
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
