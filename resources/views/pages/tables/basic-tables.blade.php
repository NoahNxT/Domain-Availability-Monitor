@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Tables</a></li>
    <li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Basic Table</h6>
        <p class="text-muted mb-3">Add class <code>.table</code></p>
        <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>LAST NAME</th>
                  <th>USERNAME</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th>2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th>3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
                <tr>
                  <th>4</th>
                  <td>Larry</td>
                  <td>Jellybean</td>
                  <td>@lajelly</td>
                </tr>
                <tr>
                  <th>5</th>
                  <td>Larry</td>
                  <td>Kikat</td>
                  <td>@lakitkat</td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Hoverable Table</h6>
        <p class="text-muted mb-3">Add class <code>.table-hover</code></p>
        <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>LAST NAME</th>
                  <th>USERNAME</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th>2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th>3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
                <tr>
                  <th>4</th>
                  <td>Larry</td>
                  <td>Jellybean</td>
                  <td>@lajelly</td>
                </tr>
                <tr>
                  <th>5</th>
                  <td>Larry</td>
                  <td>Kikat</td>
                  <td>@lakitkat</td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Bordered table</h6>
        <p class="text-muted mb-3">Add class <code>.table-bordered</code></p>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Name
                </th>
                <th>
                  Progress
                </th>
                <th>
                  Salary
                </th>
                <th>
                  Start date
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  1
                </td>
                <td>
                  Cedric Kelly
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $206,850
                </td>
                <td>
                  June 21, 2010
                </td>
              </tr>
              <tr>
                <td>
                  2
                </td>
                <td>
                  Haley Kennedy
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $313,500
                </td>
                <td>
                  May 15, 2013
                </td>
              </tr>
              <tr>
                <td>
                  3
                </td>
                <td>
                  Bradley Greer
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $132,000
                </td>
                <td>
                  Apr 12, 2014
                </td>
              </tr>
              <tr>
                <td>
                  4
                </td>
                <td>
                  Brenden Wagner
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $206,850
                </td>
                <td>
                  June 21, 2010
                </td>
              </tr>
              <tr>
                <td>
                  5
                </td>
                <td>
                  Bruno Nash
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $163,500
                </td>
                <td>
                  January 01, 2016
                </td>
              </tr>
              <tr>
                <td>
                  6
                </td>
                <td>
                  Sonya Frost
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $103,600
                </td>
                <td>
                  July 18, 2011
                </td>
              </tr>
              <tr>
                <td>
                  7
                </td>
                <td>
                  Zenaida Frank
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $313,500
                </td>
                <td>
                  March 22, 2013
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Striped Table</h4>
        <p class="text-muted mb-3">
          Add class <code>.table-striped</code>
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  User
                </th>
                <th>
                  Name
                </th>
                <th>
                  Progress
                </th>
                <th>
                  Salary
                </th>
                <th>
                  Start date
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="py-1">
                  <img src="{{ url('https://via.placeholder.com/36x36') }}" alt="image">
                </td>
                <td>
                  Cedric Kelly
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $206,850
                </td>
                <td>
                  June 21, 2010
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="{{ url('https://via.placeholder.com/36x36') }}" alt="image">
                </td>
                <td>
                  Haley Kennedy
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $313,500
                </td>
                <td>
                  May 15, 2013
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="{{ url('https://via.placeholder.com/36x36') }}" alt="image">
                </td>
                <td>
                  Bradley Greer
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $132,000
                </td>
                <td>
                  Apr 12, 2014
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="{{ url('https://via.placeholder.com/36x36') }}" alt="image">
                </td>
                <td>
                  Brenden Wagner
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $206,850
                </td>
                <td>
                  June 21, 2010
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="{{ url('https://via.placeholder.com/36x36') }}" alt="image">
                </td>
                <td>
                  Bruno Nash
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $163,500
                </td>
                <td>
                  January 01, 2016
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="{{ url('https://via.placeholder.com/36x36') }}" alt="image">
                </td>
                <td>
                  Sonya Frost
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $103,600
                </td>
                <td>
                  July 18, 2011
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="{{ url('https://via.placeholder.com/36x36') }}" alt="image">
                </td>
                <td>
                  Zenaida Frank
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $313,500
                </td>
                <td>
                  March 22, 2013
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Inverse table</h4>
        <p class="text-muted mb-3">
          Add class <code>.table-dark</code>
        </p>
        <div class="table-responsive pt-3">
          <table class="table table-dark">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Name
                </th>
                <th>
                  Salary
                </th>
                <th>
                  Start date
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  1
                </td>
                <td>
                  Cedric Kelly
                </td>
                <td>
                  $206,850
                </td>
                <td>
                  June 21, 2010
                </td>
              </tr>
              <tr>
                <td>
                  2
                </td>
                <td>
                  Haley Kennedy
                </td>
                <td>
                  $313,500
                </td>
                <td>
                  May 15, 2013
                </td>
              </tr>
              <tr>
                <td>
                  3
                </td>
                <td>
                  Bradley Greer
                </td>
                <td>
                  $132,000
                </td>
                <td>
                  Apr 12, 2014
                </td>
              </tr>
              <tr>
                <td>
                  4
                </td>
                <td>
                  Brenden Wagner
                </td>
                <td>
                  $206,850
                </td>
                <td>
                  June 21, 2010
                </td>
              </tr>
              <tr>
                <td>
                  5
                </td>
                <td>
                  Bruno Nash
                </td>
                <td>
                  $163,500
                </td>
                <td>
                  January 01, 2016
                </td>
              </tr>
              <tr>
                <td>
                  6
                </td>
                <td>
                  Sonya Frost
                </td>
                <td>
                  $103,600
                </td>
                <td>
                  July 18, 2011
                </td>
              </tr>
              <tr>
                <td>
                  7
                </td>
                <td>
                  Zenaida Frank
                </td>
                <td>
                  $313,500
                </td>
                <td>
                  March 22, 2013
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Table with contextual classes</h4>
        <p class="text-muted mb-3">
          Add class <code>.table-{color}</code>
        </p>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Name
                </th>
                <th>
                  Product
                </th>
                <th>
                  Salary
                </th>
                <th>
                  Start date
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-info">
                <td>
                  1
                </td>
                <td>
                  Cedric Kelly
                </td>
                <td>
                  Photoshop
                </td>
                <td>
                  $206,850
                </td>
                <td>
                  June 21, 2010
                </td>
              </tr>
              <tr class="table-warning">
                <td>
                  2
                </td>
                <td>
                  Haley Kennedy
                </td>
                <td>
                  Flash
                </td>
                <td>
                  $313,500
                </td>
                <td>
                  May 15, 2013
                </td>
              </tr>
              <tr class="table-danger">
                <td>
                  3
                </td>
                <td>
                  Bradley Greer
                </td>
                <td>
                  Premeire
                </td>
                <td>
                  $132,000
                </td>
                <td>
                  Apr 12, 2014
                </td>
              </tr>
              <tr class="table-success">
                <td>
                  4
                </td>
                <td>
                  Brenden Wagner
                </td>
                <td>
                  After effects
                </td>
                <td>
                  $206,850
                </td>
                <td>
                  June 21, 2010
                </td>
              </tr>
              <tr class="table-primary">
                <td>
                  5
                </td>
                <td>
                  Bruno Nash
                </td>
                <td>
                  Illustrator
                </td>
                <td>
                  $163,500
                </td>
                <td>
                  January 01, 2016
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection