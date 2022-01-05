@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
    <h1 class="page-title">Navs</h1>
    <p class="lead">Documentation and examples for how to use Bootstrap’s included navigation components. Read the <a href="https://getbootstrap.com/docs/5.1/components/navs/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>
    
    <hr>
    
    <h4 id="default">Basic example</h4>
    <p class="mb-3">Navigation available in Bootstrap share general markup and styles, from the base <code>.nav</code> class to the active and disabled states. Swap modifier classes to switch between each style.</p>
    <div class="example">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" href="javascript:;">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:;">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:;">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="javascript:;" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
    <figure class="highlight" id="Default">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Default">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="h-alignment">Horizontal alignment</h4>
    <p class="mb-3">Change the horizontal alignment of your nav with flexbox utilities. By default, navs are left-aligned, but you can easily change them to center or right aligned.</p>
    <div class="example">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="javascript:;">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:;">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:;">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="javascript:;" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
    <figure class="highlight" id="hAlignment">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="nav justify-content-center">
  ...
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#hAlignment">copy</button>
    </figure>
    <div class="example">
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" href="javascript:;">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:;">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:;">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="javascript:;" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
    <figure class="highlight" id="hAlignmentB">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="nav justify-content-end">
  ...
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#hAlignmentB">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="v-alignment">Vertical alignment</h4>
    <p class="mb-3">Stack your navigation by changing the flex item direction with the <code>.flex-column</code> utility. </p>
    <div class="example">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="javascript:;">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:;">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:;">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="javascript:;" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
    <figure class="highlight" id="vAlignment">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="nav justify-content-center">
  ...
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#vAlignment">copy</button>
    </figure>

    <hr>

    <h4 id="tabs">Tabs</h4>
    <p class="mb-3">Takes the basic nav from above and adds the <code>.nav-tabs</code> class to generate a tabbed interface.</p>
    <div class="example">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="javascript:;">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:;">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:;">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="javascript:;" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
    <figure class="highlight" id="Tabs">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="nav nav-tabs">
  ...
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Tabs">copy</button>
    </figure>

    <hr>

    <h4 id="fill-justify">Fill and justify</h4>
    <p class="mb-3">Force your <code>.nav</code>’s contents to extend the full available width one of two modifier classes. To proportionately fill all available space with your <code>.nav-item</code>s, use <code>.nav-fill</code>.</p>
    <div class="example">
      <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <a class="nav-link active" href="javascript:;">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:;">Much longer nav link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:;">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="javascript:;" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
    <figure class="highlight" id="fillJustify">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="nav nav-fill">
  ...
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#fillJustify">copy</button>
    </figure>

    <hr>

    <h4 id="tabs-dropdown">Tabs with dropdowns</h4>
    <div class="example">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="javascript:;">Active</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="javascript:;">Action</a>
            <a class="dropdown-item" href="javascript:;">Another action</a>
            <a class="dropdown-item" href="javascript:;">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:;">Separated link</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:;">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="javascript:;" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
    <figure class="highlight" id="tabsDropdown">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#tabsDropdown">copy</button>
    </figure>

  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Basic example</a>
      </li>
      <li class="nav-item">
        <a href="#h-alignment" class="nav-link">Horizontal alignment</a>
      </li>
      <li class="nav-item">
        <a href="#v-alignment" class="nav-link">Vertical alignment</a>
      </li>
      <li class="nav-item">
        <a href="#tabs" class="nav-link">Tabs</a>
      </li>
      <li class="nav-item">
        <a href="#fill-justify" class="nav-link">Fill and justify</a>
      </li>
      <li class="nav-item">
        <a href="#tabs-dropdown" class="nav-link">Tabs with dropdowns</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush