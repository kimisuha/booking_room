<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>delete user</title>
    @include('path.cdn')
</head>

<body>
    <form action="{{ url('http://localhost/booking_room/public/admin/delete-user') }}" method="post">
        <div class="form-group">
            @csrf
            <label for="setId">input your id need delete</label>
            <input type="text" id="setId" class="form-control" name="id">
        </div>
        <button class="btn btn-primary" type="submit">access</button>
    </form>
</body>

</html>
