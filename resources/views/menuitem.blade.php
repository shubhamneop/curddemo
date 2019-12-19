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

                        {!! Form::open(['url' => '/menu/additem', 'files' => true]) !!}
                        <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">

                                    {!! Form::label('menu:') !!}

                                    {!! Form::select('menu_id',$menus, old('p_id'), ['class'=>'form-control', 'placeholder'=>'Select Category']) !!}

                                    <span class="text-danger">{{ $errors->first('p_id') }}</span>

                                </div>
                          <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        {{__('Title')}}
                        {!! Form::text('title', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                        {!! $errors->first('name', '<p class="help-block" style="color: red">:message</p>') !!}
                       </div>
                        <div class="form-group {{ $errors->has('url') ? 'has-error' : ''}}">
                        {{__('Url')}}
                        {!! Form::text('url', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                        {!! $errors->first('url', '<p class="help-block" style="color: red">:message</p>') !!}
                       </div>
                        <div class="form-group {{ $errors->has('order') ? 'has-error' : ''}}">
                        {{__('Order')}}
                        {!! Form::text('order', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                        {!! $errors->first('order', '<p class="help-block" style="color: red">:message</p>') !!}
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
