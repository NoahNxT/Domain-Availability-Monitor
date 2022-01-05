@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
    <h1 class="page-title">Cards</h1>
    <p class="lead">A flexible and extensible content container with multiple variants and options. Read the <a href="https://getbootstrap.com/docs/5.1/components/card/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>

    <hr>

    <h4 id="default">Basic Example</h4>
    <p class="mb-3">Below is an example of a basic card with mixed content and a fixed width. Cards have no fixed width to start, so they’ll naturally fill the full width of its parent element. This is easily customized with our various <a href="#sizing">sizing options</a>.</p>
    <div class="example">
      <div class="row">
        <div class="col-12 col-md-6 col-xl-4">
          <div class="card">
              <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="javascript:;" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="defaultCard">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#defaultCard">copy</button>
    </figure>
    
    <hr>

    <h4 id="contents">Content types</h4>
    <p class="mb-3">Cards support a wide variety of content, including images, text, list groups, links, and more. Below are examples of what’s supported.</p>
    <h4 id="body">Body</h4>
    <p class="mb-3">The building block of a card is the <code>.card-body</code>. Use it whenever you need a padded section within a card.</p>
    <div class="example">
      <div class="row">
        <div class="col-12 col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body">
              This is some text within a card body.
            </div>
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="contentBody">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="card">
    <div class="card-body">
      This is some text within a card body.
    </div>
  </div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#contentBody">copy</button>
    </figure>
    <h4 id="title-text-link">Titles, text, and links</h4>
    <p class="mb-3">Subtitles are used by adding a <code>.card-subtitle</code> to a <code>&lt;h*&gt;</code> tag. If the <code>.card-title</code> and the <code>.card-subtitle</code> items are placed in a <code>.card-body</code> item, the card title and subtitle are aligned nicely.</p>
    <div class="example">
      <div class="row">
        <div class="col-12 col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="javascript:;" class="card-link">Card link</a>
              <a href="javascript:;" class="card-link">Another link</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="titleText">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="card">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#titleText">copy</button>
    </figure>
    <h4 id="images">Images</h4>
    <p class="mb-3"><code>.card-img-top</code> places an image to the top of the card. With <code>.card-text</code>, text can be added to the card. Text within <code>.card-text</code> can also be styled with the standard HTML tags.</p>
    <div class="example">
      <div class="row">
        <div class="col-12 col-md-6 col-xl-4 grid-margin grid-margin-md-0">
          <div class="card">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="card-img-top" alt="...">
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="imageCard">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <img src="..." class="card-img-top" alt="...">
  </div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#imageCard">copy</button>
    </figure>
    <h4 id="list-groups">List groups</h4>
    <p class="mb-3">Create lists of content in a card with a flush list group.</p>
    <div class="example">
      <div class="row">
        <div class="col-12 col-md-6 col-xl-4">
          <div class="card">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="listGroups">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="card">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Cras justo odio</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
  </div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#listGroups">copy</button>
    </figure>
    <div class="example">
      <div class="row">
        <div class="col-12 col-md-6 col-xl-4">
          <div class="card">
            <div class="card-header">
              Featured
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="listGroups2">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="card">
    <div class="card-header">
      Featured
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Cras justo odio</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
  </div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#listGroups2">copy</button>
    </figure>
    
    <hr>

    <h4 id="header-footer">Header & Footer</h4>
    <p class="mb-3">Add an optional header and/or footer within a card.</p>
    <div class="example">
      <div class="row">
        <div class="col-12 col-md-6 col-xl-4">
          <div class="card">
            <div class="card-header">
              Card header
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text mb-3">With supporting text below as a natural lead-in to additional content.</p>
              <a href="javascript:;" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text mb-3">With supporting text below as a natural lead-in to additional content.</p>
              <a href="javascript:;" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer">
              Card footer
            </div>
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="headerFooter">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="card">
    <div class="card-header">
      Card header
    </div>
    <div class="card-body">
      ...
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      ...
    </div>
    <div class="card-footer">
      Card footer
    </div>
  </div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#headerFooter">copy</button>
    </figure>
    
    <hr>

    <h4 id="sizing">Sizing</h4>
    <p class="mb-3">Cards assume no specific <code>width</code> to start, so they’ll be 100% wide unless otherwise stated. You can change this as needed with custom CSS, grid classes, grid Sass mixins, or utilities.</p>
    <div class="example">
      <div class="row">
        <div class="col-12 col-md-4 col-xl-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text mb-3">With supporting text below as a natural lead-in to additional content.</p>
              <a href="javascript:;" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text mb-3">With supporting text below as a natural lead-in to content.</p>
              <a href="javascript:;" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="cardSizing">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="row">
    <div class="col-12 col-md-4 col-xl-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#cardSizing">copy</button>
    </figure>
    
    <hr>

    <h4 id="card-navigation">Card navigation</h4>
    <p class="mb-3">Add some navigation to a card’s header (or block) with Bootstrap’s nav components.</p>
    <div class="example">
      <div class="row">
        <div class="col-12">
          <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item"><a class="nav-link active" href="javascript:;">Active</a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:;">Link</a></li>
                <li class="nav-item"><a class="nav-link disabled" href="javascript:;" tabindex="-1" aria-disabled="true">Disabled</a></li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text mb-3">With supporting text below as a natural lead-in to additional content.</p>
              <a href="javascript:;" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>  
      </div>
    </div>
    <figure class="highlight" id="cardNavigation">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
        <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a></li>
      </ul>
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#cardNavigation">copy</button>
    </figure>
    
    <hr>

    <h4 id="image-overlay">Image overlay</h4>
    <p class="mb-3">Turn an image into a card background and overlay your card’s text. Depending on the image, you may or may not need additional styles or utilities.</p>
    <div class="example">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="card text-white">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title text-white fw-bolder">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text">Last updated 3 mins ago</p>
            </div>
          </div>
        </div>  
      </div>
    </div>
    <figure class="highlight" id="imgOverlay">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="card text-white">
    <img src="..." class="card-img" alt="...">
    <div class="card-img-overlay">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text">Last updated 3 mins ago</p>
    </div>
  </div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#imgOverlay">copy</button>
    </figure>
    
    <hr>

    <h4 id="bg-color">Background Color</h4>
    <p class="mb-3">Use <a href="https://getbootstrap.com/docs/5.1/utilities/colors/" target="_blank">text color</a> and <a href="https://getbootstrap.com/docs/5.1/utilities/background/" target="_blank">background utilities</a> to change the appearance of a card.</p>
    <div class="example">
      <div class="row">
        <div class="col-12 col-md-6 grid-margin">
          <div class="card text-white bg-primary">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title text-white">Primary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 grid-margin">
          <div class="card text-white bg-secondary">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title text-white">Secondary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 grid-margin">
          <div class="card text-white bg-success">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title text-white">Success card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 grid-margin">
          <div class="card text-white bg-danger">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title text-white">Danger card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 grid-margin">
          <div class="card text-white bg-warning">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title text-white">Warning card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 grid-margin">
          <div class="card text-white bg-info">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title text-white">Info card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 grid-margin">
          <div class="card bg-light">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title text-body">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 grid-margin">
          <div class="card text-white bg-dark">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title text-white">Dark card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="bgColor">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="card text-white bg-primary">
    <div class="card-header">Header</div>
    <div class="card-body">
      <h5 class="card-title">Primary card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>

  <div class="card text-white bg-secondary">
    ...
  </div>
  <div class="card text-white bg-success">
    ...
  </div>
  <div class="card text-white bg-danger">
    ...
  </div>
  <div class="card text-white bg-warning">
    ...
  </div>
  <div class="card text-white bg-info">
    ...
  </div>
  <div class="card text-white bg-light">
    ...
  </div>
  <div class="card text-white bg-dark">
    ...
  </div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#bgColor">copy</button>
    </figure>
    
    <hr>

    <h4 id="card-group">Card groups</h4>
    <p class="mb-3">Use card groups to render cards as a single, attached element with equal width and height columns. Card groups use <code>display: flex;</code> to achieve their uniform sizing.</p>
    <div class="example">
      <div class="card-group">
        <div class="card">
          <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="cardGroup">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="card-group">
    <div class="card"> ... </div>
    <div class="card"> ... </div>
    <div class="card"> ... </div>
  </div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#cardGroup">copy</button>
    </figure>
    
    <hr>

    <h4 id="grid">Grid cards</h4>
    <p class="mb-3">Use the Bootstrap grid system and its <a href="https://getbootstrap.com/docs/5.1/layout/grid/#row-columns" target="_blank"><code>.row-cols</code> classes</a> 
      to control how many grid columns (wrapped around your cards) you show per row. For example, here’s <code>.row-cols-1</code> laying out the cards on one column, 
      and <code>.row-cols-md-2</code> splitting four cards to equal width across multiple rows, from the medium breakpoint up.</p>
    <div class="example">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="cardDecks">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#cardDecks">copy</button>
    </figure>
    
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Basic Example</a>
      </li>
      <li class="nav-item">
        <a href="#contents" class="nav-link">Content types</a>
      </li>
      <li class="nav-item">
        <a href="#header-footer" class="nav-link">Header and footer</a>
      </li>
      <li class="nav-item">
        <a href="#sizing" class="nav-link">Sizing</a>
      </li>
      <li class="nav-item">
        <a href="#card-navigation" class="nav-link">Card navigation</a>
      </li>
      <li class="nav-item">
        <a href="#image-overlay" class="nav-link">Image overlay</a>
      </li>
      <li class="nav-item">
        <a href="#bg-color" class="nav-link">Background color</a>
      </li>
      <li class="nav-item">
        <a href="#card-group" class="nav-link">Card groups</a>
      </li>
      <li class="nav-item">
        <a href="#grid" class="nav-link">Grid cards</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush