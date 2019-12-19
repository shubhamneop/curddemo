@extends('demomaster')

@section('content')
  <div class="content-wrapper">
        <section class="content-header">

                <h2>User Management</h2>

        </section>
        <section class="content">

           <form>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>FirstName:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'FirstName','class' => 'form-control')) !!}
                        <span style="color: red">{{ $errors->first('name') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>LastName:</strong>
                        {!! Form::text('lastname', null, array('placeholder' => 'LastName','class' => 'form-control')) !!}
                        <span style="color: red">{{ $errors->first('lastname') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                        <span style="color: red">{{ $errors->first('email') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                        <span style="color: red">{{ $errors->first('password') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Confirm Password:</strong>
                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                        <span style="color: red">{{ $errors->first('confirm-password') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status:</strong>
                        {!! Form::radio('status', '1',true) !!}
                        {!! Form::radio('status','0', false) !!}
                        <span style="color: red">{{ $errors->first('status') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                         
                         <span style="color: red">{{ $errors->first('roles') }}</span>

                     </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
           </form>
            <form>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>FirstName:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'FirstName','class' => 'form-control')) !!}
                        <span style="color: red">{{ $errors->first('name') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>LastName:</strong>
                        {!! Form::text('lastname', null, array('placeholder' => 'LastName','class' => 'form-control')) !!}
                        <span style="color: red">{{ $errors->first('lastname') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                        <span style="color: red">{{ $errors->first('email') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                        <span style="color: red">{{ $errors->first('password') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Confirm Password:</strong>
                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                        <span style="color: red">{{ $errors->first('confirm-password') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status:</strong>
                        {!! Form::radio('status', '1',true) !!}
                        {!! Form::radio('status','0', false) !!}
                        <span style="color: red">{{ $errors->first('status') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                         
                         <span style="color: red">{{ $errors->first('roles') }}</span>

                     </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
           </form>
            <form>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>FirstName:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'FirstName','class' => 'form-control')) !!}
                        <span style="color: red">{{ $errors->first('name') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>LastName:</strong>
                        {!! Form::text('lastname', null, array('placeholder' => 'LastName','class' => 'form-control')) !!}
                        <span style="color: red">{{ $errors->first('lastname') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                        <span style="color: red">{{ $errors->first('email') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                        <span style="color: red">{{ $errors->first('password') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Confirm Password:</strong>
                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                        <span style="color: red">{{ $errors->first('confirm-password') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status:</strong>
                        {!! Form::radio('status', '1',true) !!}
                        {!! Form::radio('status','0', false) !!}
                        <span style="color: red">{{ $errors->first('status') }}</span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                         
                         <span style="color: red">{{ $errors->first('roles') }}</span>

                     </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
           </form>

         </section>
         </div>  

@endsection