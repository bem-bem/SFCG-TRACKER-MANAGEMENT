@extends('layouts.app')

@section('content')
<div class="container">
    {{-- breadcrumb --}}
        @include('partials._breadcrumb')
    {{-- breadcrumb --}}
    
        <!-- Page content-->
            <div class="row justify-content-center">
                <div class="col-md-6">
                   <form action="{{ route('search.id_number') }}" method="get">
                    <div class="input-group mb-3">
                        <input type="search" name="id_number" class="form-control" placeholder="Search ID number..." required>
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Search</button>
                    </div>
                   </form>
                </div>
            </div>

            {{-- card --}}
            <div class="row mb-5">
                @forelse ($persons as $person)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="@if (!empty($person->personImage->path)) {{ asset('storage/' . $person->personImage->path)  }} @endif" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">{{ $person->last_name }} {{ $person->first_name }}, {{ $person->middle_name[0] }}</h5>
                        <p class="card-text"><span class="badge bg-primary">{{ $person->category }}</span></p>
                        <a href="{{ route('people.show', [$person->id]) }}" class="btn btn-primary float-end btn-sm mt-3">New record</a>
                    </div>
                    </div>
                </div>
                @empty
                    
                @endforelse
            </div>

            
            <div class="row justify-content-center">
                <div class="col-md-6">
                    {{ $persons->links() }}
                </div>
            </div>

</div>
@endsection
