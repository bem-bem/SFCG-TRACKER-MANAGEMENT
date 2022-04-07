@extends('layouts.app')

@section('content')
<div class="container">
    {{-- breadcrumb --}}
        @include('partials._breadcrumb')
    {{-- breadcrumb --}}

    <div class="row justify-content-end mb-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Persons info</div>
                <div class="card-body">
                    <div class="row justify-content-evenly">
                        <div class="col-md-4">
                            <article>
                                <h5>{{ $person->last_name }} {{ $person->first_name }} {{ $person->middle_name }}</h5>
                                <p>{{ $person->category }}</p>
                                <p>{{ $person->position }}</p>
                                <p>{{ $person->id_number }}</p>
                                <p>Added by: {{ $person->user->name }}</p>
                                <p>{{ date('M/d/Y | h :i a', strtotime($person->created_at)) }}</</p>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article>
                                <h5>{{ $person->department }}</h5>
                                <p>{{ $person->grade_level }}</p>
                                <p>{{ $person->section }}</p>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <img class="img-thumbnail" style="height: 51mm; width: 51mm" src="{{ asset('storage/' . $person->personImage->path) }}">
                        </div>
                    </div>
                </div>
                {{-- second body --}}
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-primary">
                                    <tr>
                                        <th>DATE / TIME</th>
                                        <th>PURPOSE</th>
                                        <th>TEMPARATURE</th>
                                        <th>SURVEY RESULT</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($person->survey as $survey)
                                    <tr>
                                        <td>{{ date('M/d/Y | h :i a', strtotime($survey->created_at)) }}</td>
                                        <td>{{ $survey->purpose }}</td>
                                        <td>{{ $survey->temperature }}</td>
                                        <td colspan="4">
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-sm table-bordered border-primary">
                                                <tbody class="table-primary">
                                                        <td>{{ $survey->fever_chill }} </td>
                                                        <td>{{ $survey->headache }} </td>
                                                        <td>{{ $survey->cough }} </td>
                                                        <td>{{ $survey->cold }} </td>
                                                        <td>{{ $survey->sorethroat }} </td>
                                                        <td>{{ $survey->rashess }} </td>
                                                        <td>{{ $survey->fatigue }} </td>
                                                        <td>{{ $survey->weakness }} </td>
                                                        <td>{{ $survey->lost_of_smell_taste }} </td>
                                                        <td>{{ $survey->diarhea }} </td>
                                                        <td>{{ $survey->defficult_breathing }} </td>
                                                        <td>{{ $survey->none }} </td>
                                                        <td>{{ $survey->other_symptoms }} </td>
                                                </tbody>
                                            </table>
                                           </div>
                                        </td>
                                    </tr>
                                    @empty
                                            
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- vax card --}}
    <div class="row justify-content-center mb-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Vaccine Card</div>
                <img class="img-fluid" src="{{ asset('storage/' . $person->vaccineImage->path) }}">
            </div>
        </div>
    </div>

    {{-- print out --}}
    <div class="row justify-content-end mb-4">
        <div class="col-md-4">
            <a target="blank" href="{{ route('pdf', [$person->id]) }}" class="btn btn-primary w-50 float-end">Print</a>
        </div>
    </div>

</div>
@endsection
