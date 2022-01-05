@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/simplemde/simplemde.min.css') }}" rel="stylesheet" />

@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Forms</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editors</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">TinyMCE</h4>
        <p class="text-muted mb-3">Read the <a href="https://www.tiny.cloud/docs/" target="_blank"> Official TinyMCE Documentation </a>for a full list of instructions and other options.</p>
        <textarea class="form-control" name="tinymce" id="tinymceExample" rows="10"></textarea>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">SimpleMDE</h4>
        <p class="text-muted mb-3">Read the <a href="https://simplemde.com/" target="_blank"> Official SimpleMDE Documentation </a>for a full list of instructions and other options.</p>
        <textarea class="form-control" name="tinymce" id="simpleMdeExample" rows="10"></textarea>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Ace Editor</h4>
        <p class="text-muted mb-3">Read the <a href="https://ace.c9.io/" target="_blank"> Official Ace Editor Documentation </a>for a full list of instructions and other options.</p>
        <div class="row">
          <div class="col-md-12 grid-margin">
            <h5 class="card-subtitle">HTML Mode</h5>
<textarea id="ace_html" class="ace-editor w-100">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card text-end">
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</textarea>
          </div>
          <div class="col-md-12 grid-margin">
            <h5 class="card-subtitle">SCSS Mode</h5>
<textarea id="ace_scss" class="ace-editor w-100">

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0; // See https://github.com/twbs/bootstrap/pull/22740#issuecomment-305868106
  word-wrap: break-word;
  background-color: $card-bg;
  background-clip: border-box;
  border: $card-border-width solid $card-border-color;


  > hr {
    margin-right: 0;
    margin-left: 0;
  }

  > .list-group:first-child {
    .list-group-item:first-child {
    }
  }

  > .list-group:last-child {
    .list-group-item:last-child {
    }
  }
}

.card-body {
  flex: 1 1 auto;
  padding: $card-spacer-x;
  color: $card-color;
}

.card-title {
  margin-bottom: $card-spacer-y;
}

.card-subtitle {
  margin-top: -$card-spacer-y / 2;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link {
  + .card-link {
    margin-left: $card-spacer-x;
  }
}

</textarea>
          </div>
          <div class="col-md-12">
            <h5 class="card-subtitle">Javascript Mode</h5>
<textarea id="ace_javaScript" class="ace-editor w-100">

class Alert {
  constructor(element) {
    this._element = element
  }

  // Getters

  static get VERSION() {
    return VERSION
  }

  // Public

  close(element) {
    let rootElement = this._element
    if (element) {
      rootElement = this._getRootElement(element)
    }

    const customEvent = this._triggerCloseEvent(rootElement)

    if (customEvent.isDefaultPrevented()) {
      return
    }

    this._removeElement(rootElement)
  }

  dispose() {
    $.removeData(this._element, DATA_KEY)
    this._element = null
  }

  // Private

  _getRootElement(element) {
    const selector = Util.getSelectorFromElement(element)
    let parent     = false

    if (selector) {
      parent = document.querySelector(selector)
    }

    if (!parent) {
      parent = $(element).closest(`.${ClassName.ALERT}`)[0]
    }

    return parent
  }

  _triggerCloseEvent(element) {
    const closeEvent = $.Event(Event.CLOSE)

    $(element).trigger(closeEvent)
    return closeEvent
  }

  _removeElement(element) {
    $(element).removeClass(ClassName.SHOW)

    if (!$(element).hasClass(ClassName.FADE)) {
      this._destroyElement(element)
      return
    }

    const transitionDuration = Util.getTransitionDurationFromElement(element)

    $(element)
      .one(Util.TRANSITION_END, (event) => this._destroyElement(element, event))
      .emulateTransitionEnd(transitionDuration)
  }

  _destroyElement(element) {
    $(element)
      .detach()
      .trigger(Event.CLOSED)
      .remove()
  }

  // Static

  static _jQueryInterface(config) {
    return this.each(function () {
      const $element = $(this)
      let data       = $element.data(DATA_KEY)

      if (!data) {
        data = new Alert(this)
        $element.data(DATA_KEY, data)
      }

      if (config === 'close') {
        data[config](this)
      }
    })
  }

  static _handleDismiss(alertInstance) {
    return function (event) {
      if (event) {
        event.preventDefault()
      }

      alertInstance.close(this)
    }
  }
}		

</textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/simplemde/simplemde.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/ace-builds/ace.js') }}"></script>
  <script src="{{ asset('assets/plugins/ace-builds/theme-chaos.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/tinymce.js') }}"></script>
  <script src="{{ asset('assets/js/simplemde.js') }}"></script>
  <script src="{{ asset('assets/js/ace.js') }}"></script>
@endpush