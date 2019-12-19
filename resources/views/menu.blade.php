@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New Menu</div>
                    <div class="card-body">
                       
                       
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                         
                        {!! Form::open(['url' => '/menu/add', 'files' => true]) !!}
                          <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        {{__('Name')}}
                        {!! Form::text('name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                        {!! $errors->first('name', '<p class="help-block" style="color: red">:message</p>') !!}
                       </div>


                       <div class="form-group">
                        {!! Form::submit('Create') !!}
                          </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
