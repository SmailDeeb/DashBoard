@extends('layouts.layout')
@section('title' , 'Analytics')
@section('content')

<h1>Send Report</h1>

<form mehtod='post' action='' class='col-12'>
@csrf
<input type="text" class="form-control mb-4 col-sm" placeholder="Who send this report ?"  aria-label="From"> 
<input type="text" class="form-control mb-4 col-sm" placeholder="what the title for this ?"  aria-label="About">

</form>

@endsection