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
        labels: ['Admins', 'Post', 'user'],
        datasets: [{
          label: '',
          data: [{{ count($admins) }}, {{ count($posts) }}, {{ count($users) }} ],
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
      'Admins',
      'Posts',
      'Users'
    ],
    datasets: [{
      label: 'My First Dataset',
      data: [{{ count($admins) }}, {{ count($posts) }}, {{ count($users) }} ,{{ count($cars) }} ],
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