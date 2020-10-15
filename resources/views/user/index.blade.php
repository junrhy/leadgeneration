@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('List of Users') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th style="font-size: 10pt;">#</th>
                                <th style="font-size: 10pt;">Name</th>
                                <th style="font-size: 10pt;">Email</th>
                                <th style="font-size: 10pt;">Action</th>
                            </thead>
                        @foreach($users as $key => $user)
                            <tr>
                                <td style="font-size: 10pt;">{{ $key+1 }}</td>
                                <td style="font-size: 10pt;">{{ $user->name }}</td>
                                <td style="font-size: 10pt;">{{ $user->email }}</td>
                                <td>
                                    <button class="delete-record btn btn-danger" data-id="{{ $user->id }}">Delete</button>
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
            url: "/destroy_user/"+id,
            data: { 
                id: id,
                _token: "{{ csrf_token() }}" 
            }
        })
        .done(function( id ) {
            location.href = '/users';
        });
    });
});
</script>