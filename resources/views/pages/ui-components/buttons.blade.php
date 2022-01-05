@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
    <h1 class="page-title">Buttons</h1>
    <p class="lead">Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more. Read the <a href="https://getbootstrap.com/docs/5.1/components/buttons/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>

    <hr>

    <h4 id="default">Basic Examples</h4>
    <p class="mb-3">Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</p>
    <div class="example">
      <button type="button" class="btn btn-primary mb-1 mb-md-0">Primary</button>
      <button type="button" class="btn btn-secondary mb-1 mb-md-0">Secondary</button>
      <button type="button" class="btn btn-success mb-1 mb-md-0">Success</button>
      <button type="button" class="btn btn-danger mb-1 mb-md-0">Danger</button>
      <button type="button" class="btn btn-warning mb-1 mb-md-0">Warning</button>
      <button type="button" class="btn btn-info mb-1 mb-md-0">Info</button>
      <button type="button" class="btn btn-light mb-1 mb-md-0">Light</button>
      <button type="button" class="btn btn-dark mb-1 mb-md-0">Dark</button>
      <button type="button" class="btn btn-link mb-1 mb-md-0">Link</button>
    </div>
    <figure class="highlight" id="defaultButton">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#defaultButton">copy</button>
    </figure>
    
    <hr>

    <h4 id="inverse">Inverse Buttons</h4>
    <p class="mb-3">Inverse buttons.</p>
    <div class="example">
      <button type="button" class="btn btn-inverse-primary mb-1 mb-md-0">Primary</button>
      <button type="button" class="btn btn-inverse-secondary mb-1 mb-md-0">Secondary</button>
      <button type="button" class="btn btn-inverse-success mb-1 mb-md-0">Success</button>
      <button type="button" class="btn btn-inverse-danger mb-1 mb-md-0">Danger</button>
      <button type="button" class="btn btn-inverse-warning mb-1 mb-md-0">Warning</button>
      <button type="button" class="btn btn-inverse-info mb-1 mb-md-0">Info</button>
      <button type="button" class="btn btn-inverse-light mb-1 mb-md-0">Light</button>
      <button type="button" class="btn btn-inverse-dark mb-1 mb-md-0">Dark</button>
    </div>
    <figure class="highlight" id="inverseButton">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button type="button" class="btn btn-inverse-primary">Primary</button>
<button type="button" class="btn btn-inverse-secondary">Secondary</button>
<button type="button" class="btn btn-inverse-success">Success</button>
<button type="button" class="btn btn-inverse-danger">Danger</button>
<button type="button" class="btn btn-inverse-warning">Warning</button>
<button type="button" class="btn btn-inverse-info">Info</button>
<button type="button" class="btn btn-inverse-light">Light</button>
<button type="button" class="btn btn-inverse-dark">Dark</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#inverseButton">copy</button>
    </figure>
    
    <hr>

    <h4 id="tags">Button tags</h4>
    <p class="mb-3">The <code>.btn</code> classes are designed to be used with the <code>&lt;button&gt;</code> element. However, you can also use these classes on <code>&lt;a&gt;</code> or <code>&lt;input&gt;</code> elements (though some browsers may apply a slightly different rendering).</p>
    <div class="example">
      <a class="btn btn-primary mb-1 mb-md-0" href="javascript:;" role="button">Link</a>
      <button class="btn btn-primary mb-1 mb-md-0" type="submit">Button</button>
      <input class="btn btn-primary mb-1 mb-md-0" type="button" value="Input">
      <input class="btn btn-primary mb-1 mb-md-0" type="submit" value="Submit">
      <input class="btn btn-primary mb-1 mb-md-0" type="reset" value="Reset">
    </div>
    <figure class="highlight" id="tagsButton">
<pre><code class="language-markup"><script type="script/prism-html-markup"><a class="btn btn-primary" href="#" role="button">Link</a>
<button class="btn btn-primary" type="submit">Button</button>
<input class="btn btn-primary" type="button" value="Input">
<input class="btn btn-primary" type="submit" value="Submit">
<input class="btn btn-primary" type="reset" value="Reset"></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#tagsButton">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="outline">Outline buttons</h4>
    <p class="mb-3">In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code>.btn-outline-*</code> ones to remove all background images and colors on any button.</p>
    <div class="example">
      <button type="button" class="btn btn-outline-primary mb-1 mb-md-0">Primary</button>
      <button type="button" class="btn btn-outline-secondary mb-1 mb-md-0">Secondary</button>
      <button type="button" class="btn btn-outline-success mb-1 mb-md-0">Success</button>
      <button type="button" class="btn btn-outline-danger mb-1 mb-md-0">Danger</button>
      <button type="button" class="btn btn-outline-warning mb-1 mb-md-0">Warning</button>
      <button type="button" class="btn btn-outline-info mb-1 mb-md-0">Info</button>
      <button type="button" class="btn btn-outline-light mb-1 mb-md-0">Light</button>
      <button type="button" class="btn btn-outline-dark mb-1 mb-md-0">Dark</button>
    </div>
    <figure class="highlight" id="outlineButton">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button type="button" class="btn btn-outline-primary">Primary</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#outlineButton">copy</button>
    </figure>
    
    <hr>

    <h4 id="sizes">Sizes</h4>
    <p class="mb-3">Fancy larger or smaller buttons? Add <code>.btn-lg</code> or <code>.btn-sm</code> for additional sizes.</p>
    <div class="example">
      <button type="button" class="btn btn-primary btn-lg me-1 mb-1 mb-md-0">Large button</button>
      <button type="button" class="btn btn-primary me-1 mb-1 mb-md-0">Default button</button>
      <button type="button" class="btn btn-primary btn-sm me-1 mb-1 mb-md-0">Small button</button>        
      <button type="button" class="btn btn-primary btn-xs mb-1 mb-md-0">Extra small</button>        
    </div>
    <figure class="highlight" id="buttonSizes">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button type="button" class="btn btn-primary btn-lg">Large button</button>
<button type="button" class="btn btn-primary btn-sm">Small button</button>
<button type="button" class="btn btn-primary">Default button</button>
<button type="button" class="btn btn-primary btn-xs">Extra small</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#buttonSizes">copy</button>
    </figure>
    <p class="mb-3">Create block level buttons—those that span the full width of a parent.</p>
    <div class="example">
      <div class="d-grid gap-2">
        <button type="button" class="btn btn-primary">Block level button</button>
        <button type="button" class="btn btn-secondary">Block level button</button>
      </div>
    </div>
    <figure class="highlight" id="defaultBreadcrumbs">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="d-grid gap-2">
  <button type="button" class="btn btn-primary">Block level button</button>
  <button type="button" class="btn btn-secondary">Block level button</button>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#defaultBreadcrumbs">copy</button>
    </figure>
    
    <hr>

    <h4 id="active">Active state</h4>
    <p class="mb-3">Buttons will appear pressed (with a darker background, darker border, and inset shadow) when active. <strong>There’s no need to add a class to <code>&lt;button&gt;</code>s as they use a pseudo-class</strong>. However, you can still force the same active appearance with <code>.active</code> (and include the <code>aria-pressed="true"</code> attribute) should you need to replicate the state programmatically.</p>
    <div class="example">
      <a href="javascript:;" class="btn btn-primary active" role="button" aria-pressed="true">Primary link</a>
      <a href="javascript:;" class="btn btn-secondary active" role="button" aria-pressed="true">Link</a>       
    </div>
    <figure class="highlight" id="activeButton">
<pre><code class="language-markup"><script type="script/prism-html-markup"><a href="#" class="btn btn-primary active" role="button" aria-pressed="true">Primary link</a>
<a href="#" class="btn btn-secondary active" role="button" aria-pressed="true">Link</a></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#activeButton">copy</button>
    </figure>
    
    <hr>

    <h4 id="disabled">Disabled state</h4>
    <p class="mb-3">Make buttons look inactive by adding the <code>disabled</code> boolean attribute to any <code>&lt;button&gt;</code> element.</p>
    <div class="example">
      <button type="button" class="btn btn-primary" disabled>Primary button</button>
      <button type="button" class="btn btn-secondary" disabled>Button</button>     
    </div>
    <figure class="highlight" id="disabledButton">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button type="button" class="btn btn-primary" disabled>Primary button</button>
