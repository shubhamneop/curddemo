<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {{__('lables.posts.Title')}}
    {!! Form::text('title', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block" style="color: red">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {{__('lables.posts.Content')}}
    {!! Form::textarea('content', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('content', '<p class="help-block" style="color: red">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
        {{__('lables.posts.Category')}}
    {!! Form::select('category', json_decode('{"technology": "Technology", "tips": "Tips", "health": "Health"}', true), null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('category', '<p class="help-block" style="color: red">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
