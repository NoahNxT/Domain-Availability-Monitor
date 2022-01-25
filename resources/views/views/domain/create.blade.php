@extends('layout.master')

@push('plugin-styles')

@endpush

@section('content')
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i data-feather="alert-circle"></i>
            {{ $error }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
        </div>
    @endforeach

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Add Domain</h6>
                    <form method="POST" action="{{ route('domains.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="domain" class="form-label">Domain</label>
                            <input type="text" class="form-control" id="domain" name="domain"
                                   placeholder="shithappens.com">
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-secondary" href="{{ route('domains.index') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--@push('plugin-scripts')

@endpush

@push('custom-scripts')

@endpush--}}