<button type="button" class="btn btn-secondary" disabled>Button</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#disabledButton">copy</button>
    </figure>
    <p class="mb-3">Disabled buttons using the <code>&lt;a&gt;</code> element behave a bit different. <code>&lt;a&gt;</code>s don’t support the <code>disabled</code> attribute, so you must add the <code>.disabled</code> class to make it visually appear disabled.</p>
    <div class="example">
      <a href="javascript:;" class="btn btn-primary disabled" tabindex="-1" role="button" aria-disabled="true">Primary link</a>
      <a href="javascript:;" class="btn btn-secondary disabled" tabindex="-1" role="button" aria-disabled="true">Link</a>   
    </div>
    <figure class="highlight" id="defaultButton2">
<pre><code class="language-markup"><script type="script/prism-html-markup"><a href="#" class="btn btn-primary disabled" tabindex="-1" role="button" aria-disabled="true">Primary link</a>
<a href="#" class="btn btn-secondary disabled" tabindex="-1" role="button" aria-disabled="true">Link</a></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#defaultButton2">copy</button>
    </figure>
    
    <hr>

    <h4 id="with-icon">Icon buttons</h4>
    <p class="mb-3">Add class <code>.btn-icon</code> for buttons with only icons.</p>
    <div class="example">
      <button type="button" class="btn btn-primary btn-icon">
        <i data-feather="check-square"></i>
      </button>
      <button type="button" class="btn btn-danger btn-icon">
        <i data-feather="box"></i>
      </button>
    </div>
    <figure class="highlight" id="withIcon">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button type="button" class="btn btn-primary btn-icon">
  <i data-feather="check-square"></i>
</button>
<button type="button" class="btn btn-danger btn-icon">
  <i data-feather="box"></i>
</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#withIcon">copy</button>
    </figure>
    
    <hr>

    <h4 id="with-icon-text">Button with text and icon</h4>
    <p class="mb-3">Wrap icon and text inside <code>.btn-icon-text</code> and use <code>.btn-icon-prepend</code> or <code>.btn-icon-append</code> for icon tags.</p>
    <div class="example">
      <button type="button" class="btn btn-primary btn-icon-text mb-1 mb-md-0">
        <i class="btn-icon-prepend" data-feather="check-square"></i>
        Button with Icon
      </button>
      <button type="button" class="btn btn-primary btn-icon-text mb-1 mb-md-0">
        Button with Icon
        <i class="btn-icon-append" data-feather="box"></i>
      </button>
    </div>
    <figure class="highlight" id="withIconText">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button type="button" class="btn btn-primary btn-icon-text">
  <i class="btn-icon-prepend" data-feather="check-square"></i>
  Button with Icon
</button>
<button type="button" class="btn btn-primary btn-icon-text">
  Button with Icon
  <i class="btn-icon-append" data-feather="box"></i>
</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#withIconText">copy</button>
    </figure>

    <hr>

    <h4 id="social-icon">Social icon buttons</h4>
    <div class="example">
      <button type="button" class="btn btn-icon btn-facebook mb-1 mb-md-0">
        <i data-feather="facebook"></i>
      </button>
      <button type="button" class="btn btn-icon btn-instagram mb-1 mb-md-0">
        <i data-feather="instagram"></i>
      </button>
      <button type="button" class="btn btn-icon btn-twitter mb-1 mb-md-0">
        <i data-feather="twitter"></i>
      </button>
      <button type="button" class="btn btn-icon btn-youtube mb-1 mb-md-0">
        <i data-feather="youtube"></i>
      </button>
      <button type="button" class="btn btn-icon btn-github mb-1 mb-md-0">
        <i data-feather="github"></i>
      </button>
      <button type="button" class="btn btn-icon btn-linkedin mb-1 mb-md-0">
        <i data-feather="linkedin"></i>
      </button>
      <button type="button" class="btn btn-icon btn-outline-twitter mb-1 mb-md-0">
        <i data-feather="twitter"></i>
      </button>
    </div>
    <figure class="highlight" id="socialIcon">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button type="button" class="btn btn-icon btn-facebook">
  <i data-feather="facebook"></i>
</button>
<button type="button" class="btn btn-icon btn-instagram">
  <i data-feather="instagram"></i>
</button>
<button type="button" class="btn btn-icon btn-twitter">
  <i data-feather="twitter"></i>
</button>
<button type="button" class="btn btn-icon btn-youtube">
  <i data-feather="youtube"></i>
</button>
<button type="button" class="btn btn-icon btn-github">
  <i data-feather="github"></i>
</button>
<button type="button" class="btn btn-icon btn-linkedin">
  <i data-feather="linkedin"></i>
</button>
<button type="button" class="btn btn-icon btn-outline-twitter">
  <i data-feather="twitter"></i>
</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#socialIcon">copy</button>
    </figure>

    <hr>

    <h4 id="social-icon-text">Social buttons with icon and text</h4>
    <div class="example">
      <button type="button" class="btn btn-icon-text btn-facebook mb-1">
        <i class="btn-icon-prepend" data-feather="facebook"></i>
        Facebook
      </button>
      <button type="button" class="btn btn-icon-text btn-instagram mb-1">
        <i class="btn-icon-prepend" data-feather="instagram"></i>
        Instagram
      </button>
      <button type="button" class="btn btn-icon-text btn-twitter mb-1">
        <i class="btn-icon-prepend" data-feather="twitter"></i>
        Twitter
      </button>
      <button type="button" class="btn btn-icon-text btn-youtube mb-1">
        <i class="btn-icon-prepend" data-feather="youtube"></i>
        Youtube
      </button>
      <button type="button" class="btn btn-icon-text btn-github mb-1">
        <i class="btn-icon-prepend" data-feather="github"></i>
        Github
      </button>
      <button type="button" class="btn btn-icon-text btn-linkedin mb-1">
        <i class="btn-icon-prepend" data-feather="linkedin"></i>
        LinkedIn
      </button>
      <button type="button" class="btn btn-icon-text btn-outline-twitter mb-1">
        <i class="btn-icon-prepend" data-feather="twitter"></i>
        Twitter
      </button>
    </div>
    <figure class="highlight" id="socialIconText">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button type="button" class="btn btn-icon-text btn-facebook">
  <i class="btn-icon-prepend" data-feather="facebook"></i>
  Facebook
</button>
<button type="button" class="btn btn-icon-text btn-instagram">
  <i class="btn-icon-prepend" data-feather="instagram"></i>
  Instagram
</button>
<button type="button" class="btn btn-icon-text btn-twitter">
  <i class="btn-icon-prepend" data-feather="twitter"></i>
  Twitter
</button>
<button type="button" class="btn btn-icon-text btn-youtube">
  <i class="btn-icon-prepend" data-feather="youtube"></i>
  Youtube
</button>
<button type="button" class="btn btn-icon-text btn-github">
  <i class="btn-icon-prepend" data-feather="github"></i>
  Github
</button>
<button type="button" class="btn btn-icon-text btn-linkedin">
  <i class="btn-icon-prepend" data-feather="linkedin"></i>
  LinkedIn
</button>
<button type="button" class="btn btn-icon-text btn-outline-twitter">
  <i class="btn-icon-prepend" data-feather="twitter"></i>
  Twitter
</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#socialIconText">copy</button>
    </figure>
    
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
    <li class="nav-item">
        <a href="#default" class="nav-link">Basic example</a>
      </li>
      <li class="nav-item">
        <a href="#inverse" class="nav-link">Inverse Buttons</a>
      </li>
      <li class="nav-item">
        <a href="#tags" class="nav-link">Button tags</a>
      </li>
      <li class="nav-item">
        <a href="#outline" class="nav-link">Outline buttons</a>
      </li>
      <li class="nav-item">
        <a href="#sizes" class="nav-link">Button sizes</a>
      </li>
      <li class="nav-item">
        <a href="#active" class="nav-link">Active state</a>
      </li>
      <li class="nav-item">
        <a href="#disabled" class="nav-link">Disabled state</a>
      </li>
      <li class="nav-item">
        <a href="#with-icon" class="nav-link">Icon buttons</a>
      </li>
      <li class="nav-item">
        <a href="#with-icon-text" class="nav-link">With icon and text</a>
      </li>
      <li class="nav-item">
        <a href="#social-icon" class="nav-link">Social icon</a>
      </li>
      <li class="nav-item">
        <a href="#social-icon-text" class="nav-link">Social icon and text</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush