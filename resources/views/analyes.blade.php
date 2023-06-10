@extends('layouts.layout')
@section('title' , 'Analytics')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<h1>Analytics</h1>
<div>
    <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<div class="col-2">

<script>
    const ctx = document.getElementById('myChart');
  
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
</script>
</div>

<div class="col-1"><script>
  
  </script>
</div>



@endsection