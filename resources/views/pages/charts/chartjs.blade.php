@extends('layout.master')

@section('content')
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Chart.js</h6>
        <p>Simple yet flexible JavaScript charts. Read the <a href="https://www.chartjs.org/" target="_blank"> Official Chart.js Documentation</a> for a full list of instructions and other options.</p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Bar chart</h6>
        <canvas id="chartjsBar"></canvas>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Line chart</h6>
        <canvas id="chartjsLine"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Doughnut chart</h6>
        <canvas id="chartjsDoughnut"></canvas>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Area chart</h6>
        <canvas id="chartjsArea"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Pie chart</h6>
        <canvas id="chartjsPie"></canvas>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Bubble chart</h6>
        <canvas id="chartjsBubble"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Radar chart</h6>
        <canvas id="chartjsRadar"></canvas>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Polar area chart</h6>
        <canvas id="chartjsPolarArea"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin grid-margin-xl-0 stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Grouped bar chart</h6>
        <canvas id="chartjsGroupedBar"></canvas>
      </div>
    </div>
  </div>
  <div class="col-xl-6 stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Mixed bar chart</h6>
        <canvas id="chartjsMixedBar"></canvas>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/chartjs.js') }}"></script>
@endpush