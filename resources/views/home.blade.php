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

    <div class="panel panel-default">
      <form id="profile" action="{{url('profileupdate')}}" enctype="multipart/form-data" method="post" data-parsley-validate>
               {{csrf_field()}}

                             <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} row">
                               <label for="name" class="col-md-2 control-label">Name</label>
                               <div class="col-md-6">
                               @if(!empty($name))
                                   <input id="name" type="text" class="form-control" name="name" value="{{$name}}" data-parsley-required data-parsley-pattern="^[a-zA-Z]+$" autofocus>
                               @else
                                   <input id="name" type="text" class="form-control" name="name" value="" data-parsley-required data-parsley-pattern="^[a-zA-Z]+$" autofocus>
                               @endif
                                   @if ($errors->has('name'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('name') }}</strong>
                                       </span>
                                   @endif
                               </div>
                           </div>
                           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} row">
                             <label for="name" class="col-md-2 control-label">File</label>
                             <div class="col-md-6">


                                  <input type="file" name="profile" multiple="multiple" class="form-control" >


                             </div>

                           </div>

                           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                               <label for="email" class="col-md-2 control-label">E-Mail Address</label>
                               <div class="col-md-6">
                                   @if(!empty($email))
                                   <input id="email" type="email" class="form-control" name="email" value="{{$email}}" data-parsley-required>
                                   @else
                                   <input id="email" type="email" class="form-control" name="email"  data-parsley-required>
                                   @endif
                                   @if ($errors->has('email'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('email') }}</strong>
                                       </span>
                                   @endif
                               </div>
                           </div>
                            <div class="form-group row">
                                 <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                               @if ($errors->has('password'))
                                    <span class="help-block">
                                           <strong>{{ $errors->first('password') }}</strong>
                                       </span>
                                 @endif

                            </div>
                        </div>

                        <!--
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> -->
              <button type="submit" class="btn btn-default"><i class="fa fa-edit"></i>Update</button>
            </form>

    </div>
     <table id="example2" class="table table-bordered table-hover">
                          <thead>
                            <tr>
                               <th>#</th>
                               <th>Full Name</th>
                               <th>Email</th>
                               <th>profile</th>

                           </tr>
                         </thead>
                         <tbody>
                          @foreach($users as $item)
                           <tr>
                             <td>{{ $loop->iteration }}</td>
                             <td>{{$item->fullname}}</td>
                             <td>{{ $item->email }}</td>
                             <td> <img src="{{asset('/storage/' .$item->profile)}}"  style="width:170px;height:150px;"></td>
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
 </div>
@endsection
