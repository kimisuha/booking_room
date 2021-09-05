<div class="card table-responsive">
    <table class="table tb-user">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">verified at</th>
                <th scope="col">password</th>
                <th scope="col">remembertoken</th>
                <th scope="col">create at</th>
                <th scope="col">update at</th>
            </tr>
        </thead>
        @foreach ($user as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->email_verified_at }}</td>
                <td>{{ $item->password }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
            </tr>

        @endforeach
    </table>

</div>
