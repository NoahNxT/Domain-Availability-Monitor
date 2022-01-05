@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
    <h1 class="page-title">Carousel</h1>
    <p class="lead">A slideshow component for cycling through elements—images or slides of text—like a carousel. Read the <a href="https://getbootstrap.com/docs/5.1/components/carousel/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>
    
    <hr>
    
    <h4 id="slides-only">Slides only</h4>
    <p class="mb-3">Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.w-100</code> on carousel images to prevent browser default image alignment.</p>
    <div class="example">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="slidesOnly">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="..." class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="..." class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="..." class="d-block w-100" alt="...">
		</div>
	</div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#slidesOnly">copy</button>
    </figure>
    
    <hr>

    <h4 id="with-controls">With controls</h4>
    <p class="mb-3">Adding in the previous and next controls:</p>
    <div class="example">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleControls" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleControls" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
    <figure class="highlight" id="withControls">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="..." class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="..." class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="..." class="d-block w-100" alt="...">
		</div>
	</div>
	<a class="carousel-control-prev" data-bs-target="#carouselExampleControls" role="button" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</a>
	<a class="carousel-control-next" data-bs-target="#carouselExampleControls" role="button" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</a>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#withControls">copy</button>
    </figure>
    
    <hr>

    <h4 id="with-indicators">With indicators</h4>
    <p class="mb-3">You can also add the indicators to the carousel, alongside the controls, too.</p>
    <div class="example">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleIndicators" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleIndicators" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
    <figure class="highlight" id="withIndicators">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
	<ol class="carousel-indicators">
		<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
		<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
		<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="..." class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="..." class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="..." class="d-block w-100" alt="...">
		</div>
	</div>
	<a class="carousel-control-prev" data-bs-target="#carouselExampleIndicators" role="button" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</a>
	<a class="carousel-control-next" data-bs-target="#carouselExampleIndicators" role="button" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</a>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#withIndicators">copy</button>
    </figure>
    
    <hr>

    <h4 id="with-captions">With captions</h4>
    <p class="mb-3">Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item</code>. They can be easily hidden on smaller viewports, as shown below, with optional <a href="https://getbootstrap.com/docs/5.1/utilities/display/" target="_blank">display utilities</a>. We hide them initially with <code>.d-none</code> and bring them back on medium-sized devices with <code>.d-md-block</code>.</p>
    <div class="example">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
    <figure class="highlight" id="withCaptions">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="example">
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<ol class="carousel-indicators">
			<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
			<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
			<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="..." class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>First slide label</h5>
					<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="..." class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Second slide label</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="..." class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Third slide label</h5>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" role="button" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</a>
		<a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" role="button" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</a>
	</div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#withCaptions">copy</button>
    </figure>
    
    <hr>

    <h4 id="crossfade">Crossfade</h4>
    <p class="mb-3">Add <code>.carousel-fade</code> to your carousel to animate slides with a fade transition instead of a slide.</p>
    <div class="example">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ url('assets/images/others/placeholder.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleFade" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleFade" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
    <figure class="highlight" id="crossfadeCarousel">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="..." class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="..." class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="..." class="d-block w-100" alt="...">
		</div>
	</div>
	<a class="carousel-control-prev" data-bs-target="#carouselExampleFade" role="button" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</a>
	<a class="carousel-control-next" data-bs-target="#carouselExampleFade" role="button" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</a>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#crossfadeCarousel">copy</button>
    </figure>
    
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#slides-only" class="nav-link">Slides only</a>
      </li>
      <li class="nav-item">
        <a href="#with-controls" class="nav-link">With controls</a>
      </li>
      <li class="nav-item">
        <a href="#with-indicators" class="nav-link">With indicators</a>
      </li>
      <li class="nav-item">
        <a href="#with-captions" class="nav-link">With captions</a>
      </li>
      <li class="nav-item">
        <a href="#crossfade" class="nav-link">Crossfade</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush