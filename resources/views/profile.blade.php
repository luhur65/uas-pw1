@extends('template.main')
@section('container')
  <div class="row">
    {{-- <h1 class="fw-bold display-4"> Profile </h1> --}}
    <div class="col-md mx-auto">
      <div class="card">
        <div class="card-body text-center">
          <img width="180px" src="/assets/img/profile.jpeg" class="img-fluid rounded-circle my-3" alt="...">
          <h5 class="card-title">Dharma Bakti Situmorang</h5>
          <div class="mb-3 mt-0">
            <span class="badge rounded-pill bg-primary">Web Programming</span>
            <span class="badge rounded-pill bg-primary">IT Enthusias</span>
            <span class="badge rounded-pill bg-primary">Scholar</span>
            <span class="badge rounded-pill bg-primary">Developer</span>
          </div>
          <div class="card-text">
            <blockquote class="blockquote">
              <p class="mb-3">" We Love Programming , Stay Awesome and Keep Coding "</p>
              <footer class="blockquote-footer"> <cite title="Source Title">dharma, 2022 <i class="fas fa-heart" aria-hidden="true"></i></cite></footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection