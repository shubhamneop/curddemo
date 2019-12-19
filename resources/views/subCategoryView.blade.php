@foreach($subcategories as $subcategory)
         data-id="{{$subcategory->id}}" data-parent="{{$dataParent}}" data-level = "{{$dataLevel + 1}}">
            <td data-column="name">{{$subcategory->title}}</td>
        
	    @if(count($subcategory->subcategory))
            @include('subCategoryView',['subcategories' => $subcategory->subcategory, 'dataParent' => $subcategory->id, 'dataLevel' => $dataLevel ])
        @endif
@endforeach