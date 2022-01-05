@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Forms</a></li>
    <li class="breadcrumb-item active" aria-current="page">Basic Elements</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Basic Form</h6>
        <form class="forms-sample">
          <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Username</label>
            <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Username">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Password">
          </div>
          <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">
              Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-secondary">Cancel</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Horizontal Form</h6>
        <form class="forms-sample">
          <div class="row mb-3">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Email">
            </div>
          </div>
          <div class="row mb-3">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="exampleInputEmail2" autocomplete="off" placeholder="Email">
            </div>
          </div>
          <div class="row mb-3">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
            </div>
          </div>
          <div class="row mb-3">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="exampleInputPassword2" autocomplete="off" placeholder="Password">
            </div>
          </div>
          <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">
              Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-secondary">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Inputs</h6>
        <form>
          <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Text Input</label>
            <input type="text" class="form-control" id="exampleInputText1" value="Amiah Burton" placeholder="Enter Name">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail3" class="form-label">Email Input</label>
            <input type="email" class="form-control" id="exampleInputEmail3" value="amiahburton@gmail.com" placeholder="Enter Email">
          </div>
          <div class="mb-3">
            <label for="exampleInputNumber1" class="form-label">Number Input</label>
            <input type="number" class="form-control" id="exampleInputNumber1" value="6473786">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword3" class="form-label">Password Input</label>
            <input type="password" class="form-control" id="exampleInputPassword3" value="amiahburton" placeholder="Enter Password">
          </div>
          <div class="mb-3">
            <label for="exampleInputDisabled1" class="form-label">Disabled Input</label>
            <input type="text" class="form-control" id="exampleInputDisabled1" disabled value="Amiah Burton">
          </div>
          <div class="mb-3">
            <label for="exampleInputPlaceholder" class="form-label">Placeholder</label>
            <input type="text" class="form-control" id="exampleInputPlaceholder" placeholder="Enter Your Name">
          </div>
          <div class="mb-3">
            <label for="exampleInputReadonly" class="form-label">Readonly</label>
            <input type="text" class="form-control" id="exampleInputReadonly" readonly value="Amiah Burton">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlSelect1" class="form-label">Select Input</label>
            <select class="form-select" id="exampleFormControlSelect1">
              <option selected disabled>Select your age</option>
              <option>12-18</option>
              <option>18-22</option>
              <option>22-30</option>
              <option>30-60</option>
              <option>Above 60</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlSelect2" class="form-label">Example multiple select</label>
            <select multiple class="form-select" id="exampleFormControlSelect2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
          <div class="mb-3">
            <label for="customRange1" class="form-label">Range Input</label>
            <input type="range" class="form-range" id="formRange1">
          </div>
          <div class="mb-3">
            <div class="form-check mb-2">
              <input type="checkbox" class="form-check-input" id="checkDefault">
              <label class="form-check-label" for="checkDefault">
                Default checkbox
              </label>
            </div>
            <div class="form-check mb-2">
              <input type="checkbox" class="form-check-input" id="checkChecked" checked>
              <label class="form-check-label" for="checkChecked">
                Checked
              </label>
            </div>
            <div class="form-check mb-2">
              <input type="checkbox" class="form-check-input" id="checkDisabled" disabled>
              <label class="form-check-label" for="checkDisabled">
                Disabled checkbox
              </label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="checkCheckedDisabled" disabled checked>
              <label class="form-check-label" for="checkCheckedDisabled">
                Disabled checked
              </label>
            </div>
          </div>
          <div class="mb-3">
            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" id="checkInline">
              <label class="form-check-label" for="checkInline">
                Inline checkbox
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" id="checkInlineChecked" checked>
              <label class="form-check-label" for="checkInlineChecked">
                Checked
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" id="checkInlineDisabled" disabled>
              <label class="form-check-label" for="checkInlineDisabled">
                Inline disabled checkbox
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" id="checkInlineCheckedDisabled" disabled checked>
              <label class="form-check-label" for="checkInlineCheckedDisabled">
                Disabled checked
              </label>
            </div>
          </div>
          <div class="mb-3">
            <div class="form-check mb-2">
              <input type="radio" class="form-check-input" name="radioDefault" id="radioDefault">
              <label class="form-check-label" for="radioDefault">
                Default
              </label>
            </div>
            <div class="form-check mb-2">
              <input type="radio" class="form-check-input" name="radioDefault" id="radioDefault1">
              <label class="form-check-label" for="radioDefault1">
                Default
              </label>
            </div>
            <div class="form-check mb-2">
              <input type="radio" class="form-check-input" name="radioSelected" id="radioSelected" checked>
              <label class="form-check-label" for="radioSelected">
                Selected
              </label>
            </div>
            <div class="form-check mb-2">
              <input type="radio" class="form-check-input" name="radioDisabled" id="radioDisabled" disabled>
              <label class="form-check-label" for="radioDisabled">
                Disabled
              </label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" name="radioSelectedDisabled" id="radioSelectedDisabled" disabled checked>
              <label class="form-check-label" for="radioSelectedDisabled">
                Selected and disabled
              </label>
            </div>
          </div>
          <div class="mb-3">
            <div class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="radioInline" id="radioInline">
              <label class="form-check-label" for="radioInline">
                Default
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="radioInline" id="radioInline1">
              <label class="form-check-label" for="radioInline1">
                Default
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="radioInlineSelected" id="radioInlineSelected" checked>
              <label class="form-check-label" for="radioInlineSelected">
                Selected
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="radioInlineDisabled" id="radioInlineDisabled" disabled>
              <label class="form-check-label" for="radioInlineDisabled">
                Disabled
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="radioInlineSelectedDisabled" id="radioInlineSelectedDisabled" disabled checked>
              <label class="form-check-label" for="radioInlineSelectedDisabled">
                Selected and disabled
              </label>
            </div>
          </div>
          <div class="mb-3">
            <div class="form-check form-switch mb-2">
              <input type="checkbox" class="form-check-input" id="formSwitch1">
              <label class="form-check-label" for="formSwitch1">Toggle this switch element</label>
            </div>
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" disabled id="formSwitch2">
              <label class="form-check-label" for="formSwitch2">Disabled switch element</label>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="formFile">File upload</label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Input Size</h6>
        <p class="mb-3">Use class <code>.form-control-lg</code> or <code>.form-control-sm</code></p>								
        <form>
          <div class="mb-3">
            <label for="colFormLabelSm" class="form-label">Small</label>
            <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="form-control-sm">
          </div>
          <div class="mb-3">
            <label for="colFormLabel" class="form-label">Default</label>
            <input type="email" class="form-control" id="colFormLabel" placeholder="form-control">
          </div>
          <div>
            <label for="colFormLabelLg" class="form-label">Large</label>
            <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="form-control-lg">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Select Size</h6>
        <p class="mb-3">Use class <code>.form-control-lg</code> or <code>.form-control-sm</code></p>
        <div class="mb-3">
          <label class="form-label">Small</label>
          <select class="form-select form-select-sm mb-3">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Default</label>
          <select class="form-select mb-3">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div>
          <label class="form-label">Large</label>
          <select class="form-select form-select-lg">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Form Grid</h6>
          <form>
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label">First Name</label>
                  <input type="text" class="form-control" placeholder="Enter first name">
                </div>
              </div><!-- Col -->
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control" placeholder="Enter last name">
                </div>
              </div><!-- Col -->
            </div><!-- Row -->
            <div class="row">
              <div class="col-sm-4">
                <div class="mb-3">
                  <label class="form-label">City</label>
                  <input type="text" class="form-control" placeholder="Enter city">
                </div>
              </div><!-- Col -->
              <div class="col-sm-4">
                <div class="mb-3">
                  <label class="form-label">State</label>
                  <input type="text" class="form-control" placeholder="Enter state">
                </div>
              </div><!-- Col -->
              <div class="col-sm-4">
                <div class="mb-3">
                  <label class="form-label">Zip</label>
                  <input type="text" class="form-control" placeholder="Enter zip code">
                </div>
              </div><!-- Col -->
            </div><!-- Row -->
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control" placeholder="Enter email">
                </div>
              </div><!-- Col -->
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" autocomplete="off" placeholder="Password">
                </div>
              </div><!-- Col -->
            </div><!-- Row -->
          </form>
          <button type="button" class="btn btn-primary submit">Submit form</button>
      </div>
    </div>
  </div>
</div>
@endsection
