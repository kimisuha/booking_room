<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update status view</title>
    @include('path.cdn')
</head>
<body>
    <div class="card bg-dark text-capitalize m-auto">
        <div class="card-header bg-success">
            <h1 class="text-center text-light">success update status</h1>
        </div>

        <div class="card-body">
            @foreach ($room as $item)
                <p class="text-light card-text">ma phong: {{ $item['maphong'] }}</p>
                <p class="text-light card-text">ten phong: {{ $item['tenphong'] }}</p>
                <p class="text-light card-text">so phong: {{ $item['sophong'] }}</p>
                <p class="text-light card-text">tinhtrang phong: {{ $item['tinhtrang'] }}</p>
            @endforeach
        </div>
    </div>
</body>
</html>