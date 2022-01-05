@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Special pages</a></li>
    <li class="breadcrumb-item active" aria-current="page">Pricing</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <h4 class="text-center mb-3 mt-4">Choose a plan</h4>
        <p class="text-muted text-center mb-4 pb-2">Choose the features and functionality your team need today. Easily upgrade as your company grows.</p>
        <div class="container">  
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
              <div class="card">
                <div class="card-body">
                  <h5 class="text-center text-uppercase mt-3 mb-4">Basic</h5>
                  <i data-feather="award" class="text-primary icon-xxl d-block mx-auto my-3"></i>
                  <h3 class="text-center fw-light">$40</h3>
                  <p class="text-muted text-center mb-4 fw-light">per month</p>
                  <h6 class="text-muted text-center mb-4 fw-normal">Up to 25 units</h6>
                  <table class="mx-auto">
                    <tr>
                      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                      <td><p>Accounting dashboard</p></td>
                    </tr>
                    <tr>
                      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                      <td><p>Invoicing</p></td>
                    </tr>
                    <tr>
                      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                      <td><p>Online payments</p></td>
                    </tr>
                    <tr>
                      <td><i data-feather="x" class="icon-md text-danger me-2"></i></td>
                      <td><p class="text-muted">Branded website</p></td>
                    </tr>
                    <tr>
                      <td><i data-feather="x" class="icon-md text-danger me-2"></i></td>
                      <td><p class="text-muted">Dedicated account manager</p></td>
                    </tr>
                    <tr>
                      <td><i data-feather="x" class="icon-md text-danger me-2"></i></td>
                      <td><p class="text-muted">Premium apps</p></td>
                    </tr>
                  </table>
                  <div class="d-grid">
                    <button class="btn btn-primary mt-4">Star free trial</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
              <div class="card">
                <div class="card-body">
                  <h4 class="text-center text-uppercase mt-3 mb-4 fw-light">Business</h4>
                  <i data-feather="gift" class="text-success icon-xxl d-block mx-auto my-3"></i>
                  <h3 class="text-center fw-light">$70</h3>
                  <p class="text-muted text-center mb-4 fw-light">per month</p>
                  <h6 class="text-muted text-center mb-4 fw-normal">Up to 75 units</h6>
                  <table class="mx-auto">
                    <tr>
                      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                      <td><p>Accounting dashboard</p></td>
                    </tr>
                    <tr>
                      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                      <td><p>Invoicing</p></td>
                    </tr>
                    <tr>
                      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                      <td><p>Online payments</p></td>
                    </tr>
                    <tr>
                      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                      <td><p>Branded website</p></td>
                    </tr>
                    <tr>
                      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                      <td><p>Dedicated account manager</p></td>
                    </tr>
                    <tr>
                      <td><i data-feather="x" class="icon-md text-danger me-2"></i></td>
                      <td><p class="text-muted">Premium apps</p></td>
                    </tr>
                  </table>
                  <div class="d-grid">
                    <button class="btn btn-success mt-4">Star free trial</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h5 class="text-center text-uppercase mt-3 mb-4">Professional</h5>
                  <i data-feather="briefcase" class="text-primary icon-xxl d-block mx-auto my-3"></i>
                  <h3 class="text-center fw-light">$250</h3>
                  <p class="text-muted text-center mb-4 fw-light">per month</p>
                  <h6 class="text-muted text-center mb-4 fw-normal">Up to 300 units</h6>
                  <table class="mx-auto">
                    <tr>
                      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                      <td><p>Accounting dashboard</p></td>
                    </tr>
                    <tr>
                      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                      <td><p>Invoicing</p></td>
                    </tr>
                    <tr>
                      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                      <td><p>Online payments</p></td>
                    </tr>
                    <tr>
                      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                      <td><p>Branded website</p></td>
                    </tr>
                    <tr>
                      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                      <td><p>Dedicated account manager</p></td>
                    </tr>
                    <tr>
                      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                      <td><p>Premium apps</p></td>
                    </tr>
                  </table>
                  <div class="d-grid">
                    <button class="btn btn-primary mt-4">Star free trial</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection