@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
    <h1 class="page-title">Button group</h1>
    <p class="lead">Group a series of buttons together on a single line or stack them in a vertical column. Read the <a href="https://getbootstrap.com/docs/5.1/components/button-group/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>

    <hr>

    <h4 id="default">Basic example</h4>
    <p class="mb-3">Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>
    <div class="example">
      <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-primary">Right</button>
      </div>
    </div>
    <figure class="highlight" id="defaultGroup">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Left</button>
  <button type="button" class="btn btn-primary">Middle</button>
  <button type="button" class="btn btn-primary">Right</button>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#defaultGroup">copy</button>
    </figure>

    <hr>

    <h4 id="checkbox-radio">Checkbox and radio button groups</h4>
    <p class="mb-3">Combine button-like checkbox and radio <a href="https://getbootstrap.com/docs/5.1/forms/checks-radios/" target="_blank">toggle buttons</a> into a seamless looking button group.</p>
    <div class="example">
      <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
        <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>
      
        <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
        <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>
      
        <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
        <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
      </div>
    </div>
    <figure class="highlight" id="checkboxGroup">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
  <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
  <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>

  <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
  <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>

  <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
  <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#checkboxGroup">copy</button>
    </figure>

    <div class="example">
      <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
        <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>
      
        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>
      
        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
      </div>
    </div>
    <figure class="highlight" id="radioGroup">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="btn-group" role="group" aria-label="Basic radio toggle button group">
  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
  <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#radioGroup">copy</button>
    </figure>
    
    <hr>

    <h4 id="toolbar">Button toolbar</h4>
    <p class="mb-3">Combine sets of button groups into button toolbars for more complex components. Use utility classes as needed to space out groups, buttons, and more.</p>
    <div class="example">
      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2 mb-1 mb-md-0" role="group" aria-label="First group">
          <button type="button" class="btn btn-primary">1</button>
          <button type="button" class="btn btn-primary">2</button>
          <button type="button" class="btn btn-primary">3</button>
          <button type="button" class="btn btn-primary">4</button>
        </div>
        <div class="btn-group me-2 mb-1 mb-md-0" role="group" aria-label="Second group">
          <button type="button" class="btn btn-primary">5</button>
          <button type="button" class="btn btn-primary">6</button>
          <button type="button" class="btn btn-primary">7</button>
        </div>
        <div class="btn-group mb-1 mb-md-0" role="group" aria-label="Third group">
          <button type="button" class="btn btn-primary">8</button>
        </div>
      </div>
    </div>
    <figure class="highlight" id="buttonToolbar">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group me-2" role="group" aria-label="First group">
    <button type="button" class="btn btn-primary">1</button>
    <button type="button" class="btn btn-primary">2</button>
    ...
  </div>
  <div class="btn-group me-2" role="group" aria-label="Second group"> ... </div>
  <div class="btn-group" role="group" aria-label="Third group"> ... </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#buttonToolbar">copy</button>
    </figure>
    <p class="mb-3">Feel free to mix input groups with button groups in your toolbars. Similar to the example above, you’ll likely need some utilities though to space things properly.</p>
    <div class="example">
      <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2 mb-1 mb-md-0" role="group" aria-label="First group">
          <button type="button" class="btn btn-primary">1</button>
          <button type="button" class="btn btn-primary">2</button>
          <button type="button" class="btn btn-primary">3</button>
          <button type="button" class="btn btn-primary">4</button>
        </div>
        <div class="input-group">
          <div class="input-group-text" id="btnGroupAddon">@</div>
          <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
        </div>
      </div>
      <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mb-1 mb-md-0" role="group" aria-label="First group">
          <button type="button" class="btn btn-primary">1</button>
          <button type="button" class="btn btn-primary">2</button>
          <button type="button" class="btn btn-primary">3</button>
          <button type="button" class="btn btn-primary">4</button>
        </div>
        <div class="input-group">
          <div class="input-group-text" id="btnGroupAddon2">@</div>
          <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2">
        </div>
      </div>
    </div>
    <figure class="highlight" id="mixed">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group me-2" role="group" aria-label="First group">
    <button type="button" class="btn btn-primary">1</button>
    ..
  </div>
  <div class="input-group">
    <div class="input-group-text" id="btnGroupAddon">@</div>
    <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
  </div>
