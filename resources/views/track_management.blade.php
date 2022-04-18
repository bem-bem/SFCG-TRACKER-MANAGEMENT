@extends('layouts.app')

@section('content')
<div class="container">
    {{-- breadcrumb --}}
        @include('partials._breadcrumb')
    {{-- breadcrumb --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  
                   <div class="row">
                     <div class="col-md-6 mb-4">
                      <ul class="nav nav-pills card-header-pills mx-auto">
                        <form action="{{ route('search.category') }}">
                        <li class="nav-item me-3">
                          <input type="hidden" name="student" value="student">
                              <button type="submit" class="btn btn-outline-primary btn-sm">
                                STUDENT <span class="badge bg-secondary">{{ student() }}</span>
                              </button>
                        </li>
                        </form>
                        <form action="{{ route('search.category') }}">
                        <li class="nav-item me-3">
                          <input type="hidden" name="staff" value="staff">
                              <button type="submit" class="btn btn-outline-primary btn-sm">
                                STAFF <span class="badge bg-secondary">{{ staff() }}</span>
                              </button>
                        </li>
                        </form>
                        <form action="{{ route('search.category') }}">
                        <li class="nav-item me-3">
                          <input type="hidden" name="visitor" value="visitor">
                              <button type="submit" class="btn btn-outline-primary btn-sm">
                                VISITOR <span class="badge bg-secondary">{{ visitor() }}</span>
                              </button>
                        </li>
                        </form>
                      </ul>
                     
                     </div>
                     <div class="col-md-6">
                      <form action="{{ route('search.id_number') }}" method="get">
                        <div class="input-group mb-3">
                          <input type="search" name="id_number_table" class="form-control" required placeholder="Search ID number....">
                          <button class="btn btn-outline-primary" type="submit" id="button-addon2">Search</button>
                        </div>
                      </form>
                     </div>
                   </div>
                </div>
                <G class="card-body">
                  {{-- <G class="row">
                    <div class="col-sm-6">
                      <form action="{{ route('search.id_number') }}" method="get">
                        <div class="input-group mb-3">
                          <input type="search" name="id_number_table" class="form-control" required placeholder="Search ID number....">
                          <button class="btn btn-outline-primary" type="submit" id="button-addon2">Search</button>
                        </div>
                      </form>
                    </div>
                  </G>
                </G> --}}
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <caption>{{ $persons->links() }}</caption>
                        <thead>
                          <tr>
                            <th scope="col" class="fw-bold">ID number</th>
                            <th scope="col" class="fw-bold">First name</th>
                            <th scope="col" class="fw-bold">Last name</th>
                            <th scope="col" class="fw-bold">Middle name</th>
                            <th scope="col" class="fw-bold">Category</th>
                            <th scope="col" class="fw-bold">Added by</th>
                            <th scope="col" class="fw-bold">Update</th>
                            <th scope="col" class="fw-bold">Delete</th>
                            <th scope="col" class="fw-bold">View</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($persons as $person)
                          <tr>
                              <td>{{ $person->id_number }}</td>
                              <td>{{ $person->last_name }}</td>
                              <td>{{ $person->first_name }}</td>
                              <td>{{ $person->middle_name }}</td>
                              <td>{{ $person->category }}</td>
                              <td>{{ $person->user->name }}</td>
                              <td><a href="{{ route('people.edit', [$person->id]) }}" class="btn btn-success">update</a></td>
                              <td>
                                <form action="{{ route('people.destroy', [$person->id]) }}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  @btn(['color' => 'danger']) Delete @endbtn
                                </form>
                              </td>
                              <td><a href="{{ route('track.view', [$person->id]) }}" class="btn btn-info">View</a></td>
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
@endsection
