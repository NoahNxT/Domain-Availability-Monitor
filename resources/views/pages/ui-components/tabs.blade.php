@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
    <h1 class="page-title">Tabs</h1>
    <p class="lead">Use the Bootstrap tab javascript plugin to extend navigational tabs and pills to create tabbable panes of local content. Read the <a href="https://getbootstrap.com/docs/5.1/components/navs/#javascript-behavior" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>
    
    <hr>

    <h4 id="default">Example</h4>
    <p class="mb-3">The basic tab component consists of links, that are aligned horizontally.</p>
    <div class="example">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled" role="tab" aria-controls="disabled" aria-selected="false">Disabled</a>
        </li>
      </ul>
      <div class="tab-content border border-top-0 p-3" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <h6 class="mb-1">Home</h6>
          <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing 
          exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna 
          consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <h6 class="mb-1">Profile</h6>
          <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing 
          exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna 
          consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <h6 class="mb-1">Contact</h6>
          <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing 
          exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna 
          consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
        </div>
        <div class="tab-pane fade" id="disabled" role="tabpanel" aria-labelledby="disabled-tab">
          <h6 class="mb-1">disabled</h6>
        </div>
      </div>
    </div>
    <figure class="highlight" id="defaultTab">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled" role="tab" aria-controls="disabled" aria-selected="false">Disabled</a>
  </li>
</ul>
<div class="tab-content border border-top-0 p-3" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
  <div class="tab-pane fade" id="disabled" role="tabpanel" aria-labelledby="disabled-tab">...</div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#defaultTab">copy</button>
    </figure>

    <hr>

    <h4 id="vertical">Vertical</h4>
    <p class="mb-3">The tab component that display vertically.</p>
    <div class="example">
      <div class="row">
        <div class="col-5 col-md-3 pe-0">
          <div class="nav nav-tabs nav-tabs-vertical" id="v-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-home-tab" data-bs-toggle="tab" href="#v-home" role="tab" aria-controls="v-home" aria-selected="true">Home</a>
            <a class="nav-link" id="v-profile-tab" data-bs-toggle="tab" href="#v-profile" role="tab" aria-controls="v-profile" aria-selected="false">Profile</a>
            <a class="nav-link" id="v-messages-tab" data-bs-toggle="tab" href="#v-messages" role="tab" aria-controls="v-messages" aria-selected="false">Messages</a>
            <a class="nav-link" id="v-settings-tab" data-bs-toggle="tab" href="#v-settings" role="tab" aria-controls="v-settings" aria-selected="false">Settings</a>
          </div>
        </div>
        <div class="col-7 col-md-9 ps-0">
          <div class="tab-content tab-content-vertical border p-3" id="v-tabContent">
            <div class="tab-pane fade show active" id="v-home" role="tabpanel" aria-labelledby="v-home-tab">
              <h6 class="mb-1">Home</h6>
              <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing 
              exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. <br> Commodo esse dolore fugiat sint velit ullamco magna 
              consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
            </div>
            <div class="tab-pane fade" id="v-profile" role="tabpanel" aria-labelledby="v-profile-tab">
              <h6 class="mb-1">Profile</h6>
              <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing 
              exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna 
              consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
            </div>
            <div class="tab-pane fade" id="v-messages" role="tabpanel" aria-labelledby="v-messages-tab">
              <h6 class="mb-1">Messages</h6>
              <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing 
              exercitation ipsum.<br> Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna 
              consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
            </div>
            <div class="tab-pane fade" id="v-settings" role="tabpanel" aria-labelledby="v-settings-tab">
              <h6 class="mb-1">Settings</h6>
              <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing 
              exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat.<br> Commodo esse dolore fugiat sint velit ullamco magna 
              consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="verticalTab">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="row">
  <div class="col-5 col-md-3 pe-0">
    <div class="nav nav-tabs nav-tabs-vertical" id="v-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-home-tab" data-bs-toggle="tab" href="#v-home" role="tab" aria-controls="v-home" aria-selected="true">Home</a>
      <a class="nav-link" id="v-profile-tab" data-bs-toggle="tab" href="#v-profile" role="tab" aria-controls="v-profile" aria-selected="false">Profile</a>
      <a class="nav-link" id="v-messages-tab" data-bs-toggle="tab" href="#v-messages" role="tab" aria-controls="v-messages" aria-selected="false">Messages</a>
      <a class="nav-link" id="v-settings-tab" data-bs-toggle="tab" href="#v-settings" role="tab" aria-controls="v-settings" aria-selected="false">Settings</a>
    </div>
  </div>
  <div class="col-7 col-md-9 ps-0">
    <div class="tab-content tab-content-vertical border p-3" id="v-tabContent">
      <div class="tab-pane fade show active" id="v-home" role="tabpanel" aria-labelledby="v-home-tab">
        <h6 class="mb-1">Home</h6>
        <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing 
        exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna 
        consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
        <br>
        <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing 
        exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna 
        consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
      </div>
      <div class="tab-pane fade" id="v-profile" role="tabpanel" aria-labelledby="v-profile-tab">
        <h6 class="mb-1">Profile</h6>
        <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing 
        exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna 
        consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
      </div>
      <div class="tab-pane fade" id="v-messages" role="tabpanel" aria-labelledby="v-messages-tab">
        <h6 class="mb-1">Messages</h6>
        <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing 
        exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna 
        consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
      </div>
      <div class="tab-pane fade" id="v-settings" role="tabpanel" aria-labelledby="v-settings-tab">
        <h6 class="mb-1">Settings</h6>
        <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing 
        exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna 
        consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
      </div>
    </div>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#verticalTab">copy</button>
    </figure>

    <hr>

    <h4 id="line-variation">Line variation</h4>
    <p class="mb-3">The tab component that display line indicator for active item.</p>
    <div class="example">
      <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" data-bs-target="#line-home" role="tab" aria-controls="line-home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" data-bs-target="#line-profile" role="tab" aria-controls="line-profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" data-bs-target="#line-contact" role="tab" aria-controls="line-contact" aria-selected="false">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" id="disabled-line-tab" data-bs-toggle="tab" data-bs-target="#line-disabled" role="tab" aria-controls="line-disabled" aria-selected="false">Disabled</a>
        </li>
      </ul>
      <div class="tab-content mt-3" id="lineTabContent">
        <div class="tab-pane fade show active" id="line-home" role="tabpanel" aria-labelledby="home-line-tab">
          <h6 class="mb-1">Home</h6>
          <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing 
          exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna 
          consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
        </div>
        <div class="tab-pane fade" id="line-profile" role="tabpanel" aria-labelledby="profile-line-tab">
          <h6 class="mb-1">Profile</h6>
          <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing 
          exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna 
          consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
        </div>
        <div class="tab-pane fade" id="line-contact" role="tabpanel" aria-labelledby="contact-line-tab">
          <h6 class="mb-1">Contact</h6>
          <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing 
          exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna 
          consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
        </div>
        <div class="tab-pane fade" id="line-disabled" role="tabpanel" aria-labelledby="disabled-line-tab">
          <h6 class="mb-1">disabled</h6>
        </div>
      </div>
    </div>
    <figure class="highlight" id="lineTabVariation">
    <pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" data-bs-target="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" id="disabled-line-tab" data-bs-toggle="tab" data-bs-target="#disabled" role="tab" aria-controls="disabled" aria-selected="false">Disabled</a>
  </li>
</ul>
<div class="tab-content mt-3" id="lineTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">...</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-line-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-line-tab">...</div>
  <div class="tab-pane fade" id="disabled" role="tabpanel" aria-labelledby="disabled-line-tab">...</div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#lineTabVariation">copy</button>
    </figure>
    
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Basic example</a>
      </li>
      <li class="nav-item">
        <a href="#vertical" class="nav-link">Vertical</a>
      </li>
      <li class="nav-item">
        <a href="#line-variation" class="nav-link">Line variation</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush