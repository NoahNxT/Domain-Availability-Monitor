@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
    <h1 class="page-title">Scrollbar</h1>
    <p class="lead">Custom scrollbar on an element. Read the <a href="https://github.com/mdbootstrap/perfect-scrollbar" target="_blank">Official Perfect-scrollbar Documentation</a> for a full list of instructions and other options.</p>
    
    <hr>
    
    <h4 id="default">Example</h4>
    <p class="mb-3">The base scrollbar component must position to relative and have a fix height.</p>
    <div class="example">
      <div class="perfect-scrollbar-example p-4">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, quam vitae? Saepe, quidem at in non quibusdam sint ipsa suscipit inventore. Dolore quae, quas obcaecati officia autem itaque numquam magni?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dolores vel ipsa fugiat maiores culpa accusamus, quisquam veniam quo deleniti velit facere aliquid, ut quis quibusdam reprehenderit quod aliquam perspiciatis?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae placeat cumque ea, temporibus, ipsam officia nesciunt rem quas quibusdam necessitatibus ad. Quos, nihil consequatur doloribus dicta dolore ab quibusdam assumenda!</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, consectetur suscipit sed, soluta aperiam vitae unde voluptatibus deserunt, ipsum voluptatem iure. Enim quibusdam dolorum facilis non tempore labore, doloremque sint.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni placeat distinctio delectus fugiat nobis quia expedita architecto vero quidem id ullam, itaque tempore. Qui, a doloremque. Molestias vel labore cumque.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime qui tempora mollitia eaque doloremque architecto, odit, pariatur rem harum vitae quod. Illo sed odit laboriosam voluptatem officiis magnam sequi maiores!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, fugiat porro dolore libero aspernatur tenetur qui ratione deleniti commodi modi accusamus maiores iure ipsa, tempore necessitatibus rerum eligendi quidem voluptates!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, quam vitae? Saepe, quidem at in non quibusdam sint ipsa suscipit inventore. Dolore quae, quas obcaecati officia autem itaque numquam magni?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dolores vel ipsa fugiat maiores culpa accusamus, quisquam veniam quo deleniti velit facere aliquid, ut quis quibusdam reprehenderit quod aliquam perspiciatis?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae placeat cumque ea, temporibus, ipsam officia nesciunt rem quas quibusdam necessitatibus ad. Quos, nihil consequatur doloribus dicta dolore ab quibusdam assumenda!</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, consectetur suscipit sed, soluta aperiam vitae unde voluptatibus deserunt, ipsum voluptatem iure. Enim quibusdam dolorum facilis non tempore labore, doloremque sint.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni placeat distinctio delectus fugiat nobis quia expedita architecto vero quidem id ullam, itaque tempore. Qui, a doloremque. Molestias vel labore cumque.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime qui tempora mollitia eaque doloremque architecto, odit, pariatur rem harum vitae quod. Illo sed odit laboriosam voluptatem officiis magnam sequi maiores!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, fugiat porro dolore libero aspernatur tenetur qui ratione deleniti commodi modi accusamus maiores iure ipsa, tempore necessitatibus rerum eligendi quidem voluptates!</p>
      </div>
    </div>
    <figure class="highlight" id="Default">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="perfect-scrollbar-example">
  <!-- content goes here -->
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Default">copy</button>
    </figure>
    <figure class="highlight" id="Default2">
<pre><code class="language-css"><script type="script/prism-html-markup"><!-- css -->
.perfect-scrollbar-example {
  position: relative;
  max-height: 250px;	
}</script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Default2">copy</button>
    </figure>
    <figure class="highlight" id="Default3">
<pre><code class="language-javascript"><script type="script/prism-html-markup">// javascript
var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');</script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Default3">copy</button>
    </figure>
    
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Example</a>
      </li>
      
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/demo.js') }}"></script>
@endpush