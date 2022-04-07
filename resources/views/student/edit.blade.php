@extends('layouts.app')

@section('content')
<div class="container">

    {{-- breadcrumb --}}
    @include('partials._breadcrumb')
    {{-- breadcrumb --}}

    {{-- student registration form --}}
      <form action="{{ route('people.update', [$person->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="category" value="student">
        @include('student._form')
      </form>

    {{-- end contaner div --}}
</div>
@endsection
