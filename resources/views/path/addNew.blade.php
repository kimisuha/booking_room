<div class="card bg-dark m-auto text-capitalize text-center">
    <div class="card-header bg-success border-bottom-2">
        <h1 class="card-title ">add new room</h1>
    </div>

    <div class="card-body ">
        <form action="{{ url('http://localhost/booking_room/public/admin/new-room') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <label for="Select" class="mb-1">room option</label>
                    <select name="select" id="Select" class="form-select form-select-lg mb-3"
                        aria-label=".form-select-lg">
                        <option value="don">phong don</option>
                        <option value="doi">phong doi</option>
                        <option value="vip">phong vip</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="NameR" class="form-label">name of room</label>
                    <input type="text" id="NameR" class="form-control" name="name">
                </div>
                <div class="col-md-2">
                    <label for="Nroom" class="form-label">room number</label>
                    <input type="text" name="roomN" id="Nroom" class="form-control">
                </div>

                <div class="col-md-3">
                    <label for="Price" class="form-label">price of room</label>
                    <input type="number" name="price" id="Price" min="0" max="200000" step="100" class="form-control">
                </div>

            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-success" type="submit">access</button>
            </div>
        </form>
    </div>
</div>
