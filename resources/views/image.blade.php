@extends('layouts.app')

@section('content')
 <div class="container">
  <div class="row">
   <div class="col-md-8 col-md-offset-2">

    @if (Session::has('message'))
     <div class="alert alert-{{ Session::get('code') }}">
      <p>{{ Session::get('message') }}</p>
     </div>
    @endif

    <form action="/upload" enctype="multipart/form-data" method="post">
{{ csrf_field() }} 
Product name: <br>
<input name="name" type="text"> 
<br><br>
Product photos (can attach more than one): <br>
<input multiple="multiple" name="photos[]" type="file"> 
    {!! $errors->first('photos', '<p class="help-block" style="color: red">:message</p>') !!}

<br><br>
<input type="submit" value="Upload">
</form>

   </div>

    <table id="example2" class="table table-bordered table-hover">
                          <thead>
                            <tr>
                               <th>#</th>
                               <th> Name</th>
                               <th>profile</th>
                              
                           </tr>
                         </thead>
                         <tbody>
                          @foreach($photos as $item)
                           <tr>
                             <td>{{ $loop->iteration }}</td>
                             <td>{{$item->name}}</td>
                             <td> <img src="{{asset('/storage/' .$item->filename)}}"  style="width:170px;height:150px;"></td>
                            <!-- 
                             <td>
                                 <a href="{{ url('//' . $item->id) }}" title="View Address"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                 <a href="{{ url('/addresses/' . $item->id . '/edit') }}" title="Edit Address"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>

                                 <form method="POST" action="{{ url('/addresses' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                     {{ method_field('DELETE') }}
                                     {{ csrf_field() }}
                                     <button type="submit" class="btn btn-danger btn-sm" title="Delete Address" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                 </form>
                             </td> -->
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
  </div>
 </div>
@endsection