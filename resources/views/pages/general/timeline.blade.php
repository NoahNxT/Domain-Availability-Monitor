@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">General pages</a></li>
    <li class="breadcrumb-item active" aria-current="page">Timeline</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Timeline</h6>
        <div id="content">
          <ul class="timeline">
            <li class="event" data-date="12:30 - 1:00pm">
              <h3 class="title">Registration</h3>
              <p>Get here on time, it's first come first serve. Be late, get turned away.</p>
            </li>
            <li class="event" data-date="2:30 - 4:00pm">
              <h3 class="title">Opening Ceremony</h3>
              <p>Get ready for an exciting event, this will kick off in amazing fashion with MOP & Busta Rhymes as an opening show.</p>    
            </li>
            <li class="event" data-date="5:00 - 8:00pm">
              <h3 class="title">Main Event</h3>
              <p>This is where it all goes down. You will compete head to head with your friends and rivals. Get ready!</p>    
            </li>
            <li class="event" data-date="8:30 - 9:30pm">
              <h3 class="title">Closing Ceremony</h3>
              <p>See how is the victor and who are the losers. The big stage is where the winners bask in their own glory.</p>    
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection