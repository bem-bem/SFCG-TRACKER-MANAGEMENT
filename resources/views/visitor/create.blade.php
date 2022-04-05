@extends('layouts.app')

@section('content')
<div class="container">

    {{-- breadcrumb --}}
    @include('partials._breadcrumb')
    {{-- breadcrumb --}}

    {{-- student registration form --}}
      <form action="{{ route('people.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="category" value="visitor">
        @include('visitor._form')
      </form>

    {{-- end contaner div --}}
</div>
@endsection
