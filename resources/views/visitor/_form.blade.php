<div class="card shadow">
  <div class="card-header">Register A new Visitor here</div>
      <div class="card-body">
        {{-- input fields --}}
        <div class="row mb-4">
          <div class="col-md-3 mb-3">
            <label for="input-1" class="form-label">Last name</label>
            <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name' , optional($student ?? null)->last_name) }}" id="input-1">
            @error('last_name')
            <span class="invalid-feedback fw-bolder" role="alert">
                {{ $message }}
            </span>
            @enderror
          </div>
          <div class="col-md-3 mb-3">
            <label for="input-2" class="form-label">First name</label>
            <input type="text" name="first_name" class="form-control  @error('first_name') is-invalid @enderror" value="{{ old('first_name' , optional($student ?? null)->first_name) }}" id="input-2">
            @error('first_name')
            <span class="invalid-feedback fw-bolder" role="alert">
                {{ $message }}
            </span>
            @enderror
          </div>
          <div class="col-md-3 mb-3">
            <label for="input-3" class="form-label">Middle name</label>
            <input type="text" name="middle_name" class="form-control @error('middle_name') is-invalid @enderror" value="{{ old('middle_name' , optional($student ?? null)->middle_name) }}" id="input-3">
            @error('middle_name')
            <span class="invalid-feedback fw-bolder" role="alert">
                {{ $message }}
            </span>
            @enderror
          </div>
          <div class="col-md-3 mb-3">
            <label for="input-3" class="form-label">Contact number</label>
            <input type="text" name="contact_number" class="form-control @error('contact_number') is-invalid @enderror" value="{{ old('contact_number' , optional($student ?? null)->contact_number) }}" id="input-3">
            @error('contact_number')
            <span class="invalid-feedback fw-bolder" role="alert">
                {{ $message }}
            </span>
            @enderror
          </div>
        </div>
    
        <div class="row mb-4">
          <div class="col-md-4 mb-3">
            <label for="input-4" class="form-label">Barrangay</label>
            <input name="brgy" class="form-control @error('brgy') is-invalid @enderror" value="{{ old('brgy' , optional($student ?? null)->brgy) }}" id="input-4" list="datalistBrgy" id="input-4" placeholder="Type to search...">
            <datalist id="datalistBrgy">
                @foreach (brgys() as $brgy)
                <option value="{{ $brgy }}">
                @endforeach
            </datalist>
            @error('brgy')
            <span class="invalid-feedback fw-bolder" role="alert">
                {{ $message }}
            </span>
            @enderror
          </div>
          <div class="col-md-4 mb-3">
            <label for="input-5" class="form-label">Municipality</label>
            <input name="municipality" class="form-control @error('municipality') is-invalid @enderror" value="{{ old('municipality' , optional($student ?? null)->municipality) }}" id="input-4" list="datalistMunicipality" id="input-5" placeholder="Type to search...">
            <datalist id="datalistMunicipality">
                @foreach (municipalitys() as $municipality)
                <option value="{{ $municipality }}">
                @endforeach
            </datalist>
            @error('municipality')
            <span class="invalid-feedback fw-bolder" role="alert">
                {{ $message }}
            </span>
            @enderror
          </div>
          <div class="col-md-4 mb-3">
            <label for="input-6" class="form-label">Province</label>
            <input name="province" class="form-control @error('province') is-invalid @enderror" value="{{ old('province' , optional($student ?? null)->province) }}" id="input-4" list="datalistProvince" id="input-6" placeholder="Type to search...">
            <datalist id="datalistProvince">
                @foreach (provinces() as $province)
                <option value="{{ $province }}">
                @endforeach
            </datalist>
            @error('province')
            <span class="invalid-feedback fw-bolder" role="alert">
                {{ $message }}
            </span>
            @enderror
          </div>
        </div>
    
        <div class="row mb-4">
          <div class="col-md-4 mb-3">
            <label for="input-10" class="form-label">Vaccine card image</label>
            <input type="file" name="vaccine_card_image" class="form-control  @error('vaccine_card_image') is-invalid @enderror" id="input-10">
            @error('vaccine_card_image')
            <span class="invalid-feedback fw-bolder" role="alert">
                {{ $message }}
            </span>
            @enderror
          </div>
          <div class="col-md-4 mb-3">
            <label for="input-11" class="form-label">2*2 Image</label>
            <input type="file" name="person_image" class="form-control @error('person_image') is-invalid @enderror" id="input-11">
            @error('person_image')
            <span class="invalid-feedback fw-bolder" role="alert">
                {{ $message }}
            </span>
            @enderror
          </div>
        </div>
    
        <div class="row">
          <div class="col-12 text-end">
            @btn(['color' => 'primary']) Save @endbtn
          </div>
        </div>
        {{-- end input fields--}}

        {{-- end of body --}}
      </div>
</div>