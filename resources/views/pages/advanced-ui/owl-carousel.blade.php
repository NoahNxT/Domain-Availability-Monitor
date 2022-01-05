@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/owl-carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/owl-carousel/assets/owl.theme.default.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/animate-css/animate.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
    <li class="breadcrumb-item active" aria-current="page">Owl Carousel</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Owl Carousel 2</h4>
        <p class="text-muted">Read the <a href="https://owlcarousel2.github.io/OwlCarousel2/" target="_blank"> Official Owl Carousel 2 Plugin Documentation </a>for a full list of instructions and other options.</p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Basic Example</h6>
        <div class="owl-carousel owl-theme owl-basic">
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Auto Play</h6>
        <div class="owl-carousel owl-theme owl-auto-play">
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Animation</h6>
        <p class="text-muted mb-3">fadeout</p>
        <div class="owl-carousel owl-theme owl-fadeout">
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Animation</h6>
        <p class="text-muted mb-3">Using <a href="https://daneden.github.io/animate.css/" target="_blank">animate.css</a> library.</p>
        <div class="owl-carousel owl-theme owl-animate-css">
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Mousewheel</h6>
        <p class="text-muted mb-3">To add mouswheel scrolling just include the fantastic plugin <a href="https://github.com/brandonaaron/jquery-mousewheel" target="_blank">jquery.mousewheel.js</a>.</p>
        <div class="owl-carousel owl-theme owl-mouse-wheel">
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" alt="item-image">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/carousel.js') }}"></script>
@endpush