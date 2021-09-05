<div class="container">
    <div class="card bg-dark text-capitalize">
        <form action="http://localhost/booking_room/public/admin/set-room" method="post">
            @csrf
            <div class="row">
                <div class="col-md-2">
                    <label for="Name" class="form-label" aria-describedby="name">your name</label>
                    <input type="text" class="form-control" id="Name" name="name">
                </div>
                <div class="col-md-1">
                    <label for="Id" class="form-label" aria-describedby="id">your id</label>
                    <input type="text" name="id" class="form-control" id="Id">
                </div>
                <div class="col-md-1">
                    <label for="Maphong" class="form-label" aria-describedby="idroom">room id</label>
                    <input type="text" name="maphong" id="Maphong" class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="Tenphong" class="form-label" aria-describedby="roomname">name of
                        room</label>
                    <input type="text" name="tenphong" id="Tenphong" class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="Ngaybd" class="form-label" aria-describedby="date">your date begin use</label>
                    <input type="date" name="ngaybd" id="Ngaybd" class="form-control">
                </div>
                <div class="col-md-1">
                    <label for="Tgsudung" class="form-label" aria-describedby="usedate">used time</label>
                    <input type="number" name="tgsudng" id="Tgsudung" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="Htthanhtoan" class="form-label" aria-describedby="type">pay type</label>
                    <input type="text" name="ht" id="Htthanhtoan" class="form-control">
                </div>
            </div>
            <div class="col d-flex justify-content-center mt-3">
                <button class="btn btn-primary"><span>access</span></button>
            </div>
        </form>
    </div>
</div>