</div>
<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group" role="group" aria-label="First group">
    <button type="button" class="btn btn-primary">1</button>
    ...
  </div>
  <div class="input-group">
    <div class="input-group-text" id="btnGroupAddon2">@</div>
    <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2">
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#mixed">copy</button>
    </figure>

    <hr>

    <h4 id="sizing">Sizing</h4>
    <p class="mb-3">Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to each <code>.btn-group</code>, including each one when nesting multiple groups.</p>
    <div class="example">
      <div class="btn-group btn-group-lg mb-1 mb-md-0" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-primary">Right</button>
      </div>
      <div class="btn-group mb-1 mb-md-0" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-primary">Right</button>
      </div>
      <div class="btn-group btn-group-sm mb-1 mb-md-0" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-primary">Right</button>
      </div>
    </div>
    <figure class="highlight" id="buttonSizing">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Left</button>
  <button type="button" class="btn btn-primary">Middle</button>
  <button type="button" class="btn btn-primary">Right</button>
</div>
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Left</button>
  <button type="button" class="btn btn-primary">Middle</button>
  <button type="button" class="btn btn-primary">Right</button>
</div>
<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Left</button>
  <button type="button" class="btn btn-primary">Middle</button>
  <button type="button" class="btn btn-primary">Right</button>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#buttonSizing">copy</button>
    </figure>
    
    <hr>

    <h4 id="nesting">Nesting</h4>
    <p class="mb-3">Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.</p>
    <div class="example">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <button type="button" class="btn btn-primary">1</button>
        <button type="button" class="btn btn-primary">2</button>
      
        <div class="btn-group" role="group">
          <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="javascript:;">Dropdown link</a>
            <a class="dropdown-item" href="javascript:;">Dropdown link</a>
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="buttonNesting">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  <button type="button" class="btn btn-primary">1</button>
  <button type="button" class="btn btn-primary">2</button>

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#buttonNesting">copy</button>
    </figure>
    
    <hr>

    <h4 id="vertical">Vertical variation</h4>
    <p class="mb-3">Make a set of buttons appear vertically stacked rather than horizontally. Split button dropdowns are not supported here.</p>
    <div class="example">
        <div class="btn-group-vertical me-1" role="group" aria-label="Vertical button group">
          <button type="button" class="btn btn-primary">Button</button>
          <button type="button" class="btn btn-primary">Button</button>
          <button type="button" class="btn btn-primary">Button</button>
          <button type="button" class="btn btn-primary">Button</button>
          <button type="button" class="btn btn-primary">Button</button>
          <button type="button" class="btn btn-primary">Button</button>
        </div>
        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
          <button type="button" class="btn btn-secondary">Button</button>
          <div class="btn-group" role="group">
            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
              <a class="dropdown-item" href="javascript:;">Dropdown link</a>
              <a class="dropdown-item" href="javascript:;">Dropdown link</a>
            </div>
          </div>
          <button type="button" class="btn btn-secondary">Button</button>
          <button type="button" class="btn btn-secondary">Button</button>
          <div class="btn-group" role="group">
            <button id="btnGroupVerticalDrop3" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
              <a class="dropdown-item" href="javascript:;">Dropdown link</a>
              <a class="dropdown-item" href="javascript:;">Dropdown link</a>
            </div>
          </div>
          <div class="btn-group" role="group">
            <button id="btnGroupVerticalDrop4" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
              <a class="dropdown-item" href="javascript:;">Dropdown link</a>
              <a class="dropdown-item" href="javascript:;">Dropdown link</a>
            </div>
          </div>
        </div>
    </div>
    <figure class="highlight" id="verticalVariations">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="btn-group-vertical">
    ...
  </div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#verticalVariations">copy</button>
    </figure>
    
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Basic example</a>
      </li>
      <li class="nav-item">
        <a href="#checkbox-radio" class="nav-link">Checkbox and radio</a>
      </li>
      <li class="nav-item">
        <a href="#toolbar" class="nav-link">Button toolbar</a>
      </li>
      <li class="nav-item">
        <a href="#sizing" class="nav-link">Sizing</a>
      </li>
      <li class="nav-item">
        <a href="#nesting" class="nav-link">Nesting</a>
      </li>
      <li class="nav-item">
        <a href="#vertical" class="nav-link">Vertical variations</a>
      </li>
      
    </ul>
  </div>
</div>        
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush