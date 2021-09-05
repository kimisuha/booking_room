<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attention</title>
    @include('path.cdn')
    <link rel="stylesheet" href="app/success-attention.css">

</head>

<body>
    <div class="container attention">
        <div class="card" style="border: 1px solid black; border-radius: 0.5rem;">
            <div class="title">
                <h3>{{ $title }}</h3>
                <h2>thong tin</h2>
            </div>

            <ul>
                <li></li>
            </ul>

            <button class="btn btn-warning" style="border-top: 1px solid yellow; border-radius: 0.5rem;">close</button>
        </div>
    </div>

</body>

</html>
