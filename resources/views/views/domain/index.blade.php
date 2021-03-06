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
                            <a type="button" href="{{ route('domains.create') }}" class="btn btn-success mb-1 mb-md-0">Add
                                Domain</a>
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
                        @foreach($domains as $domain)
                            <tr>
                                <td>
                                    {{ $domain->domain }}
                                </td>
                                <td>
                                    @switch($domain->status)
                                        @case('not available')
                                        <span class="badge bg-danger">{{$domain->status}}</span>
                                        @break

                                        @case('clientdeleteprohibited')
                                        <span class="badge bg-secondary">{{$domain->status}}</span>
                                        @break

                                        @case('clienttransferprohibited')
                                        <span class="badge bg-warning">{{$domain->status}}</span>
                                        @break

                                        @case('available')
                                        <span class="badge bg-success">{{$domain->status}}</span>
                                        @break

                                        @default
                                        <span class="badge bg-primary">{{$domain->status}}</span>
                                    @endswitch
                                </td>
                                <td>
                                    {{ $domain->updated_at }}
                                </td>
                                <td class="text-center">
                                    <i class="link-icon mr-auto" data-feather="loader"></i>
                                    <i class="link-icon mr-auto" data-feather="edit-2"></i>
                                    <i class="link-icon ml-5" data-feather="trash"></i>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @if($domains->isEmpty())
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-center">
                                <h6 class="card-title">Whoops!</h6>
                                <p class="text-muted mb-2">It looks like you haven't added any monitored domain?</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection

{{--@push('plugin-scripts')

@endpush

@push('custom-scripts')

@endpush--}}
