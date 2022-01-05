@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
    <li class="breadcrumb-item active" aria-current="page">Sweet Alert</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">SweetAlert2</h4>
        <p class="text-muted">Read the <a href="https://sweetalert2.github.io/" target="_blank"> Official SweetAlert2 Documentation </a>for a full list of instructions and other options.</p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body d-flex flex-column align-items-center">
        <p class="text-muted mb-3">Basic Alert</p>
        <button class="btn btn-primary" onclick="showSwal('basic')">Click here!</button>
      </div>
    </div>
  </div>
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body d-flex flex-column align-items-center">
        <p class="text-muted mb-3">A title with a text under</p>
        <button class="btn btn-primary" onclick="showSwal('title-and-text')">Click here!</button>
      </div>
    </div>
  </div>
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body d-flex flex-column align-items-center">
        <p class="text-muted mb-3">Mixin example</p>
        <button class="btn btn-primary" onclick="showSwal('mixin')">Click here!</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body d-flex flex-column align-items-center">
        <p class="text-muted mb-3">Custom HTML description and buttons</p>
        <button class="btn btn-primary" onclick="showSwal('custom-html')">Click here!</button>
      </div>
    </div>
  </div>
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body d-flex flex-column align-items-center">
        <p class="text-muted mb-3">Custom position</p>
        <button class="btn btn-primary" onclick="showSwal('custom-position')">Click here!</button>
      </div>
    </div>
  </div>
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body d-flex flex-column align-items-center">
        <p class="text-muted mb-3">A message with auto close timer</p>
        <button class="btn btn-primary" onclick="showSwal('message-with-auto-close')">Click here!</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body d-flex flex-column align-items-center">
        <p class="text-muted mb-3"> passing a parameter, you can execute something else for "Cancel"</p>
        <button class="btn btn-primary" onclick="showSwal('passing-parameter-execute-cancel')">Click here!</button>
      </div>
    </div>
  </div>
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body d-flex flex-column align-items-center">
      <p class="text-muted mb-3">A message with a custom image</p>
        <button class="btn btn-primary" onclick="showSwal('message-with-custom-image')">Click here!</button>
      </div>
    </div>
  </div>
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body d-flex flex-column align-items-center">
        <p class="text-muted mb-3">With a title, an error icon, a text, and a footer</p>
        <button class="btn btn-primary" onclick="showSwal('title-icon-text-footer')">Click here!</button>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/sweet-alert.js') }}"></script>
@endpush