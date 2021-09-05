<div class="card bg-secondary att">
    <div class="card-header bg-dark hd">
        <h1 class="text-success">success</h1>
    </div>
    <div class="card-body bd">
        <ul>
            <li class="text-light">{{ $data->id }}</li>
            <li class="text-light">user: {{ $data->name }}</li>
            <li class="text-light">create at: {{ $data->create_at }}</li>
            <li class="text-light">email: {{ $data->email }}</li>
            <li class="text-light">this user has been delete</li>
        </ul>
        <button class="btn btn-success">access</button>
    </div>
</div>
