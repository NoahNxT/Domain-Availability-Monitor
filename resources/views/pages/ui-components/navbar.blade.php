@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
    <h1 class="page-title">Navbar</h1>
    <p class="lead">Responsive navigation header, the navbar. Includes support for branding, navigation, and more, including support for our collapse plugin. Read the <a href="https://getbootstrap.com/docs/5.1/components/navbar/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>
    
    <hr>
    
    <h4 id="default">Basic example</h4>
    <p class="mb-3">Here’s an example of all the sub-components included in a responsive light-themed navbar that automatically collapses at the <code>lg</code> (large) breakpoint.</p>
    <div class="example">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="javascript:;">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
          <ul class="navbar-nav me-auto">
            <li class="nav-item active">
              <a class="nav-link" href="javascript:;">Home <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
    <figure class="highlight" id="Default">
<pre><code class="language-markup"><script type="script/prism-html-markup"><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav me-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="visually-hidden">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#default">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="brand">Brand</h4>
    <p class="mb-3">The <code>.navbar-brand</code> can be applied to most elements, but an anchor works best as some elements might require utility classes or custom styles.</p>
    <div class="example">
      <!-- As a link -->
      <nav class="navbar navbar-light bg-light mb-3">
        <a class="navbar-brand" href="javascript:;">Navbar</a>
      </nav>
      <!-- As a heading -->
      <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Navbar</span>
      </nav>
    </div>
    <figure class="highlight" id="Brand">
<pre><code class="language-markup"><script type="script/prism-html-markup"><!-- As a link -->
<nav class="navbar navbar-light bg-light">
	<a class="navbar-brand" href="#">Navbar</a>
</nav>
<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
	<span class="navbar-brand mb-0 h1">Navbar</span>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Brand">copy</button>
    </figure>
    <p class="mb-3">Adding images to the <code>.navbar-brand</code> will likely always require custom styles or utilities to properly size. Here are some examples to demonstrate.</p>
    <div class="example">
      <!-- Just an image -->
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="javascript:;">
          <img src="{{ url('assets/images/others/logo-placeholder.png') }}" width="30" height="30" alt="">
        </a>
      </nav>
    </div>
    <figure class="highlight" id="brandImage">
<pre><code class="language-markup"><script type="script/prism-html-markup"><!-- Just an image -->
<nav class="navbar navbar-light bg-light">
	<a class="navbar-brand" href="#">
		<img src="..." width="30" height="30" alt="">
	</a>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#brandImage">copy</button>
    </figure>
    <div class="example">
      <!-- Image and text -->
      <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="javascript:;">
            <img src="{{ url('assets/images/others/logo-placeholder.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
            Logo
          </a>
        </nav>
    </div>
    <figure class="highlight" id="brandImgText">
<pre><code class="language-markup"><script type="script/prism-html-markup"><!-- Image and text -->
<nav class="navbar navbar-light bg-light">
	<a class="navbar-brand" href="#">
		<img src="..." width="30" height="30" class="d-inline-block align-top" alt="">
		Logo
	</a>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#brandImgText">copy</button>
    </figure>
    
    <hr>

    <h4 id="forms1">Forms</h4>
    <p class="mb-3">Place various form controls and components within a navbar.</p>
    <div class="example">
      <nav class="navbar navbar-light bg-light">
        <form class="d-flex ms-auto">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </nav>
    </div>
    <figure class="highlight" id="Forms1">
<pre><code class="language-markup"><script type="script/prism-html-markup"><nav class="navbar navbar-light bg-light">
	<form class="d-flex ms-auto">
		<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-success" type="submit">Search</button>
	</form>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Forms1">copy</button>
    </figure>
    
    <hr>

    <h4 id="text">Text</h4>
    <p class="mb-3">Navbars may contain bits of text with the help of <code>.navbar-text</code>. This class adjusts vertical alignment and horizontal spacing for strings of text.</p>
    <div class="example">
      <nav class="navbar navbar-light bg-light">
        <span class="navbar-text">
          Navbar text with an inline element
        </span>
      </nav>
    </div>
    <figure class="highlight" id="Text">
<pre><code class="language-markup"><script type="script/prism-html-markup"><nav class="navbar navbar-light bg-light">
	<span class="navbar-text">
		Navbar text with an inline element
	</span>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Text">copy</button>
    </figure>
    
    <hr>

    <h4 id="color-schemes">Color schemes</h4>
    <p class="mb-3">Theming the navbar has never been easier thanks to the combination of theming classes and <code>background-color</code> utilities. Choose from <code>.navbar-light</code> for use with light background colors, or <code>.navbar-dark</code> for dark background colors. Then, customize with <code>.bg-*</code> utilities.</p>
    <div class="example">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <a class="navbar-brand" href="javascript:;">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav me-auto">
            <li class="nav-item active">
              <a class="nav-link" href="javascript:;">Home <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;">About</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
        <a class="navbar-brand" href="javascript:;">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav me-auto">
            <li class="nav-item active">
              <a class="nav-link" href="javascript:;">Home <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;">About</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <a class="navbar-brand" href="javascript:;">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarColor03">
          <ul class="navbar-nav me-auto">
            <li class="nav-item active">
              <a class="nav-link" href="javascript:;">Home <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;">About</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
    <figure class="highlight" id="colorSchemes">
<pre><code class="language-markup"><script type="script/prism-html-markup"><nav class="navbar navbar-dark bg-dark">
	<!-- Navbar content -->
</nav>

<nav class="navbar navbar-dark bg-primary">
	<!-- Navbar content -->
</nav>

<nav class="navbar navbar-light bg-danger">
	<!-- Navbar content -->
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#colorSchemes">copy</button>
    </figure>
    
    <hr>


    <h4 id="toggler">Toggler</h4>
    <p class="mb-3">Below the example of toggler</p>
    <div class="example">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="javascript:;">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="javascript:;">Home <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="javascript:;" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
    <figure class="highlight" id="Toggler">
<pre><code class="language-markup"><script type="script/prism-html-markup"><nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Navbar</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		<ul class="navbar-nav me-auto mt-2 mt-lg-0">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="visually-hidden">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			</li>
		</ul>
		<form class="d-flex">
			<input class="form-control me-sm-2" type="search" placeholder="Search">
			<button class="btn btn-outline-success" type="submit">Search</button>
		</form>
	</div>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Toggler">copy</button>
    </figure>
    
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Default</a>
      </li>
      <li class="nav-item">
        <a href="#brand" class="nav-link">Brand</a>
      </li>
      <li class="nav-item">
        <a href="#forms" class="nav-link">Forms</a>
      </li>
      <li class="nav-item">
        <a href="#text" class="nav-link">Text</a>
      </li>
      <li class="nav-item">
        <a href="#color-schemes" class="nav-link">Color schemes</a>
      </li>
      <li class="nav-item">
        <a href="#toggler" class="nav-link">Toggler</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush