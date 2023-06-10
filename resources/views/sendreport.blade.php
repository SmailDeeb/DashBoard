@extends('layouts.layout')
@section('title' , 'Send Report')
@section('content')

<h1>Send Report</h1>

<form mehtod='post' action='' class='col-12'>
@csrf
<div class="row mt-4">

    <div class="form-floating m-5 me-4 col-2">
      <input type="text" class="form-control" id="floatingInput" placeholder="Who send report">
      <label for="floatingInput">FROM</label>
    </div>
    <div class="form-floating m-5 ms-3 col-2">
      <input type="text" class="form-control" id="floatingInput2" placeholder="Title for report">
      <label for="floatingInput2">About</label>
    </div>

    <div class="col-5 m-5 d-flex">
    <select class="form-control" >
      <option   disabled selected >Select type</option>
      
    </select>
    </div>
    <div class="m-5 col-7 " >
      <span class="input-group-text" >Report</span>
      <textarea class="form-control inline-block" aria-label="Report"></textarea>
      </div>
      <div class="d-grid m-4 gap-2 col-4 mx-auto">
        <button class="btn btn-primary fa-send rounded-pill" type="button">SEND REPORT </button>
      </div>
  </div>

</form>

@endsection