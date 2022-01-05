@extends('layout.master')

@section('content')
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Peity Charts</h6>
        <p>Peity (sounds like deity) is a jQuery plugin that converts an element's content into a &lt;svg&gt;. Read the <a href="https://benpickles.github.io/peity/" target="_blank"> Official Peity Documentation</a> for a full list of instructions and other options.</p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Line charts</h6>
        <span data-peity='{"stroke": ["rgb(247, 126, 185)"], "fill": ["rgba(247, 126, 185, .2)"],"height": 50, "width": 80 }' class="peity-line">5,3,9,6,5,9,7,3,5,2</span>
        <span data-peity='{"stroke": ["rgb(126, 229, 229)"], "fill": ["rgba(126, 229, 229, .3)"],"height": 50, "width": 80 }' class="peity-line">5,3,2,-1,-3,-2,2,3,5,2</span>
        <span data-peity='{"stroke": ["rgb(251, 188, 6)"], "fill": ["rgba(251, 188, 6, .2)"],"height": 50, "width": 80 }' class="peity-line">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Bar charts</h6>
        <span data-peity='{"fill": ["rgb(247, 126, 185)"],"height": 50, "width": 80 }' class="peity-bar">5,3,9,6,5,9,7,3,5,2</span>
        <span data-peity='{"fill": ["rgb(126, 229, 229)"],"height": 50, "width": 80 }' class="peity-bar">5,3,2,-1,-3,-2,2,3,5,2</span>
        <span data-peity='{"fill": ["rgb(251, 188, 6)"],"height": 50, "width": 80 }' class="peity-bar">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Pie charts</h6>
        <span data-peity='{"fill": ["rgb(247, 126, 185)", "rgba(247, 126, 185, .2)"],"height": 50, "width": 60 }' class="peity-pie">1/5</span>
        <span data-peity='{"fill": ["rgb(126, 229, 229)", "rgba(126, 229, 229, .2)"],"height": 50, "width": 60 }' class="peity-pie">226/360</span>
        <span data-peity='{"fill": ["rgb(251, 188, 6)", "rgba(251, 188, 6, .2)"],"height": 50, "width": 60 }' class="peity-pie">0.52/1.561</span>
        <span data-peity='{"fill": ["rgba(77, 138, 240, .7)", "rgba(77, 138, 240, .2)"],"height": 50, "width": 60 }' class="peity-pie">1,2,3,2,2</span>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Donut chart</h6>
        <span data-peity='{"fill": ["rgb(247, 126, 185)", "rgba(247, 126, 185, .2)"],"height": 50, "width": 60 }' class="peity-donut">1/5</span>
        <span data-peity='{"fill": ["rgb(126, 229, 229)", "rgba(126, 229, 229, .2)"],"height": 50, "width": 60 }' class="peity-donut">226/360</span>
        <span data-peity='{"fill": ["rgb(251, 188, 6)", "rgba(251, 188, 6, .2)"],"height": 50, "width": 60 }' class="peity-donut">0.52/1.561</span>
        <span data-peity='{"fill": ["rgba(77, 138, 240, .7)", "rgba(77, 138, 240, .2)"],"height": 50, "width": 60 }' class="peity-donut">1,2,3,2,2</span>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Options</h6>
        <p class="peity-custom">
          <span data-peity='{ "fill": ["rgb(247, 126, 185)", "rgba(247, 126, 185, .2)"], "innerRadius": 10, "radius": 40 }'>1/7</span>
          <span data-peity='{ "fill": ["rgb(126, 229, 229)", "rgba(126, 229, 229, .2)"], "innerRadius": 14, "radius": 36 }'>2/7</span>
          <span data-peity='{ "fill": ["rgb(251, 188, 6)", "rgba(251, 188, 6, .2)"], "innerRadius": 16, "radius": 32 }'>3/7</span>
          <span data-peity='{ "fill": ["rgba(77, 138, 240, .7)", "rgba(77, 138, 240, .2)"], "innerRadius": 18, "radius": 28 }'>4/7</span>
          <span data-peity='{ "fill": ["rgba(16, 183, 89, .5)", "rgba(16, 183, 89, .2)"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
          <span data-peity='{ "fill": ["rgb(247, 126, 185)", "rgba(247, 126, 185, .2)"], "innerRadius": 18, "radius": 20 }'>6/7</span>
          <span data-peity='{ "fill": ["rgba(77, 138, 240, .7)", "rgba(77, 138, 240, .2)"], "innerRadius": 15, "radius": 16 }'>7/7</span>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/peity.js') }}"></script>
@endpush