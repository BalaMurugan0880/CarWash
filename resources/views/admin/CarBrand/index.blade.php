@extends('admin.dashboard')

@section('stylesheet')

@endsection

@section('content')
<div class="container">

        <div class="row">
            <div class="col">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ Session('message') }}
                    </div>
                @endif

                    @if(Session::has('delete-message'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            {{ Session('delete-message') }}
                        </div>
                    @endif
            </div>
        </div>

	<div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Car Brand - list
                        <a href="{{ route('carbrand.create') }}" class="btn btn-sm btn-primary float-right">Add
                            New</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                <tr>
                                    <th scope="col" width="60">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" width="200">Created By</th>
                                    <th scope="col" width="129">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($carBrand as $carbrand)
                                    <tr>
                                        <td>{{ $carbrand->id }}</td>
                                        <td>{{ $carbrand->carbrand_name }}</td>
                                        <td>{{ $carbrand->user->name }}</td>
                                        <td>
                                            <a href="{{ route('carbrand.edit', $carbrand->id) }}"
                                               class="btn btn-sm btn-primary">Edit</a>
                                            {!! Form::open(['route' => ['carbrand.destroy', $carbrand->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


@endsection

@section('javascript')

@endsection