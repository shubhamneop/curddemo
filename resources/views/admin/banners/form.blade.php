<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($banner->name) ? $banner->name : ''}}"    data-parsley-required-message="alpha  is required" data-parsley-pattern="/^\(?([a-zA-Z]+)\)?[-. ]?([0-9]+)$/" required="">
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bannername') ? 'has-error' : ''}}">
    <label for="bannername" class="control-label">{{ 'Bannername' }}</label>
    <input class="form-control" name="bannername" type="file" id="bannername" value="{{ isset($banner->bannername) ? $banner->bannername : ''}}" >
    {!! $errors->first('bannername', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
