<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view bill</title>
    @include('path.cdn')

     <style>
.cd{
    width: 25rem;
}

        .bg ul li {
            list-style: none;
        }
    
    </style>
</head>

<body>
    <div class="card bg-dark text-capitalize m-auto cd">
        <div class="card-header bg-success">
            <h1 class="card-title text-center text-light">bill</h1>
        </div>
        @if ($user)
            @foreach ($user as $data)
                <div class="card-body text-light">
                    <ul>
                        <li class="text-light">ma khach hang: {{ $data['makh'] }}</li>
                        <li class="text-light">ten khach hang: {{ $data['tenkh'] }}</li>
                        <li class="text-light">ma phong: {{ $data['maphong'] }}</li>
                        <li class="text-light">ten phong: {{ $data['tenphong'] }}</li>
                        <li class="text-light">so phong: {{ $data['sophong'] }}</li>
                        <li class="text-light">ngay giao dich: {{ $data['ngaygd'] }}</li>
                        <li class="text-light">ngay bat dau: {{ $data['ngaybd'] }}</li>
                        <li class="text-light">thoi gian su dung: {{ $data['tgsudng'] }}</li>
                        <li class="text-light">tong tien: {{ $data['tongtien'] }}</li>
                        <li class="text-light">hinh thuc thanh toan: {{ $data['httt'] }}</li>
                    </ul>

                </div>
            @endforeach
    
@else
        @foreach ($request as $data)
        <div class="card-body text-light">
            <h1 class="card-text text-light">{{ $data->id }} can't be find!</h1>
        </div>
        @endforeach
@endif
    </div>
</body>

</html>
