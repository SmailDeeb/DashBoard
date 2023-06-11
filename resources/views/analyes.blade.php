@extends('layouts.layout')
@section('title' , 'Analytics')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<h1 class="mb-5">Analytics</h1>

<div class="row">
  <div class="col-8">
    <canvas id="myChart"></canvas>
  </div>
  <div class="col-4">
    <canvas id="doughnutChart"></canvas>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

    const el = document.getElementById('doughnutChart');

    

    const data = {
    labels: [
      'Red',
      'Blue',
      'Yellow'
    ],
    datasets: [{
      label: 'My First Dataset',
      data: [300, 50, 100],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
      ],
      hoverOffset: 4
    }]
  };

  const config = {
      type: 'doughnut',
      data: data,
    };

    new Chart(el, config);
</script>




@endsection