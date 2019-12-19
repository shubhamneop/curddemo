

@foreach($childs as $child)



	    {{ $child->title }}

	@if(count($child->childs))

         <td>   @include('manageChild',['childs' => $child->childs])</td>

        @endif

	

@endforeach

