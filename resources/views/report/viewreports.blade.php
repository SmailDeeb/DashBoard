@extends('layouts.layout')
@section('title' , 'Reports')
@section('content')



<h1>View Reports</h1>
@foreach ($reports as $report) 

<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" 
  aria-expanded="false" aria-controls="multiCollapseExample1">Report From {{ $report->from }} about {{ $report->about }}</a>

  @endforeach



@endsection