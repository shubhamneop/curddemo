<div class="form-group {{ $errors->has('address1') ? 'has-error' : ''}}">
    <label for="address1" class="control-label">{{ 'Address1' }}</label>
    <input class="form-control" name="address1" type="text" id="address1" value="{{ isset($address->address1) ? $address->address1 : ''}}" >
    {!! $errors->first('address1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address2') ? 'has-error' : ''}}">
    <label for="address2" class="control-label">{{ 'Address2' }}</label>
    <textarea  class="form-control" name="address2" type="text" id="address2"  rows="10" cols="80" >
         {{ isset($address->address2) ? $address->address2 : ''}}
    </textarea>
    {!! $errors->first('address2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('zipcode') ? 'has-error' : ''}}">
    <label for="zipcode" class="control-label">{{ 'Zipcode' }}</label>
    <input class="form-control" name="zipcode" type="number" id="zipcode" value="{{ isset($address->zipcode) ? $address->zipcode : ''}}" >
    {!! $errors->first('zipcode', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
    <label for="country" class="control-label">{{ 'Country' }}</label>
    <input class="form-control" name="country" type="text" id="country" value="{{ isset($address->country) ? $address->country : ''}}" >
    {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
    <label for="state" class="control-label">{{ 'State' }}</label>
    <input class="form-control" name="state" type="text" id="state" value="{{ isset($address->state) ? $address->state : ''}}" >
    {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phoneno') ? 'has-error' : ''}}">
    <label for="phoneno" class="control-label">{{ 'Phoneno' }}</label>
    <input class="form-control" name="phoneno" type="text" id="phoneno" value="{{ isset($address->phoneno) ? $address->phoneno : ''}}" >
    {!! $errors->first('phoneno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mobileno') ? 'has-error' : ''}}">
    <label for="mobileno" class="control-label">{{ 'Mobileno' }}</label>
    <input class="form-control" name="mobileno" type="text" id="mobileno" value="{{ isset($address->mobileno) ? $address->mobileno : ''}}" >
    {!! $errors->first('mobileno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($address->user_id) ? $address->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
