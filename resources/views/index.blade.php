@extends('demomaster')
@section('content')
 <div class="content-wrapper "style="min-height: 100%">
        
     <section class="content">
<div class="row">
       <div class="col-md-12 col-md-offset-1">
           <div class="panel panel-default">
               <div class="panel-heading"><b>Charts</b></div>
               <div class="panel-body">
                    {!! $chart->html() !!}
               </div>
           </div>
       </div>
     </div>
       

     </section>
 </div>    
@endsection
@section('script')
{!! Charts::scripts() !!}
{!! $chart->script() !!}
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
        <script>
        var url = "{{url('stock/chart')}}";
        var Years = new Array();
        var Labels = new Array();
        var Prices = new Array();
        $(document).ready(function(){
          $.get(url, function(response){
            response.forEach(function(data){
                Years.push(data.created_at);
                Labels.push(data.name);
                Prices.push(data.id);
            });
            var ctx = document.getElementById("canvas").getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels:created_at,
                      datasets: [{
                          label: 'users',
                          data: id,
                          borderWidth: 1
                      }]
                  },
                  options: {
                      scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero:true
                              }
                          }]
                      }
                  }
              });
          });
        });
        </script>


@endsection