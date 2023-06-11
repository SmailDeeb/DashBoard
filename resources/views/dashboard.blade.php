@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')
<h1 class="mb-5">Welcome to Dashboard {{ auth()->user()->name }}</h1>

<div class="row">
    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-header">Admins</div>

            <div class="card-body">
                <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#adminsAccordion" aria-expanded="true" aria-controls="adminsAccordion">
                                Admins (Total: {{ $adminsCount }})
                            </button>
                        </h2>
                        <div id="adminsAccordion" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <ul class="list">
                                    @foreach ($admins as $admin)
                                    <li class="list-item"><i class="fa fa-play me-2 fa-xs"></i>
                                        {{ $admin->username }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('admins.index') }}" class="btn btn-primary">Browse</a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Admins</div>

            <div class="card-body">
                <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                {{ count($reports) }}  Reports 
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <ul class="list">
                                    @foreach ($reports as $report)
                                    <li class="list-item"><i class="fa fa-play me-2 fa-xs"></i>
                                        {{ $report->from }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection