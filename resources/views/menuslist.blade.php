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

		   @foreach($item->children as $sub)
		   
					<li><a href="{{$sub->url}}" class="panel-heading active">{{$sub->name}} </a></li>
				
					<ul>
					@foreach($sub->children as $subcat)
                    @if(isset($subcat->route))
                    <li><a href="{{route($subcat->route)}}">{{$subcat->name}}</a> </li>
                       @else
                       <li><a href="{{url($subcat->url)}}">{{$subcat->name}}</a> </li>

                       @endif
					@endforeach
		           </ul>
			@endforeach
        </ul>

	</div>
    @endforeach

	</div>
	</div><!--/category-products-->

@endsection
