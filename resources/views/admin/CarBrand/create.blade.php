@extends('admin.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Car Brand - Create</div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'carbrand.store']) !!}
                        <div class="form-group @if($errors->has('carbrand_name')) has-error @endif">
                            {!! Form::label('Car Brand Name') !!}
                            {!! Form::text('carbrand_name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                            @if ($errors->has('carbrand_name'))
                                <span class="help-block">{!! $errors->first('carbrand_name') !!}</span>@endif
                        </div>

                        {!! Form::submit('Create',['class' => 'btn btn-sm btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection