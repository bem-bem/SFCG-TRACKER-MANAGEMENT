<div class="card mb-4">
  <div class="card-header">Search</div>
  <div class="card-body">
      <form action="{{ route('search.id_number') }}" method="get">
          <div class="input-group">
              <input class="form-control" type="number" name="id_number" placeholder="Enter search id number..." aria-label="Enter search id number..." aria-describedby="button-search" required />
              <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
          </div>
      </form>
  </div>
</div>
<!-- Categories widget-->
<div class="card mb-4">
  <div class="card-header">Categories</div>
  <div class="card-body">
      <div class="row">
          <div class="col-sm-12">
              <form action="{{ route('search.category') }}" method="get">
                  <ul class="list-group">
                      <li class="list-group-item"><input class="btn btn-outline-primary w-100" type="submit" name="student" value="student"></li>
                      <li class="list-group-item"><input class="btn btn-outline-primary w-100" type="submit" name="staff" value="staff"></li>
                      <li class="list-group-item"><input class="btn btn-outline-primary w-100" type="submit" name="visitor" value="visitor"></li>
                  </ul>
              </form>
          </div>
      </div>
  </div>
</div>
<!-- Side widget-->
<div class="card mb-4">
  <div class="card-header">Municipality</div>
  <div class="card-body">
      <div class="row">
          <div class="col-sm-12">
              <form action="{{ route('search.municipality') }}" method="get">
                  @foreach (municipalitys() as $municipality)
                  <input type="submit" name="municipality" value="{{ $municipality }}" class="mb-2 btn btn-primary btn-sm">
                  @endforeach
              </form>
          </div>
      </div>
  </div>
</div>