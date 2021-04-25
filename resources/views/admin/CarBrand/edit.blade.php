@extends('admin.dashboard')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Car Brand - Edit</div>

                    <div class="card-body">
                        {!! Form::open(['route' => ['carbrand.update', $carbrand->id], 'method' => 'put']) !!}
                        <div class="form-group">
                             {!! Form::hidden('carbrand_id', $carbrand->id, ['class' => 'form-control', 'placeholder' => 'Module']) !!}
                        </div>


                        <div class="form-group @if($errors->has('carbrand_name')) has-error @endif">
                            {!! Form::label('Name') !!}
                            {!! Form::text('carbrand_name', $carbrand->carbrand_name, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                            @if ($errors->has('carbrand_name'))
                                <span class="help-block">{!! $errors->first('carbrand_name') !!}</span>@endif
                        </div>


                        {!! Form::submit('Update',['class' => 'btn btn-sm btn-warning']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


