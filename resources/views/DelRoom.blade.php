<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Room</title>
    @include('path.cdn')

    <style>
        .bg {
            width: 55rem;
        }

    </style>
</head>

<body>

    <div class="card m-auto bg-dark text-capitalize bg">
        <form action="{{ url('http://localhost/booking_room/public/admin/delete-room') }}" method="post">
            @csrf
            <div class="card-header bg-danger">
                <h1 class="card-title text-light text-center">delete room</h1>
            </div>
            <div class="card-body">
                <label for="iMaphong" class="form-label">input maphong need delete</label>
                <input type="text" class="form-control" id="iMaphong" name="maphong">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-danger mt-3">submit</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
