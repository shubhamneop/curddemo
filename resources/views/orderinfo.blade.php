@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Posts</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/posts/create') }}" class="btn btn-success btn-sm" title="Add New Post">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/posts') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                          @if($message = Session::get('flash_message'))
                            <div class="alert alert-success">
                              <button type="button" class="close" data-dismiss="alert">×</button>
                                   <p>{{$message}}</p>
                             </div>
                               <?php Session::forget('flash_message');?>
                           @endif
                         equest::get('search')])->render() !!} </div>
                        </div>
                           
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
@section('script')
<script type="text/javascript">
        $(document).ready(function(){
             $('span').click(function(e){
                alert('hi');
             });
        });
</script>


@endsection
