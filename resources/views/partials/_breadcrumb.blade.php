<div class="row">
  <div class="col-md-2 mb-4">
    <div class="dropdown">
    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
      Registration
    </a>
  
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <li><a class="dropdown-item" href="{{ route('create_student') }}">Student</a></li>
      <li><a class="dropdown-item" href="{{ route('create_staff') }}">Staff</a></li>
      <li><a class="dropdown-item" href="{{ route('create_visitor') }}">Visitor</a></li>
    </ul>
  </div>
</div>
  <div class="col-md-2 mb-4"><a href="{{ route('people.index') }}" class="btn btn-primary">Recording</a></div>
  <div class="col-md-2 mb-4"><a href="{{ route('track.table') }}" class="btn btn-primary">TrackManagement</a></div>
</div>