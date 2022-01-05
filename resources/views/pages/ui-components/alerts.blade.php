@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
    <h1 class="page-title">Alerts</h1>
    <p class="lead">Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages. Read the <a href="https://getbootstrap.com/docs/5.1/components/alerts/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>

    <hr>

    <h4 id="default">Basic example</h4>
    <p class="mb-3">Alerts are available for any length of text, as well as an optional dismiss button. For proper styling, use one of the eight required contextual classes (e.g., <code>.alert-success</code>).</p>
    <div class="example">
      <div class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
      </div>
      <div class="alert alert-secondary" role="alert">
        A simple secondary alert—check it out!
      </div>
      <div class="alert alert-success" role="alert">
        A simple success alert—check it out!
      </div>
      <div class="alert alert-danger" role="alert">
        A simple danger alert—check it out!
      </div>
      <div class="alert alert-warning" role="alert">
        A simple warning alert—check it out!
      </div>
      <div class="alert alert-info" role="alert">
        A simple info alert—check it out!
      </div>
      <div class="alert alert-light" role="alert">
        A simple light alert—check it out!
      </div>
      <div class="alert alert-dark" role="alert">
        A simple dark alert—check it out!
      </div>
    </div>
    <figure class="highlight" id="defaultAlert">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
<div class="alert alert-secondary" role="alert">...</div>
<div class="alert alert-success" role="alert">...</div>
<div class="alert alert-danger" role="alert">...</div>
<div class="alert alert-warning" role="alert">...</div>
<div class="alert alert-info" role="alert">...</div>
<div class="alert alert-light" role="alert">...</div>
<div class="alert alert-dark" role="alert">...</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#defaultAlert">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="fill">Fill alert</h4>
    <p class="mb-3">Add class <code>.alert-fill-*</code> with <code>.alert</code>.</p>
    <div class="example">
      <div class="alert alert-fill-primary" role="alert">
        A simple primary alert—check it out!
      </div>
      <div class="alert alert-fill-secondary" role="alert">
        A simple secondary alert—check it out!
      </div>
      <div class="alert alert-fill-success" role="alert">
        A simple success alert—check it out!
      </div>
      <div class="alert alert-fill-danger" role="alert">
        A simple danger alert—check it out!
      </div>
      <div class="alert alert-fill-warning" role="alert">
        A simple warning alert—check it out!
      </div>
      <div class="alert alert-fill-info" role="alert">
        A simple info alert—check it out!
      </div>
      <div class="alert alert-fill-light" role="alert">
        A simple light alert—check it out!
      </div>
      <div class="alert alert-fill-dark" role="alert">
        A simple dark alert—check it out!
      </div>
    </div>
    <figure class="highlight" id="fillAlert">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="alert alert-fill-primary" role="alert">
  A simple primary alert—check it out!
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#fillAlert">copy</button>
    
    </figure>
    <hr>
    
    <h4 id="icon">With icon</h4>
    <p class="mb-3">Add an icon inside the div.</p>
    <div class="example">
      <div class="alert alert-primary" role="alert">
        <i data-feather="alert-circle"></i>
        A simple primary alert—check it out!
      </div>
      <div class="alert alert-secondary" role="alert">
        <i data-feather="alert-circle"></i>
        A simple secondary alert—check it out!
      </div>
      <div class="alert alert-success" role="alert">
        <i data-feather="alert-circle"></i>
        A simple success alert—check it out!
      </div>
      <div class="alert alert-danger" role="alert">
        <i data-feather="alert-circle"></i>
        A simple danger alert—check it out!
      </div>
      <div class="alert alert-warning" role="alert">
        <i data-feather="alert-circle"></i>
        A simple warning alert—check it out!
      </div>
      <div class="alert alert-info" role="alert">
        <i data-feather="alert-circle"></i>
        A simple info alert—check it out!
      </div>
      <div class="alert alert-light" role="alert">
        <i data-feather="alert-circle"></i>
        A simple light alert—check it out!
      </div>
      <div class="alert alert-dark" role="alert">
        <i data-feather="alert-circle"></i>
        A simple dark alert—check it out!
      </div>
    </div>
    <figure class="highlight" id="iconAlert">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="alert alert-primary" role="alert">
  <i data-feather="alert-circle"></i>
  A simple primary alert—check it out!
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#iconAlert">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="alert-link">Alert Link</h4>
    <p class="mb-3">Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>
    <div class="example">
      <div class="alert alert-primary" role="alert">
        A simple primary alert with <a href="javascript:;" class="alert-link">an example link</a>. Give it a click if you like.
      </div>
      <div class="alert alert-secondary" role="alert">
        A simple secondary alert with <a href="javascript:;" class="alert-link">an example link</a>. Give it a click if you like.
      </div>
      <div class="alert alert-success" role="alert">
        A simple success alert with <a href="javascript:;" class="alert-link">an example link</a>. Give it a click if you like.
      </div>
      <div class="alert alert-danger" role="alert">
        A simple danger alert with <a href="javascript:;" class="alert-link">an example link</a>. Give it a click if you like.
      </div>
      <div class="alert alert-warning" role="alert">
        A simple warning alert with <a href="javascript:;" class="alert-link">an example link</a>. Give it a click if you like.
      </div>
      <div class="alert alert-info" role="alert">
        A simple info alert with <a href="javascript:;" class="alert-link">an example link</a>. Give it a click if you like.
      </div>
      <div class="alert alert-light" role="alert">
        A simple light alert with <a href="javascript:;" class="alert-link">an example link</a>. Give it a click if you like.
      </div>
      <div class="alert alert-dark" role="alert">
        A simple dark alert with <a href="javascript:;" class="alert-link">an example link</a>. Give it a click if you like.
      </div>
    </div>
    <figure class="highlight" id="linkAlert">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="alert alert-primary" role="alert">
  A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#linkAlert">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="additional-content">Additional content</h4>
    <p class="mb-3">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
    <div class="example">
      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
      </div>
    </div>
    <figure class="highlight" id="additionalContent">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#additionalContent">copy</button>
    </figure>
    <hr>
    <h4 id="dismissing">Dismissing</h4>
    <p class="mb-3">Using the alert JavaScript plugin, it’s possible to dismiss any alert inline.</p>
    <ul>
      <li>Add a dismiss button and the <code>.alert-dismissible</code> class, which adds extra padding to the right of the alert and positions the <code>.close</code> button.</li>
      <li>On the dismiss button, add the <code>data-bs-dismiss="alert"</code> attribute, which triggers the JavaScript functionality. Be sure to use the <code>&lt;button&gt;</code> element with it for proper behavior across all devices.</li>
      <li>To animate alerts when dismissing them, be sure to add the <code>.fade</code> and <code>.show</code> classes.</li>
    </ul>
    <div class="example">
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
      </div>
      <div class="alert alert-secondary alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
      </div>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
      </div>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
      </div>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
      </div>
      <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
      </div>
      <div class="alert alert-light alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
      </div>
      <div class="alert alert-dark alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
      </div>
    </div>
    <figure class="highlight" id="dismissingAlert">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dismissingAlert">copy</button>
    </figure>

  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Basic example</a>
      </li>
      <li class="nav-item">
        <a href="#fill" class="nav-link">Fill alerts</a>
      </li>
      <li class="nav-item">
        <a href="#icon" class="nav-link">Icon alerts</a>
      </li>
      <li class="nav-item">
        <a href="#alert-link" class="nav-link">Alert link</a>
      </li>
      <li class="nav-item">
        <a href="#additional-content" class="nav-link">Additional content</a>
      </li>
      <li class="nav-item">
        <a href="#dismissing" class="nav-link">Dismissing</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush