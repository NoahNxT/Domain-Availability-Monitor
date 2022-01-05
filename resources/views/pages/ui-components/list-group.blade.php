@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
    <h1 class="page-title">List Group</h1>
    <p class="lead">List groups are a flexible and powerful component for displaying a series of content. Read the <a href="https://getbootstrap.com/docs/5.1/components/list-group/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>

    <hr>

    <h4 id="default">Basic example</h4>
    <p class="mb-3">The most basic list group is an unordered list with list items and the proper classes. Build upon it with the options that follow, or with your own CSS as needed.</p>
    <div class="example">
      <div class="row">
        <div class="col-12 col-md-6">
          <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div>
      </div>
    </div>
    <figure class="highlight" id="Default">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="list-group">
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Default">copy</button>
    </figure>
    
    <hr>

    <h4 id="active-items">Active items</h4>
    <p class="mb-3">Add <code>.active</code> to a <code>.list-group-item</code> to indicate the current active selection.</p>
    <div class="example">
      <div class="row">
        <div class="col-12 col-md-6">
          <ul class="list-group">
            <li class="list-group-item active">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>                  
        </div>
      </div>
    </div>
    <figure class="highlight" id="activeItems">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="list-group">
  <li class="list-group-item active">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#activeItems">copy</button>
    </figure>
    
    <hr>

    <h4 id="disabled-items">Disabled items</h4>
    <p class="mb-3">Add <code>.disabled</code> to a <code>.list-group-item</code> to make it <em>appear</em> disabled. Note that some elements with <code>.disabled</code> will also require custom JavaScript to fully disable their click events (e.g., links).</p>
    <div class="example">
      <div class="row">
        <div class="col-12 col-md-6">
          <ul class="list-group">
            <li class="list-group-item disabled" aria-disabled="true">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div>
      </div>
    </div>
    <figure class="highlight" id="disabledItems">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="list-group">
  <li class="list-group-item disabled" aria-disabled="true">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#disabledItems">copy</button>
    </figure>
    
    <hr>

    <h4 id="links-buttons">Links and buttons</h4>
    <p class="mb-3">Use <code>&lt;a&gt;</code>s or <code>&lt;button&gt;</code>s to create <em>actionable</em> list group items with hover, disabled, and active states by adding <code>.list-group-item-action</code>.</p>
    <div class="example">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="list-group">
            <a href="javascript:;" class="list-group-item list-group-item-action active">
              Cras justo odio
            </a>
            <a href="javascript:;" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
            <a href="javascript:;" class="list-group-item list-group-item-action">Morbi leo risus</a>
            <a href="javascript:;" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
            <a href="javascript:;" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="linksButtons">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#linksButtons">copy</button>
    </figure>
    
    <hr>

    <h4 id="flush">Flush</h4>
    <p class="mb-3">Add <code>.list-group-flush</code> to remove some borders and rounded corners to render list group items edge-to-edge in a parent container (e.g., cards).</p>
    <div class="example">
      <div class="row">
        <div class="col-12 col-md-6">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div>
      </div>
    </div>
    <figure class="highlight" id="Flush">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="list-group list-group-flush">
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Flush">copy</button>
    </figure>

    <hr>

    <h4 id="with-badges">With badges</h4>
    <p class="mb-3">Add badges to any list group item to show unread counts, activity, and more with the help of some <a href="https://getbootstrap.com/docs/5.1/utilities/flex/" target="_blank">utilities</a>.</p>
    <div class="example">
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          A list item
          <span class="badge bg-primary rounded-pill">14</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          A second list item
          <span class="badge bg-primary rounded-pill">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          A third list item
          <span class="badge bg-primary rounded-pill">1</span>
        </li>
      </ul>
    </div>
    <figure class="highlight" id="withBadges">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    A list item
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    A second list item
    <span class="badge bg-primary rounded-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    A third list item
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#withBadges">copy</button>
    </figure>

    <hr>

    <h4 id="checkboxes-radios">Checkboxes and radios</h4>
    <p class="mb-3">Place Bootstrap’s checkboxes and radios within list group items and customize as needed.</p>
    <div class="example">
      <div class="list-group">
        <label class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="">
          First checkbox
        </label>
        <label class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="">
          Second checkbox
        </label>
        <label class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="">
          Third checkbox
        </label>
        <label class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="">
          Fourth checkbox
        </label>
        <label class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="">
          Fifth checkbox
        </label>
      </div>
    </div>
    <figure class="highlight" id="checkboxesRadios">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="list-group">
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="">
    First checkbox
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="">
    Second checkbox
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="">
    Third checkbox
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="">
    Fourth checkbox
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="">
    Fifth checkbox
  </label>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#checkboxesRadios">copy</button>
    </figure>
    
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Basic example</a>
      </li>
      <li class="nav-item">
        <a href="#active-items" class="nav-link">Active items</a>
      </li>
      <li class="nav-item">
        <a href="#disabled-items" class="nav-link">Disabled items</a>
      </li>
      <li class="nav-item">
        <a href="#links-buttons" class="nav-link">Linkd and buttons</a>
      </li>
      <li class="nav-item">
        <a href="#flush" class="nav-link">Flush</a>
      </li>
      <li class="nav-item">
        <a href="#with-badges" class="nav-link">With badges</a>
      </li>
      <li class="nav-item">
        <a href="#checkboxes-radios" class="nav-link">Checkboxes radios</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush