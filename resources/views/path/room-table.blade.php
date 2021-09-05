<div class="card table-responsive">
    <table class="table tb-room">
        <thead>
            <tr>
                <th scope="col">maphong</th>
                <th scope="col">tenphong</th>
                <th scope="col">sophong</th>
                <th scope="col">tinhtrang</th>
                <th scope="col">loai</th>
                <th scope="col">gia</th>

            </tr>
        </thead>
        @foreach ($room as $item)
            <th scope="row">{{ $item->maphong }}</th>
            <td>{{ $item->tenphong }}</td>
            <td>{{ $item->sophong }}</td>
            <td>{{ $item->tinhtrang }}</td>
            <td>{{ $item->loai }}</td>
            <td>{{ $item->gia }}</td>
        @endforeach
    </table>

</div>
