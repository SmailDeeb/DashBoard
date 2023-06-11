@extends('layouts.layout')
@section('title' , 'Send Report')
@section('content')

<h1>Send Report</h1>
<div class="row ">

  <form action="{{ route('store') }}" method="POST" class='col-6'>
    @csrf
    <fieldset>
      <div class="row mt-4">
        <div class="form-floating m-3 ms-4 col-3">
          <input type="text" class="form-control" name='from' id="floatingInput" placeholder="Who send report">
          <label for="floatingInput">FROM</label>
        </div>
        <div class="form-floating m-3 me-lg-5 col-3">
          <input type="text" class="form-control" id="floatingInput2" name='about' placeholder="Title for report">
          <label for="floatingInput2">About</label>
        </div>

        <div class="col-4 m-4 d-inline">
          <select class="form-control" name="type">
            <option disabled selected>Select type</option>
            <option value=0>Normal Report</option>
            <option value=1>neccery Report</option>
          </select>
        </div>
        <div class="m-4 col-7 ">
          <span class="input-group-text">Report</span>
          <textarea class="form-control inline-block" name='content' aria-label="Report"></textarea>
        </div>
        <div class="d-grid m-4 col-4">
          <button class="btn btn-primary rounded-pill" type="submit">SEND REPORT <i
              class="fa fa-paper-plane ms-2"></i></button>
        </div>
      </div>
    </fieldset>

  </form>
  <div class="col-6">

    <img src="/images/R.png" style="max-height: 75vh">
  </div>
</div>
@endsection