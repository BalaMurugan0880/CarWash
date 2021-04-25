@extends('admin.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Car Model - Create</div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'carmodel.store']) !!}
                        <div class="form-group">
                            {!! Form::label('Car Brand') !!}
                            <select name="carbrand_id" class="form-control">
                                <option selected>Select A Car Brand</option>
                                 @foreach($carBrand as $carbrand) 
                                <option value="{{$carbrand->id}}">{{$carbrand->carbrand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group @if($errors->has('carmodel_name')) has-error @endif">
                            {!! Form::label('Car Model Name') !!}
                            {!! Form::text('carmodel_name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                            @if ($errors->has('carmodel_name'))
                                <span class="help-block">{!! $errors->first('carmodel_name') !!}</span>@endif
                        </div>
                        
                        <div class="form-group @if($errors->has('price')) has-error @endif">
                            {!! Form::label('Set Price (RM)') !!}
                            {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Price']) !!}
                            @if ($errors->has('price'))
                                <span class="help-block">{!! $errors->first('price') !!}</span>@endif
                        </div>

                        {!! Form::submit('Create',['class' => 'btn btn-sm btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection