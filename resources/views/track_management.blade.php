@extends('layouts.app')

@section('content')
<div class="container">
    {{-- breadcrumb --}}
        @include('partials._breadcrumb')
    {{-- breadcrumb --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Track Management</div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      
                        <div class="btn-group-vertical">

                          <form action="{{ route('search.category') }}" method="get">
                            <input type="hidden" name="student" value="student">
                            <button type="submit" class="btn btn-outline-primary btn-sm">
                              student <span class="badge bg-secondary">{{ student() }}</span>
                            </button>
                            </form>

                            <form action="{{ route('search.category') }}" method="get">
                              <input type="hidden" name="staff" value="staff">
                              <button type="submit" class="btn btn-outline-primary btn-sm">
                                staff <span class="badge bg-secondary">{{ staff() }}</span>
                              </button>
                              </form>

                              <form action="{{ route('search.category') }}" method="get">
                                <input type="hidden" name="visitor" value="visitor">
                                <button type="submit" class="btn btn-outline-primary btn-sm">
                                  visitor <span class="badge bg-secondary">{{ visitor() }}</span>
                                </button>
                                </form>
                        </div>
                      {{-- <input type="submit" name="staff" value="staff" class="btn btn-secondary">
                      <input type="submit" name="visitor" value="visitor" class="btn btn-success"> --}}
                    </div>
                    <div class="col-sm-6">
                      <form action="{{ route('search.id_number') }}" method="get">
                        <div class="input-group mb-3">
                          <input type="search" name="id_number_table" class="form-control" required placeholder="Search ID number....">
                          <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <caption>{{ $persons->links() }}</caption>
                        <thead>
                          <tr>
                            <th scope="col">ID number</th>
                            <th scope="col">First name</th>
                            <th scope="col">Last name</th>
                            <th scope="col">Middle name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Added by</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                            <th scope="col">View</th>
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
