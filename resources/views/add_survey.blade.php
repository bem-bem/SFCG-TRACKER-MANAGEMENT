@extends('layouts.app')

@section('content')
<div class="container">
    {{-- breadcrumb --}}
        @include('partials._breadcrumb')
    {{-- breadcrumb --}}

    {{-- survey form --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $person->last_name }} {{ $person->first_name }}, {{ $person->middle_name }}</div>

                <div class="card-body">
                    <form action="{{ route('add_survey', [$person->id]) }}" method="post">
                      @csrf
                      @include('partials._survey_form')
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
