<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="control-label">{{ 'Category' }}</label>
    <select name="category" class="form-control" id="category" >
    @foreach (json_decode('{}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($category->category) && $category->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('categoryname') ? 'has-error' : ''}}">
    <label for="categoryname" class="control-label">{{ 'Categoryname' }}</label>
    <input class="form-control" name="categoryname" type="text" id="categoryname" value="{{ isset($category->categoryname) ? $category->categoryname : ''}}" >
    {!! $errors->first('categoryname', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
