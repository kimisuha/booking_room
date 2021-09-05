<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="this a admin page of booking room demo website" />
    <title>Admin page - Booking Room project demo!</title>

    @include('path.cdn')
    <link rel="stylesheet" href="userpage.css">
    <link rel="stylesheet" href="adminstyle.css">
</head>

<body>

    @include('path.uhead')

    <div class="row full">
        <div class="col-md-2">
            @include('path.atoolbar')
        </div>

        <div class="col-md-10">
            @include('path.user-table')
            @include('path.room-table')
        </div>
    </div>

    @include('path.afoot')

</body>

</html>
