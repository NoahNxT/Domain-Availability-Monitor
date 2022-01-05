@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
    <h1 class="page-title">Popovers</h1>
    <p class="lead">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site. Read the <a href="https://getbootstrap.com/docs/5.1/components/popovers/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>
    
    <hr>

    <h4 id="enable">Enable popovers everywhere</h4>
    <p class="mb-3">One way to initialize all popovers on a page would be to select them by their <code>data-bs-toggle</code> attribute:</p>
    <figure class="highlight" id="Enable">
<pre><code class="language-javascript"><script type="script/prism-javascript-markup">var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})</script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Enable">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="default">Basic example</h4>
    <p class="mb-3">Popovers rely on the 3rd party library <a href="https://popper.js.org/">Popper.js</a> for positioning. You must include <a href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">popper.min.js</a> before bootstrap.js or use <code>bootstrap.bundle.min.js</code> / <code>bootstrap.bundle.js</code> which contains Popper.js in order for popovers to work!</p>
    <div class="example">
        <button type="button" class="btn btn-primary" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
    </div>
    <figure class="highlight" id="Default">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Default">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="directions">Four directions</h4>
    <p class="mb-3">Four options are available: top, right, bottom, and left aligned.</p>
    <div class="example">
      <button type="button" class="btn btn-primary mb-1 mb-md-0" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
        Popover on top
      </button>
      <button type="button" class="btn btn-primary mb-1 mb-md-0" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
        Popover on right
      </button>
      <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus
      sagittis lacus vel augue laoreet rutrum faucibus.">
        Popover on bottom
      </button>
      <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
        Popover on left
      </button>
    </div>
    <figure class="highlight" id="Directions">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on top
</button>
<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on right
</button>
<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on bottom
</button>
<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on left
</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Directions">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="dissmiss">Dismiss on next click</h4>
    <p class="mb-3">Use the <code>focus</code> trigger to dismiss popovers on the user’s next click of a different element than the toggle element.</p>
    <div class="example">
      <a tabindex="0" class="btn btn-primary" role="button" data-bs-toggle="popover" data-trigger="focus" title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
    </div>
    <figure class="highlight" id="Dissmiss">
<pre><code class="language-markup"><script type="script/prism-html-markup"><a tabindex="0" class="btn btn-primary" role="button" data-bs-toggle="popover" data-trigger="focus" title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Dissmiss">copy</button>
    </figure>
    
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#enable" class="nav-link">Enable popovers</a>
      </li>
      <li class="nav-item">
        <a href="#default" class="nav-link">Basic example</a>
      </li>
      <li class="nav-item">
        <a href="#directions" class="nav-link">Four directions</a>
      </li>
      <li class="nav-item">
        <a href="#dissmiss" class="nav-link">Dismiss on next click</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush