@extends('layouts.layout')
@section('title' , 'Send Report')
@section('content')

<h1>Send Report</h1>
{{-- <img src="public/images/R.png"> --}}
<form mehtod='post' action='{{ route('store') }}' class='col-9'>
@csrf
<fieldset>
<div class="row mt-4">

    <div class="form-floating m-3 ms-4 col-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Who send report">
      <label for="floatingInput" name='from'>FROM</label>
    </div>
    <div class="form-floating m-3 me-lg-5 col-3">
      <input type="text" class="form-control" id="floatingInput2" placeholder="Title for report">
      <label for="floatingInput2" name='about'>About</label>
    </div>

    <div class="col-4 m-4 d-inline">
    <select class="form-control" >
      <option   disabled selected >Select type</option>
      
    </select>
    </div>
    <div class="m-4 col-7 ">
      <span class="input-group-text" name='content' >Report</span>
      <textarea class="form-control inline-block" aria-label="Report"></textarea>
      </div>
      <div class="d-grid m-4 col-4">
        <button class="btn btn-primary fa-send rounded-pill" type="submit">SEND REPORT </button>
      </div>
  </div>
</fieldset>

</form>

@endsection