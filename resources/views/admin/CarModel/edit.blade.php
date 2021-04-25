@extends('admin.dashboard')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Car Model - Edit</div>

                    <div class="card-body">
                        {!! Form::open(['route' => ['carmodel.update', $carmodel->id], 'method' => 'put']) !!}
                        <div class="form-group">
                             {!! Form::hidden('carmodel_id', $carmodel->id, ['class' => 'form-control', 'placeholder' => 'Module']) !!}
                        </div>


                        <div class="form-group @if($errors->has('carmodel_name')) has-error @endif">
                            {!! Form::label('Name') !!}
                            {!! Form::text('carmodel_name', $carmodel->carmodel_name, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                            @if ($errors->has('carmodel_name'))
                                <span class="help-block">{!! $errors->first('carmodel_name') !!}</span>@endif
                        </div>
                        <input type="text" name="carbrand_id" value="{{$carmodel->carbrand_id}}" hidden>
                        <div class="form-group @if($errors->has('price')) has-error @endif">
                            {!! Form::label('Price') !!}
                            {!! Form::text('price', $carmodel->price, ['class' => 'form-control', 'placeholder' => 'price']) !!}
                            @if ($errors->has('price'))
                                <span class="help-block">{!! $errors->first('price') !!}</span>@endif
                        </div>


                        {!! Form::submit('Update',['class' => 'btn btn-sm btn-warning']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


