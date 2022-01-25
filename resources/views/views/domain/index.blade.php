@extends('layout.master')

@push('plugin-styles')

@endpush

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h6 class="card-title">Monitored Domains</h6>
                            <p class="text-muted mb-3">Domain which are getting monitored. Once a domain get available,
                                you'll be notified on the mediums you've set-up in your settings.</p>
                        </div>
                        <div class="col-md-auto">
                            <a type="button" href="{{ route('domains.create') }}" class="btn btn-success mb-1 mb-md-0">Add Domain</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>
                                URL
                            </th>
                            <th>
                                Available?
                            </th>
                            <th>
                                Last check?
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                https://testdomain.com
                            </td>
                            <td>
                                <span class="badge bg-success">Available</span>
                            </td>
                            <td>
                                June 21, 2010
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

{{--@push('plugin-scripts')

@endpush

@push('custom-scripts')

@endpush--}}
