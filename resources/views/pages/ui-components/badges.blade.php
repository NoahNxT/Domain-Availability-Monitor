@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
    <h1 class="page-title">Badges</h1>
    <p class="lead">Documentation and examples for badges, our small count and labeling component. Read the <a href="https://getbootstrap.com/docs/5.1/components/badge/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>

    <hr>

    <h4 id="default">Basic example</h4>
    <p class="mb-3">Badges scale to match the size of the immediate parent element by using relative font sizing and <code>em</code> units.</p>
    <div class="example">
      <h1 class="mb-2">Example heading <span class="badge bg-primary">New</span></h1>
      <h2 class="mb-2">Example heading <span class="badge bg-primary">New</span></h2>
      <h3 class="mb-2">Example heading <span class="badge bg-primary">New</span></h3>
      <h4 class="mb-2">Example heading <span class="badge bg-primary mb-1">New</span></h4>
      <h5 class="mb-2">Example heading <span class="badge bg-primary mb-1">New</span></h5>
      <h6 class="mb-2">Example heading <span class="badge bg-primary">New</span></h6>
    </div>
    <figure class="highlight" id="defaultBadge">
<pre><code class="language-markup"><script type="script/prism-html-markup"><h1>Example heading <span class="badge bg-primary">New</span></h1>
<h2>Example heading <span class="badge bg-primary">New</span></h2>
<h3>Example heading <span class="badge bg-primary">New</span></h3>
<h4>Example heading <span class="badge bg-primary">New</span></h4>
<h5>Example heading <span class="badge bg-primary">New</span></h5>
<h6>Example heading <span class="badge bg-primary">New</span></h6></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#defaultBadge">copy</button>
    </figure>

    <hr>

    <h4 id="buttons">Buttons</h4>
    <p class="mb-3">Badges can be used as part of links or buttons to provide a counter.</p>
    <div class="example">
      <button type="button" class="btn btn-primary">
          Notifications <span class="badge bg-light text-dark">4</span>
      </button>
    </div>
    <figure class="highlight" id="buttonBadge">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button type="button" class="btn btn-primary">
  Notifications <span class="badge bg-light text-dark">4</span>
</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#buttonBadge">copy</button>
    </figure>
    
    <hr>

    <h4 id="positioned">Positioned</h4>
    <p class="mb-3">Use utilities to modify a <code>.badge</code> and position it in the corner of a link or button.</p>
    <div class="example">
      <button type="button" class="btn btn-primary position-relative">
        Inbox
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
          99+
          <span class="visually-hidden">unread messages</span>
        </span>
      </button>
    </div>
    <figure class="highlight" id="positionedBadge">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button type="button" class="btn btn-primary position-relative">
  Inbox
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    99+
    <span class="visually-hidden">unread messages</span>
  </span>
</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#positionedBadge">copy</button>
    </figure>

    <p class="mb-3">You can also replace the <code>.badge</code> class with a few more utilities without a count for a more generic indicator.</p>
    <div class="example">
      <button type="button" class="btn btn-primary position-relative">
        Profile
        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
          <span class="visually-hidden">New alerts</span>
        </span>
      </button>
    </div>
    <figure class="highlight" id="positionedNoCountBadge">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button type="button" class="btn btn-primary position-relative">
  Profile
  <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
    <span class="visually-hidden">New alerts</span>
  </span>
</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#positionedNoCountBadge">copy</button>
    </figure>

    <hr>
    
    <h4 id="contextual-variations">Contextual variations</h4>
    <p class="mb-3">Use background utility classes to quickly change the appearance of a badge.</p>
    <div class="example">
      <span class="badge bg-primary">Primary</span>
      <span class="badge bg-secondary">Secondary</span>
      <span class="badge bg-success">Success</span>
      <span class="badge bg-danger">Danger</span>
      <span class="badge bg-warning">Warning</span>
      <span class="badge bg-info">Info</span>
      <span class="badge bg-light text-dark">Light</span>
      <span class="badge bg-dark">Dark</span>
    </div>
    <figure class="highlight" id="contextualVariations">
<pre><code class="language-markup"><script type="script/prism-html-markup"><span class="badge bg-primary">Primary</span>
<span class="badge bg-secondary">Secondary</span>
<span class="badge bg-success">Success</span>
<span class="badge bg-danger">Danger</span>
<span class="badge bg-warning">Warning</span>
<span class="badge bg-info">Info</span>
<span class="badge bg-light text-dark">Light</span>
<span class="badge bg-dark">Dark</span></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#contextualVariations">copy</button>
    </figure>

    <hr>
    
    <h4 id="pill-badges">Pill badges</h4>
    <p class="mb-3">Use the <code>.rounded-pill</code> utility class to make badges more rounded with a larger <code>border-radius</code>.</p>
    <div class="example">
      <span class="badge rounded-pill bg-primary">Primary</span>
      <span class="badge rounded-pill bg-secondary">Secondary</span>
      <span class="badge rounded-pill bg-success">Success</span>
      <span class="badge rounded-pill bg-danger">Danger</span>
      <span class="badge rounded-pill bg-warning">Warning</span>
      <span class="badge rounded-pill bg-info">Info</span>
      <span class="badge rounded-pill bg-light text-dark">Light</span>
      <span class="badge rounded-pill bg-dark">Dark</span>
    </div>
    <figure class="highlight" id="pillBadges">
<pre><code class="language-markup"><script type="script/prism-html-markup"><span class="badge rounded-pill bg-primary">Primary</span></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#pillBadges">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="link-badges">Link badges</h4>
    <div class="example">
      <a href="javascript:;" class="badge bg-primary">Primary</a>
      <a href="javascript:;" class="badge bg-secondary">Secondary</a>
      <a href="javascript:;" class="badge bg-success">Success</a>
      <a href="javascript:;" class="badge bg-danger">Danger</a>
      <a href="javascript:;" class="badge bg-warning">Warning</a>
      <a href="javascript:;" class="badge bg-info">Info</a>
      <a href="javascript:;" class="badge bg-light text-dark">Light</a>
      <a href="javascript:;" class="badge bg-dark">Dark</a>
    </div>
    <figure class="highlight" id="linkBadges">
<pre><code class="language-markup"><script type="script/prism-html-markup"><a href="#" class="badge bg-primary">Primary</a></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#linkBadges">copy</button>
    </figure>
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Basic example</a>
      </li>
      <li class="nav-item">
        <a href="#positioned" class="nav-link">Positioned</a>
      </li>
      <li class="nav-item">
        <a href="#contextual-variations" class="nav-link">Contextual variations</a>
      </li>
      <li class="nav-item">
        <a href="#pill-badges" class="nav-link">Pill badges</a>
      </li>
      <li class="nav-item">
        <a href="#link-badges" class="nav-link">Link badges</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush