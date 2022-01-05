@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
    <h1 class="page-title">Breadcrumbs</h1>
    <p class="lead">Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS. Read the <a href="https://getbootstrap.com/docs/5.1/components/breadcrumb/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>

    <hr>

    <h4 id="default">Basic example</h4>
    <div class="example">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:;">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
    </div>
    <figure class="highlight" id="defaultBreadcrumbs">
<pre><code class="language-markup"><script type="script/prism-html-markup"><nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#defaultBreadcrumbs">copy</button>
    </figure>

    <hr>

    <h4 id="line">Line seperator</h4>
    <div class="example">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-line">
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:;">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
    </div>
    <figure class="highlight" id="lineBreadcrumb">
<pre><code class="language-markup"><script type="script/prism-html-markup"><nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-line">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#lineBreadcrumb">copy</button>
    </figure>

    <hr>

    <h4 id="dot">Dot seperator</h4>
    <div class="example">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dot">
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:;">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
    </div>
    <figure class="highlight" id="dotBreadcrumb">
<pre><code class="language-markup"><script type="script/prism-html-markup"><nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-dot">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dotBreadcrumb">copy</button>
    </figure>

    <hr>

    <h4 id="arrow">Arrow seperator</h4>
    <div class="example">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-arrow">
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:;">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
    </div>
    <figure class="highlight" id="arrowBreadcrumb">
<pre><code class="language-markup"><script type="script/prism-html-markup"><nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-arrwo">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#arrowBreadcrumb">copy</button>
    </figure>

    <hr>

    <h4 id="changing-seperator">Changing the separator</h4>
    <p class="mb-3">Separators are automatically added in CSS through <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/::before"><code>::before</code></a> and <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/content"><code>content</code></a>. They can be changed by changing <code>$breadcrumb-divider</code>. The <a href="https://sass-lang.com/documentation/Sass/Script/Functions.html#quote-instance_method">quote</a> function is needed to generate the quotes around a string, so if you want <code>&gt;</code> as separator, you can use this:</p>
    <figure class="highlight" id="divider">
<pre><code class="language-css"><script type="script/prism-html-markup">$breadcrumb-divider: quote(">");</script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#divider">copy</button>
    </figure>
    <p class="mb-3">It’s also possible to use a base64 embedded SVG icon:</p>
    <figure class="highlight" id="base64">
<pre><code class="language-css"><script type="script/prism-html-markup">$breadcrumb-divider: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4IiBoZWlnaHQ9IjgiPjxwYXRoIGQ9Ik0yLjUgMEwxIDEuNSAzLjUgNCAxIDYuNSAyLjUgOGw0LTQtNC00eiIgZmlsbD0iY3VycmVudENvbG9yIi8+PC9zdmc+);</script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#base64">copy</button>
    </figure>
    <p class="mb-3">The separator can be removed by setting <code>$breadcrumb-divider</code> to <code>none</code>:</p>
    <figure class="highlight" id="seperatorNone">
<pre><code class="language-markup"><script type="script/prism-html-markup">$breadcrumb-divider: none;</script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#seperatorNone">copy</button>
    </figure>
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Basic example</a>
      </li>
      <li class="nav-item">
        <a href="#line" class="nav-link">Line seperator</a>
      </li>
      <li class="nav-item">
        <a href="#dot" class="nav-link">Dot seperator</a>
      </li>
      <li class="nav-item">
        <a href="#arrow" class="nav-link">Arrow seperator</a>
      </li>
      <li class="nav-item">
        <a href="#changing-seperator" class="nav-link">Changing seperator</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush