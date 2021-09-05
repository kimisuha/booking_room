<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Remove User View</title>
    @include('path.cdn')
    <link rel="stylesheet" href="css/RemoveUser.css">

</head>

<body>
    <div class="container">
        <div class="card m-auto at">
            <div class="card-header bg-warning ath">
                <h1>remove user</h1>
                <p>check your infor, if true and want remove your user, click accept</p>
            </div>
            <div class="card-body atb">
                @foreach ($user as $clinfo)
                    <ul>
                        <li>ma kh: {{ $clinfo->makh }}</li>
                        <li>ten: {{ $clinfo->hotenkh }}</li>
                        <li>ngay sinh: {{ $clinfo->ngaysinhkh }}</li>
                        <li>so cm: {{ $clinfo->socmkh }}</li>
                        <li>so dien thoai: {{ $clinfo->sdtkh }}</li>
                        <li>email: {{ $clinfo->emailkh }}</li>
                        <li>so tk: {{ $clinfo->sotkkh }}</li>
                        <li>loai tk: {{ $clinfo->loaitkkh }}</li>

                    </ul>



            </div>

            <button class="btn btn-primary m-auto" type="submit" value="{{ $clinfo->makh }}">access</button>
            @endforeach
        </div>
    </div>
</body>

</html>
