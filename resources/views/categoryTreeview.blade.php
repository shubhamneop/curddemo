<html>

<head>

	<title>Laravel Category Treeview Example</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link href="/css/treeview.css" rel="stylesheet">

</head>

<body>

	<div class="container">     

		<div class="panel panel-primary">

			<div class="panel-heading">Manage Category TreeView</div>

	  		<div class="panel-body">

	  			<div class="row">

	  				<div class="col-md-6">

	  					<h3>Category List</h3>
                          <!--
				        <table class="table table-bordered">
                                 <tr>
                                        <th>Category</th><th>Sub Category</th><th>Actions</th>
                                    </tr>

				            @foreach($categories as $category)

				                <tr>

				                <td>    {{ $category->title }}</td>

				                    @if(count($category->childs))

				                 @include('manageChild',['childs' => $category->childs])

				                    @endif

				                </tr>

				            @endforeach

				       </table>
				           -->
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Category</th><th>Sub Category</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                      
                      	 @foreach($categories  as $category)
                      	    <tr> <td>{{ $loop->iteration }}</td>
                             <td>{{ $category->title }}</td>
                             <td> @include('manageChild',['childs' => $category->childs])
                              </td>
                           </tr>
                        
                         @endforeach
                        </tbody>
                         </table>



           <table id="tree-table" class="table table-hover table-bordered">
                    <tbody>
                    <th>Categories </th>
                            @foreach($categories as $category)
                                <tr data-id="{{$category->id}}" data-parent="0" data-level="1">
                                    <td data-column="name">{{$category->title}}</td>
                                </tr>
                               <tr> @if(count($category->subcategory))
                                    @include('subCategoryView',['subcategories' => $category->subcategory, 'dataParent' => $category->id , 'dataLevel' => 1])
                                @endif </tr>     
				            @endforeach
                        </tbody>
                    
                    </table>




	  				</div>

	  				<div class="col-md-6">

	  					<h3>Add New Category</h3>


				  			{!! Form::open(['route'=>'add.category']) !!}


				  				@if ($message = Session::get('success'))

									<div class="alert alert-success alert-block">

										<button type="button" class="close" data-dismiss="alert">×</button>	

									        <strong>{{ $message }}</strong>

									</div>

								@endif


				  				<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">

									{!! Form::label('Title:') !!}

									{!! Form::text('title', old('title'), ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}

									<span class="text-danger">{{ $errors->first('title') }}</span>

								</div>


								<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">

									{!! Form::label('Category:') !!}

									{!! Form::select('parent_id',$allCategories, old('parent_id'), ['class'=>'form-control', 'placeholder'=>'Select Category']) !!}

									<span class="text-danger">{{ $errors->first('parent_id') }}</span>

								</div>


								<div class="form-group">

									<button class="btn btn-success">Add New</button>

								</div>


				  			{!! Form::close() !!}


	  				</div>

	  			</div>


	  			

	  		</div>

        </div>

    </div>

    <script src="/js/treeview.js"></script>

</body>

</html>