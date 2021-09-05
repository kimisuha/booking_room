<div class="boDy">
    @include('path.toolbr')

    <div class="row L_card">
        @foreach ($view as $data)
            <div class="L-card">
                <div class="card cr">
                    <div class="card-header">
                        <img src="https://vnn-imgs-f.vgcloud.vn/2020/10/16/17/the-dark-future-of-hotels-on-golden-land-in-hanoi-600x400.jpg"
                            alt="room!" class="card-img img-fluid" />
                    </div>
                    <div class="card-body">
                        <h4>{{ $data->maphong." ".$data->tenphong }}</h4>
                        <p>{{ $data->gia }}</p>
                        @include('path.icon')
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row pag">
        <div class="pag">
            <nav aria-label="pagination">
                <ul class="pagination">
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="previous"><span
                                aria-hidden="true">&laquo;</span></a>
                    </li>
                    <li class="page-item"><a href="#" class="page-link"><span>1</span></a></li>
                    <li class="page-item"><a href="#" class="page-link"><span>2</span></a></li>
                    <li class="page-item"><a href="#" class="page-link"><span>3</span></a></li>
                    <li class="page-item"><a href="#" class="page-link"><span
                                aria-hidden="true">&raquo;</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</div>
