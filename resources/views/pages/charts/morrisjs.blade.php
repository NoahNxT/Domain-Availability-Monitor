@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/morrisjs/morris.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Morris Charts</h6>
        <p>Good-looking charts shouldn't be difficult. Read the <a href="https://morrisjs.github.io/morris.js/" target="_blank"> Official Morris.js Documentation</a> for a full list of instructions and other options.</p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Line chart</h6>
        <div id="morrisLine"></div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Bar chart</h6>
        <div id="morrisBar"></div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Area chart</h6>
        <div id="morrisArea"></div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Donut chart</h6>
        <div id="morrisDonut"></div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/morrisjs/morris.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/morrisjs.js') }}"></script>
@endpush