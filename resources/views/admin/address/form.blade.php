<div class="form-group {{ $errors->has('fullname') ? 'has-error' : ''}}">
    {{__('lables.address.Fullname')}}
    {!! Form::text('fullname', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('fullname', '<p class="help-block" style="color: red">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address1') ? 'has-error' : ''}}">
        {{__('lables.address.Address1')}}
    {!! Form::text('address1', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('address1', '<p class="help-block"  style="color: red">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address2') ? 'has-error' : ''}}">
            {{__('lables.address.Address2')}}
    {!! Form::text('address2', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('address2', '<p class="help-block" style="color: red">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('zipcode') ? 'has-error' : ''}}">
            {{__('lables.address.Zipcode')}}
    {!! Form::number('zipcode', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('zipcode', '<p class="help-block" style="color: red">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
                {{__('lables.address.Country')}}
    {!! Form::text('country', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('country', '<p class="help-block" style="color: red">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
                    {{__('lables.address.State')}}
    {!! Form::text('state', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('state', '<p class="help-block" style="color: red">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phoneno') ? 'has-error' : ''}}">
                        {{__('lables.address.Phoneno')}}
    {!! Form::text('phoneno', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('phoneno', '<p class="help-block" style="color: red">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mobileno') ? 'has-error' : ''}}">
                        {{__('lables.address.Mobileno')}}
    {!! Form::text('mobileno', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('mobileno', '<p class="help-block" style="color: red">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
