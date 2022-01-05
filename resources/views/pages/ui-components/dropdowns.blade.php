@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
    <h1 class="page-title">Dropdowns</h1>
    <p class="lead">Toggle contextual overlays for displaying lists of links and more with the Bootstrap dropdown plugin. Read the <a href="https://getbootstrap.com/docs/5.1/components/dropdowns/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>
    
    <hr>
    
    <h4 id="default">Basic Example</h4>
    <p class="mb-3">Wrap the dropdown’s toggle (your button or link) and the dropdown menu within <code>.dropdown</code>, or another element that declares <code></code>position: relative;</code>. Dropdowns can be triggered from <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> elements to better fit your potential needs.</p>
    <div class="example">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="defaultDropdown">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#defaultDropdown">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="variations">Dropdown variations</h4>
    <p class="mb-3">Add class <code>.btn-*</code> for solid colored buttons.</p>
    <div class="example">
      <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="dropdownVariations">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropdownVariations">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="split">Split button</h4>
    <p class="mb-3">Similarly, create split button dropdowns with virtually the same markup as single button dropdowns, but with the addition of <code>.dropdown-toggle-split</code> for proper spacing around the dropdown caret.</p>
    <div class="example">
      <div class="btn-group">
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="splitButton">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="btn-group">
  <button type="button" class="btn btn-primary">Primary</button>
  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#splitButton">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="sizing">Sizing</h4>
    <p class="mb-3">Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.</p>
    <div class="example">
        <div class="btn-toolbar" role="toolbar">
          <div class="btn-group">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Large button
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:;">Action</a>
              <a class="dropdown-item" href="javascript:;">Another action</a>
              <a class="dropdown-item" href="javascript:;">Something else here</a>
            </div>
          </div><!-- /btn-group -->
          <div class="btn-group ms-2">
            <button type="button" class="btn btn-lg btn-secondary">Large split button</button>
            <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:;">Action</a>
              <a class="dropdown-item" href="javascript:;">Another action</a>
              <a class="dropdown-item" href="javascript:;">Something else here</a>
            </div>
          </div><!-- /btn-group -->
        </div>
        <div class="btn-toolbar" role="toolbar">
          <div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Small button
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:;">Action</a>
              <a class="dropdown-item" href="javascript:;">Another action</a>
              <a class="dropdown-item" href="javascript:;">Something else here</a>
            </div>
          </div><!-- /btn-group -->
          <div class="btn-group ms-2">
            <button type="button" class="btn btn-sm btn-secondary">Small split button</button>
            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:;">Action</a>
              <a class="dropdown-item" href="javascript:;">Another action</a>
              <a class="dropdown-item" href="javascript:;">Something else here</a>
            </div>
          </div><!-- /btn-group -->
        </div>
    </div>
    <figure class="highlight" id="buttonSizing">
<pre><code class="language-markup"><script type="script/prism-html-markup"><!-- Large button groups (default and split) -->
<div class="btn-group">
  <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Large button
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
<div class="btn-group">
  <button class="btn btn-secondary btn-lg" type="button">
    Large split button
  </button>
  <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>

<!-- Small button groups (default and split) -->
<div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Small button
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
<div class="btn-group">
  <button class="btn btn-secondary btn-sm" type="button">
    Small split button
  </button>
  <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#buttonSizing">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="dropup">Dropup</h4>
    <p class="mb-3">Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent element.</p>
    <div class="example">
      <div class="btn-group dropup">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropup
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
      <div class="btn-group dropup">
        <button type="button" class="btn btn-secondary">
          Split dropup
        </button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="dropUP">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="btn-group dropup">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropup
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropUP">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="dropright">Dropright</h4>
    <p class="mb-3">Trigger dropdown menus at the right of the elements by adding <code>.dropright</code> to the parent element.</p>
    <div class="example">
      <div class="btn-group dropend">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropright
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:;">Separated link</a>
        </div>
      </div>
      <div class="btn-group dropend">
        <button type="button" class="btn btn-secondary">
          Split dropright
        </button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropright</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:;">Separated link</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="dropRight">
<pre><code class="language-markup"><script type="script/prism-html-markup"><!-- Default dropright button -->
<div class="btn-group dropend">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropright
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
  </div>
</div>

<!-- Split dropright button -->
<div class="btn-group dropend">
  <button type="button" class="btn btn-secondary">
    Split dropright
  </button>
  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropright</span>
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropRight">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="dropleft">Dropleft</h4>
    <p class="mb-3">Trigger dropdown menus at the right of the elements by adding <code>.dropleft</code> to the parent element.</p>
    <div class="example">
      <div class="btn-group dropstart">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropleft
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:;">Separated link</a>
        </div>
      </div>
      <div class="btn-group">
        <div class="btn-group dropstart" role="group">
          <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropleft</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="javascript:;">Action</a>
            <a class="dropdown-item" href="javascript:;">Another action</a>
            <a class="dropdown-item" href="javascript:;">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:;">Separated link</a>
          </div>
        </div>
        <button type="button" class="btn btn-secondary">
          Split dropleft
        </button>
      </div>
    </div>
    <figure class="highlight" id="dropLeft">
<pre><code class="language-markup"><script type="script/prism-html-markup"><!-- Default dropleft button -->
<div class="btn-group dropstart">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropleft
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
  </div>
</div>

<!-- Split dropleft button -->
<div class="btn-group">
  <div class="btn-group dropstart" role="group">
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="visually-hidden">Toggle Dropleft</span>
    </button>
    <div class="dropdown-menu">
      <!-- Dropdown menu links -->
    </div>
  </div>
  <button type="button" class="btn btn-secondary">
    Split dropleft
  </button>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropLeft">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="active-item">Active menu item</h4>
    <p class="mb-3">Add <code>.active</code> to items in the dropdown to <strong>style them as active</strong>.</p>
    <div class="example">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item active" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="activeItem">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item active" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#activeItem">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="disabled-item">Disabled menu item</h4>
    <p class="mb-3">Add <code>.disabled</code> to items in the dropdown to <strong>style them as active</strong>.</p>
    <div class="example">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item disabled" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="disabledItem">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item disabled" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#disabledItem">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="dropdown-header">Dropdown header</h4>
    <p class="mb-3">Add a header to label sections of actions in any dropdown menu.</p>
    <div class="example">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
          <h6 class="dropdown-header">Dropdown header</h6>
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="dropdownHeader">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
    <h6 class="dropdown-header">Dropdown header</h6>
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropdownHeader">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="dropdown-dividers">Dropdown dividers</h4>
    <p class="mb-3">Add a header to label sections of actions in any dropdown menu.</p>
    <div class="example">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:;">Separated link</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="dropdownDividers">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropdownDividers">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="dropdown-text">Text in dropdown</h4>
    <p class="mb-3">Place any freeform text within a dropdown menu with text and use spacing utilities. Note that you’ll likely need additional sizing styles to constrain the menu width.</p>
    <div class="example">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu p-4 text-muted" aria-labelledby="dropdownMenuButton5">
          <p>Some example text that's free-flowing within the dropdown menu.</p>
          <p class="mb-0">And this is more example text.</p>
        </div>
      </div>
    </div>
    <figure class="highlight" id="dropdownText">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu p-4 text-muted"  aria-labelledby="dropdownMenuButton5">
    <p>Some example text that's free-flowing within the dropdown menu.</p>
    <p class="mb-0">And this is more example text.</p>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropdownText">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="dropdown-form">Forms in dropdown</h4>
    <p>Put a form within a dropdown menu, or make it into a dropdown menu, and use margin or padding utilities to give it the negative space you require.</p>
    <div class="example">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <form class="dropdown-menu p-4"  aria-labelledby="dropdownMenuButton6">
          <div class="mb-3">
            <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
      </div>
    </div>
    <figure class="highlight" id="dropdownForm">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <form class="dropdown-menu p-4"  aria-labelledby="dropdownMenuButton6">
    <div class="mb-3">
      <label for="exampleDropdownFormEmail2">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword2">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
        <label class="form-check-label" for="dropdownCheck2">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropdownForm">copy</button>
    </figure>
                
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Basic example</a>
      </li>
      <li class="nav-item">
        <a href="#variations" class="nav-link">Dropdown variations</a>
      </li>
      <li class="nav-item">
        <a href="#split" class="nav-link">Split button</a>
      </li>
      <li class="nav-item">
        <a href="#sizing" class="nav-link">Sizing</a>
      </li>
      <li class="nav-item">
        <a href="#dropup" class="nav-link">Dropup</a>
      </li>
      <li class="nav-item">
        <a href="#dropright" class="nav-link">Dropright</a>
      </li>
      <li class="nav-item">
        <a href="#dropleft" class="nav-link">Dropleft</a>
      </li>
      <li class="nav-item">
        <a href="#active-item" class="nav-link">Active menu item</a>
      </li>
      <li class="nav-item">
        <a href="#disabled-item" class="nav-link">Disabled menu item</a>
      </li>
      <li class="nav-item">
        <a href="#dropdown-header" class="nav-link">Dropdown header</a>
      </li>
      <li class="nav-item">
        <a href="#dropdown-dividers" class="nav-link">Dropdown dividers</a>
      </li>
      <li class="nav-item">
        <a href="#dropdown-text" class="nav-link">Text in dropdown</a>
      </li>
      <li class="nav-item">
        <a href="#dropdown-form" class="nav-link">Form in dropdown</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush