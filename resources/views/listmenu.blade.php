@extends('layouts.app')
@section('content')

<div class="panel panel-default">
							
   @foreach($menus as $item)

	<div class="panel-heading">

			<h4 class="panel-title">

		<a  id="#{{$item->id}}"  href="#{{$item->id}}">{{$item->name}}
		</a>
		</h4>
	</div>
	<div id="{{ $item->id }}">
        <ul>

		   @foreach($item->submenu as $sub)
		   
					<li><a href="{{$sub->url}}">{{$sub->title}} </a></li>
 
			@endforeach
		</ul>

	</div>
    @endforeach

	</div>
	</div><!--/category-products-->

@endsection
