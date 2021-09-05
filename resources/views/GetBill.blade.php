<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bill</title>
    @include('path.cdn')
</head>
<body>
    <form action="{{ url('http://localhost/booking_room/public/admin/get-bill') }}" method="post">
        @csrf
        <label for="Id" class="form-label mb-3">input id of client need get the bill</label>
        <input type="text" class="form-control" id="Id" name="id">

        <button type="submit" class="btn btn-primary">access</button>
    </form>
</body>
</html>