<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>error delete room</title>
    @include('path.cdn')

    <style>
        .att{
            width: 25rem;
        }

        .att ul li{
            list-style: none;
        }
    </style>
</head>

<body>
    <div class="card bg-secondary text-capitalize text-center att m-auto">
        <div class="card-header bg-dark hd">
            <h1 class="text-danger">error</h1>
        </div>
        <div class="card-body bd">
            <ul>
                <li class="text-light">maphong: {{ $data['maphong'] }} is undefine</li>
            </ul>
            <button class="btn btn-warning">access</button>
        </div>
    </div>
</body>

</html>
