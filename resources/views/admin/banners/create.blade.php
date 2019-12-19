@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New banner</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/banners') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form  id="demo-form" method="POST" action="{{ url('/admin/banners') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" data-parsley-validate>
                            {{ csrf_field() }}

                            @include ('admin.banners.form', ['formMode' => 'create'])

                        </form>

<script type="text/javascript">
$(function () {
    $('#demo-form').parsley();
});
</script>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
