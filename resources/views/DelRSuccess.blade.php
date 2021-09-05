<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>success</title>
    @include('path.cdn')
</head>

<body>
    @foreach ($room as $view)
        <div class="card m-auto bg-dark text-capitalize">
            <div class="card-header bg-success text-center">
                <h1 class="card-header text-light">success</h1>
            </div>

            <div class="card-body">
                <p class="card-text text-light">ma phong: {{ $view->maphong }}</p>
                <p class="card-text text-light">ten phong: {{ $view->tenphong }}</p>
                <p class="card-text text-light">so phong: {{ $view->sophong }}</p>
                <p class="card-text text-light">loai: {{ $view->loai }}</p>
                <p class="card-text text-light">gia: {{ $view->gia }}</p>
            </div>
        </div>
    @endforeach
</body>

</html>
