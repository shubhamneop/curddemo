<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      @include('layouts.css')
    </head>

<body class="hold-transition skin-blue">
 <div class="wrapperd">
 	@include('layouts.header')
 	@include('layouts.slide')
        @yield('content')

    @include('layouts.footer')





 </div>
  @include('layouts.script')
  
 @yield('script')
 </body>
 </html>	