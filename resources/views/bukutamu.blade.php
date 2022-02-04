@extends('template.main')
@section('container')
    <h1 class="fw-bold display-4"> Buku Tamu </h1>
    <div class="row">
        <div class="col-sm-6">
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Hurry up!</h4>
                <p>Aww, daftar buku tamu kami masih kosong nih!. belum ada nama kamu </p>
                <hr>
                <p class="mb-1 mt-4">Ingin nama anda muncul di daftar buku tamu? isi form dibawah ini dengan nama kamu ya.</p>
            </div>
             
            <form action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's name" aria-label="Recipient's name" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Save!</button>
                </div>
            </form>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Daftar Tamu</h3>
                    <ol class="list-group list-group-numbered visitor">
                        <li class="list-group-item mb-1 border-top ">Putri</li>
                        <li class="list-group-item mb-1 border-top ">Ucup</li>
                        <li class="list-group-item mb-1 border-top ">Ucok</li>
                        <li class="list-group-item mb-1 border-top ">Sudirjo</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection