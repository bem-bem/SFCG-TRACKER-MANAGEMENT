@extends('layouts.app')

@section('content')
<div class="container">
    {{-- breadcrumb --}}
        @include('partials._breadcrumb')
    {{-- breadcrumb --}}
    
        <!-- Page content-->
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    {{-- empty ni karun piro pwede butangan dre --}}
                    <!-- Featured blog post-->
                    
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        @foreach ($persons as $person)
                        <div class="col-lg-6">
                            <!-- peaple card info-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="@if (!empty($person->personImage->path)) {{ asset('storage/' . $person->personImage->path)  }} @endif" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">@badge(['color' => 'primary']) {{ $person->category }} @endbadge {{ $person->created_at }}</div>
                                    <h2 class="card-title h4">{{ $person->last_name }} {{ $person->first_name }}, {{ $person->middle_name[0] }}</h2>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">ID number : @badge(['color' => 'primary']) {{ $person->id_number }} @endbadge</li>
                                        <li class="list-group-item">Brgy : {{ $person->brgy }}</li>
                                        <li class="list-group-item">Municipality : {{ $person->municipality }}</li>
                                        <li class="list-group-item">Province : {{ $person->province }}</li>
                                        <li class="list-group-item">Added by : {{ $person->user->name }}</li>
                                    </ul>
                                    {{-- <a class="btn btn-primary float-end" href="#!">Read more →</a> --}}
                                    <a href="{{ route('people.show', [$person->id]) }}" class="btn btn-outline-primary">Add survey</a>
                                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                    <button type="button" class="btn btn-outline-success">Success</button>
                                </div>
                            </div>
                            <!-- peaple card info-->
                        </div>
                        @endforeach
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    @include('partials._side_widget')
                </div>
            </div>

</div>
@endsection
