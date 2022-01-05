@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
    <h1 class="page-title">Media Object</h1>
    <p class="lead">Construct highly repetitive components like blog comments, tweets, and the like.</p>
    
    <hr>
    
    <h4 id="default">Basic example</h4>
    <div class="example">
      <div class="d-flex align-items-start">
        <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="wd-100 wd-sm-200 me-3" alt="...">
        <div>
          <h5 class="mb-2">Media heading</h5>
          <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
      </div>
    </div>
    <figure class="highlight" id="Default">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="d-flex align-items-start">
	<img src="..." class="wd-100 wd-sm-200 me-3" alt="...">
	<div>
		<h5 class="mb-2">Media heading</h5>
		<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
	</div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Default">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="nesting">Nesting</h4>
    <p class="mb-3">Can be infinitely nested.</p>
    <div class="example">
      <div class="d-flex align-items-start">
        <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="wd-100 wd-sm-150 me-3" alt="...">
        <div>
          <h5 class="mb-2">Media heading</h5>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      
          <div class="d-flex align-items-start mt-3">
            <a class="me-3" href="#">
              <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="wd-100 wd-sm-150" alt="...">
            </a>
            <div>
              <h5 class="mb-2">Media heading</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="Nesting">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="d-flex align-items-start">
	<img src="..." class="wd-100 wd-sm-150 me-3" alt="...">
	<div>
		<h5 class="mb-2">Media heading</h5>
		Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

		<div class="d-flex align-items-start mt-3">
			<a class="me-3" href="#">
				<img src="..." class="wd-100 wd-sm-150" alt="...">
			</a>
			<div>
				<h5 class="mb-2">Media heading</h5>
				Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
			</div>
		</div>
	</div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Nesting">copy</button>
    </figure>
    
    <hr>
    
    <h4 id="alignment">Alignment</h4>
    <p class="mb-3">Can be aligned to the top (default), middle, or end.</p>
    <div class="example">
      <div class="d-flex align-items-start">
        <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="align-self-start wd-100 wd-sm-150 me-3" alt="...">
        <div>
          <h5 class="mb-2">Top-aligned media</h5>
          <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
          <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
      </div>
    </div>
    <figure class="highlight" id="Alignment">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="d-flex align-items-start">
	<img src="..." class="align-self-start wd-100 wd-sm-150 me-3" alt="...">
	<div>
		<h5 class="mb-2">Top-aligned media</h5>
		<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
		<p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
	</div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Alignment">copy</button>
    </figure>
    
    <div class="example">
      <div class="d-flex align-items-start">
        <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="align-self-center wd-100 wd-sm-150 me-3" alt="...">
        <div>
          <h5 class="mb-2">Center-aligned media</h5>
          <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
          <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
      </div>
    </div>
    <figure class="highlight" id="centerAlign">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="d-flex align-items-start">
	<img src="..." class="align-self-center wd-100 wd-sm-150 me-3" alt="...">
	<div>
		...
	</div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#centerAlign">copy</button>
    </figure>
    
    <div class="example">
      <div class="d-flex align-items-start">
        <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="align-self-end wd-100 wd-sm-150 me-3" alt="...">
        <div>
          <h5 class="mb-2">Bottom-aligned media</h5>
          <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
          <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
      </div>
    </div>
    <figure class="highlight" id="bottomAlign">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="d-flex align-items-start">
	<img src="..." class="align-self-end wd-100 wd-sm-150 me-3" alt="...">
	<div>
		...
	</div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#bottomAlign">copy</button>
    </figure>

    <hr>
    
    <h4 id="order">Order</h4>
    <div class="example">
      <div class="d-flex align-items-start">
        <div>
          <h5 class="mt-0 mb-1">Media object</h5>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
        <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="wd-100 wd-sm-150 ms-3" alt="...">
      </div>
    </div>
    <figure class="highlight" id="Order">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="d-flex align-items-start">
	<div>
		<h5 class="mt-0 mb-1">Media object</h5>
		Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
	</div>
	<img src="..." class="wd-100 wd-sm-150 ms-3" alt="...">
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Order">copy</button>
    </figure>
    
    <hr>

    <h4 id="media-list">Media list</h4>
    <div class="example">
      <ul class="list-unstyled">
        <li class="d-flex align-items-start">
          <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="wd-100 wd-sm-150 me-3" alt="...">
          <div>
            <h5 class="mt-0 mb-1">List-based media object</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </li>
        <li class="d-flex align-items-start my-4">
          <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="wd-100 wd-sm-150 me-3" alt="...">
          <div>
            <h5 class="mt-0 mb-1">List-based media object</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </li>
        <li class="d-flex align-items-start">
          <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="wd-100 wd-sm-150 me-3" alt="...">
          <div>
            <h5 class="mt-0 mb-1">List-based media object</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </li>
      </ul>
    </div>
    <figure class="highlight" id="mediaList">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="list-unstyled">
	<li class="d-flex align-items-start">
		<img src="..." class="wd-100 wd-sm-150 me-3" alt="...">
		<div>
			<h5 class="mt-0 mb-1">List-based media object</h5>
			Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
		</div>
	</li>
	<li class="d-flex align-items-start my-4">
		...
	</li>
	<li class="d-flex align-items-start">
		...
	</li>
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#mediaList">copy</button>
    </figure>
                
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Basic example</a>
      </li>
      <li class="nav-item">
        <a href="#nesting" class="nav-link">Nesting</a>
      </li>
      <li class="nav-item">
        <a href="#alignment" class="nav-link">Alignment</a>
      </li>
      <li class="nav-item">
        <a href="#order" class="nav-link">Order</a>
      </li>
      <li class="nav-item">
        <a href="#media-list" class="nav-link">Media list</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush