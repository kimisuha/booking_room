<div class="container info_form">
    <form method="POST" action="{{ url('http://localhost/booking_room/public/create-info') }}" role="form">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label for="inputName" class="form-label">your name</label>
                <input type="text" class="form-control" id="inputName" name="name">
                @error('inputName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>

                @enderror
            </div>

            <div class="col-md-6">
                <label for="inputDateBorn" class="form-label">your date born</label>
                <input type="date" class="form-control" id="inputDateBorn" name="dateborn">
                @error('inputDateBorn')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <label for="inputPeopleId" class="form-label">your people id</label>
                <input type="text" class="form-control" id="inputPeopleId" name="peopleid">
                @error('inputPeopleId')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="inputTelephoneNumber" class="form-label">your phone</label>
                <input type="tel" class="form-control" id="inputTelephoneNumber" name="yourphone">
                @error('inputTelephoneNumber')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <label for="inputAccountNumber" class="form-label">your account number</label>
                <input type="text" class="form-control" id="inputAccountNumber" name="accountnumber">
                @error('inputAccountNumber')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="inputAccountType" class="form-label">your account type</label>
                <input type="text" class="form-control" id="inputAccountType" name="accounttype">
                @error('inputAccountType')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary" type="submit">accept</button>
    </form>
</div>
