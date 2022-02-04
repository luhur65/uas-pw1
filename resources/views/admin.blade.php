@extends('template.main')
@section('container')
    <div class="my-3">
        <div class="jumbotron bg-light p-3">
            <h1 class="display-3"> Welcome, {{ $name }}!. </h1>
            <p class="small lead text-muted"> {{ date("l, d M Y") }} </p>
        </div>
        <div class="all-cards my-4">
            <div class="row">
                <div class="col-sm-4 mb-2">
                    <div class="card p-2 border-2">
                        <h3 class="card-title mb-0 small">Menu</h3>
                        <div class="card-body">
                           <p class="display-6 card-text p-0">
                                4 Menus
                            </p> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-2">
                    <div class="card p-2 border-2">
                        <h3 class="card-title mb-0 small">Galery</h3>
                        <div class="card-body">
                            <p class="display-6 lead card-text p-0">
                                10 Photos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-2">
                    <div class="card p-2 border-2">
                        <h3 class="card-title mb-0 small">Buku Tamu</h3>
                        <div class="card-body">
                            <p class="display-6 card-text p-0">
                                218 Visitor
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection