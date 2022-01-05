@extends('layout.master')

@section('content')
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Apex Charts</h6>
        <p>Modern & Interactive Open-source Charts. Read the <a href="https://apexcharts.com/" target="_blank"> Official ApexChart Documentation</a> for a full list of instructions and other options.</p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Line chart</h6>
        <div id="apexLine"></div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Bar chart</h6>
        <div id="apexBar"></div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Area chart</h6>
        <div id="apexArea"></div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Mixed chart</h6>
        <div id="apexMixed"></div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Donut chart</h6>
        <div id="apexDonut"></div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Pie chart</h6>
        <div id="apexPie"></div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">HeatMap chart</h6>
        <div id="apexHeatMap"></div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Radar chart</h6>
        <div id="apexRadar"></div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin grid-margin-xl-0 stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Scatter chart</h6>
        <div id="apexScatter"></div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">RadialBar chart</h6>
        <div id="apexRadialBar"></div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/apexcharts.js') }}"></script>
@endpush