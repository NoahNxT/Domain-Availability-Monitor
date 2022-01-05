@extends('layout.master')

@section('content')
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">jQuery Sparkline Charts <span id="mouseSpeedChart"></span></h6>
        <p>This jQuery plugin generates sparklines (small inline charts) directly in the browser using data supplied either inline in the HTML, or via javascript. Read the <a href="https://omnipotent.net/jquery.sparkline/" target="_blank"> Official jQuery Sparklines Documentation</a> for a full list of instructions and other options.</p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Line chart</h6>
        <div id="sparklineLine"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Area chart</h6>
        <div id="sparklineArea"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Bar chart</h6>
        <div id="sparklineBar"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Stacked Bar chart</h6>
        <div id="sparklineBarStacked"></div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Composite chart</h6>
        <div id="sparklineComposite"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Box plot</h6>
        <div id="sparklineBoxplot"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Pie chart</h6>
        <div id="sparklinePie"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Bullet chart</h6>
        <div id="sparklineBullet"></div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/sparkline.js') }}"></script>
@endpush