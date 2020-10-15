@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('List of Leads') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Contact No.</th>
                                <th>Email</th>
                                <th>Webinar Schedule</th>
                                <th>Date Registered</th>
                                <th>Action</th>
                            </thead>
                        @foreach($leads as $key => $lead)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $lead->first_name }}</td>
                                <td>{{ $lead->last_name }}</td>
                                <td>{{ $lead->contact_no }}</td>
                                <td>{{ $lead->email }}</td>
                                <td>{{ $lead->webinar_date->format('l | M d, Y | ga') }}</td>
                                <td>{{ $lead->registered_date->format('l | M d, Y | ga') }}</td>
                                <td>
                                    <button class="delete-record btn btn-danger" data-id="{{ $lead->id }}">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function(){
    $(".delete-record").unbind().click(function(){
        id = $(this).data('id');

        // send request
        $.ajax({
            method: "DELETE",
            url: "/destroy_lead/"+id,
            data: { 
                id: id,
                _token: "{{ csrf_token() }}" 
            }
        })
        .done(function( id ) {
            location.href = '/leads';
        });
    });
});
</script>