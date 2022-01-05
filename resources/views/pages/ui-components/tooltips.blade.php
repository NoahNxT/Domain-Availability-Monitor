@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
    <h1 class="page-title">Tooltips</h1>
    <p class="lead">Documentation and examples for adding custom Bootstrap tooltips with CSS and JavaScript using CSS3 for animations and data-attributes for local title storage. Read the <a href="https://getbootstrap.com/docs/5.1/components/tooltips/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>
    
    <hr>
    
    <h4 id="enable">Enable tooltips everywhere</h4>
    <p class="mb-3">One way to initialize all tooltips on a page would be to select them by their <code>data-bs-toggle</code> attribute:</p>
    <figure class="highlight" id="Enable">
<pre><code class="language-javascript"><script type="script/prism-html-markup">var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})</script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Enable">copy</button>
    </figure>
    
    <hr>

    <h4 id="default">Example</h4>
    <p class="mb-3">Hover over the links below to see tooltips.</p>
    <div class="example">
      <button type="button" class="btn btn-primary mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
        Tooltip on top
      </button>
      <button type="button" class="btn btn-primary mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
        Tooltip on right
      </button>
      <button type="button" class="btn btn-primary mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
        Tooltip on bottom
      </button>
      <button type="button" class="btn btn-primary mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
        Tooltip on left
      </button>
      <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
        Tooltip with HTML
      </button>
    </div>
    <figure class="highlight" id="Default">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
  Tooltip on top
</button>
<button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
  Tooltip on right
</button>
<button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
  Tooltip on bottom
</button>
<button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
  Tooltip on left
</button>
<button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
  Tooltip with HTML
</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Default">copy</button>
    </figure>
    
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#enable" class="nav-link">Enable</a>
      </li>
      <li class="nav-item">
        <a href="#default" class="nav-link">Example</a>
      </li>
      
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush