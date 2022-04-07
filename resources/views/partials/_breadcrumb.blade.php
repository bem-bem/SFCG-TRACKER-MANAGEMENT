<div class="row">
    <div class="col-md-12">
      <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item dropdown">
            <a class="fs-4 text-decoration-none dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Registration
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{ route('create_student') }}">Student</a></li>
              <li><a class="dropdown-item" href="{{ route('create_staff') }}">Staff</a></li>
              <li><a class="dropdown-item" href="{{ route('create_visitor') }}">Visitor</a></li>
            </ul>
          </li>
          <li class="breadcrumb-item"><a class="fs-4" href="{{ route('people.index') }}">Recording</a></li>
          <li class="breadcrumb-item"><a class="fs-4" href="{{ route('track.table') }}">TrackManagement</a></li>
        </ol>
      </nav>
    </div>
</div>