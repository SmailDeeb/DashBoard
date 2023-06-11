@extends('layouts.layout')
@section('title' , 'Archive Reports')
@section('content')

<h1 class="mb-5">Archive Reports</h1>
<div class="row">
    @foreach ($reports as $report)
    <div
        class="col-12 d-flex justify-content-between mb-3 w-100 m-0 px-5 py-2 {{ $report->status == 2 ? 'readed' : '' }}">
        <div class="row w-100">
            <div class="col-6 d-flex align-items-center">
                <h4 class="d-flex justify-content-start align-items-center mb-0"><i class="fa fa-share me-3"></i>{{
                    $report->from }}</h4>
                {{-- {{ $report->about }} <br /> --}}
            </div>
            <div class="col-6 d-flex justify-content-between align-items-center">
                <button class="btn btn-outline-info show-report d-flex align-items-center" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                    data-report="{{ $report }}">
                    {{-- <i class="fa fainfo fa-spinner fa-spin"></i> --}}
                    <span class="fa-stack me-2" style="vertical-align: top;">
                        <i class="fa-regular fa-circle fa-stack-2x"></i>
                        <i class="fa-solid fa-info fa-stack-1x"></i>
                    </span>
                    Show details
                </button>

                @if ($report->status == 2)
                <span>Readed <i class="fa fa-check-double"></i></span>
                @endif
            </div>
        </div>
    </div>
    <hr />
    @endforeach
</div>
{{-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
    aria-controls="offcanvasRight">Toggle right offcanvas</button> --}}

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Report details</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-6">From: <span id="from">...</span></div>
            <div class="col-6">About: <span id="about">...</span></div>
            <hr class="my-3" />
            <div class="col-12 mb-5">
                Content:
                <p style="text-indent: 25px" id="content">
                    ...
                </p>
            </div>

            <div class="col-12 mt-5 d-flex justify-content-around">
                {{-- <a href="#" id="readedBtn" class="btn btn-success">Readed <i class="fa fa-eye"></i></a>
                <a href="#" id="archivedBtn" class="btn btn-danger">Archive <i class="fa fa-archive"></i></a> --}}
                {{-- <form action="" method="POST" id="readedForm">
                    @csrf
                    <button type="submit" class="btn btn-success">Readed <i class="fa fa-eye"></i></button>
                </form> --}}
                <form action="" method="POST" id="restoreForm">
                    @csrf
                    <button type="submit" class="btn btn-primary">Unarchive <i class="fa fa-archive"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection