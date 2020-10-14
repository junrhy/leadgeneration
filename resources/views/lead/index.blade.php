@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List of Leads') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Contact No.</th>
                            <th>Email</th>
                        </thead>
                    @foreach($leads as $key => $lead)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $lead->first_name }}</td>
                            <td>{{ $lead->last_name }}</td>
                            <td>{{ $lead->contact_no }}</td>
                            <td>{{ $lead->email }}</td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
