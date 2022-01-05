@extends('layout.master')

@section('content')
<div class="row inbox-wrapper">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-3 border-end-lg">
            <div class="aside-content">
              <div class="d-flex align-items-center justify-content-between">
                <button class="navbar-toggle btn btn-icon border d-block d-lg-none" data-bs-target=".email-aside-nav" data-bs-toggle="collapse" type="button">
                  <span class="icon"><i data-feather="chevron-down"></i></span>
                </button>
                <div class="order-first">
                  <h4>Mail Service</h4>
                  <p class="text-muted">amiahburton@gmail.com</p>
                </div>
              </div>
              <div class="d-grid my-3">
                <a class="btn btn-primary" href="{{ url('/email/compose') }}">Compose Email</a>
              </div>
            <div class="email-aside-nav collapse">
              <ul class="nav flex-column">
                <li class="nav-item active">
                  <a class="nav-link d-flex align-items-center" href="{{ url('/email/inbox') }}">
                    <i data-feather="inbox" class="icon-lg me-2"></i>
                    Inbox
                    <span class="badge bg-danger fw-bolder ms-auto">2
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center" href="#">
                    <i data-feather="mail" class="icon-lg me-2"></i>
                    Sent Mail
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center" href="#">
                    <i data-feather="briefcase" class="icon-lg me-2"></i>
                    Important
                    <span class="badge bg-secondary fw-bolder ms-auto">4
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center" href="#">
                    <i data-feather="file" class="icon-lg me-2"></i>
                    Drafts
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center" href="#">
                    <i data-feather="star" class="icon-lg me-2"></i>
                    Tags
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center" href="#">
                    <i data-feather="trash" class="icon-lg me-2"></i>
                    Trash
                  </a>
                </li>
              </ul>
              <p class="text-muted tx-12 fw-bolder text-uppercase mb-2 mt-4">Labels</p>
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center" href="#">
                    <i data-feather="tag" class="text-warning icon-lg me-2"></i>
                    Important
                  </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link d-flex align-items-center" href="#">
                  <i data-feather="tag" class="text-primary icon-lg me-2"></i> 
                  Business 
                </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center" href="#">
                    <i data-feather="tag" class="text-info icon-lg me-2"></i> 
                    Inspiration 
                  </a>
                </li>
              </ul>
            </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="d-flex align-items-center justify-content-between p-3 border-bottom tx-16">
              <div class="d-flex align-items-center">
                <i data-feather="star" class="text-primary icon-lg me-2"></i>
                <span>New Project</span>
              </div>
              <div>
                <a href="#"><i data-feather="share" class="text-muted icon-lg me-2" data-bs-toggle="tooltip" title="Forward"></i></a>
                <a href="#"><i data-feather="printer" class="text-muted icon-lg me-2" data-bs-toggle="tooltip" title="Print"></i></a>
                <a href="#"><i data-feather="trash" class="text-muted icon-lg" data-bs-toggle="tooltip" title="Delete"></i></a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between flex-wrap px-3 py-2 border-bottom">
              <div class="d-flex align-items-center">
                <div class="me-2">
                  <img src="{{ url('https://via.placeholder.com/36x36') }}" alt="Avatar" class="rounded-circle img-xs">
                </div>
                <div class="d-flex align-items-center">
                  <a href="#" class="text-body">John Doe</a> 
                  <span class="mx-2 text-muted">to</span>
                  <a href="#" class="text-body me-2">me</a>
                  <div class="actions dropdown">
                    <a href="#" data-bs-toggle="dropdown"><i data-feather="chevron-down" class="icon-lg text-muted"></i></a>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="#">Mark as read</a>
                      <a class="dropdown-item" href="#">Mark as unread</a>
                      <a class="dropdown-item" href="#">Spam</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tx-13 text-muted mt-2 mt-sm-0">Nov 20, 11:20</div>
            </div>
            <div class="p-4 border-bottom">
              <p>Hello,</p>
              <br>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
              <br>
              <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
              <br>
              <p><strong>Regards</strong>,<br> John Doe</p>
            </div>
            <div class="p-3">
              <div class="mb-3">Attachments <span>(3 files, 12,44 KB)</span></div>
              <ul class="nav flex-column">
                <li class="nav-item"><a href="javascript:;" class="nav-link text-body"><span data-feather="file" class="icon-lg text-muted"></span> Reference.zip <span class="text-muted tx-11">(5.10 MB)</span></a></li>
                <li class="nav-item"><a href="javascript:;" class="nav-link text-body"><span data-feather="file" class="icon-lg text-muted"></span> Instructions.zip <span class="text-muted tx-11">(3.15 MB)</span></a></li>
                <li class="nav-item"><a href="javascript:;" class="nav-link text-body"><span data-feather="file" class="icon-lg text-muted"></span> Team-list.pdf <span class="text-muted tx-11">(4.5 MB)</span></a></li>
              </ul>
            </div>
          </div>
        </div>
          
      </div>
    </div>
  </div>
</div>
@endsection