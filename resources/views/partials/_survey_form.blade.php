<div class="row">
  <div class="col-md-4 mb-3">
    <label for="input-1" class="form-label">Purpose</label>
    <input type="text" name="purpose" class="form-control @error('purpose') is-invalid @enderror" id="input-1">
  </div>
  <div class="col-md-4 mb-3">
    <label for="input-2" class="form-label">Date / Time</label>
    <input type="datetime-local" name="created_at" class="form-control @error('created_at') is-invalid @enderror" id="input-2">
  </div>
  <div class="col-md-4 mb-3">
    <label for="input-3" class="form-label">Temparature</label>
    <input type="text" name="temperature" class="form-control @error('temperature') is-invalid @enderror" id="input-3">
  </div>
</div>

<div class="row justify-content-center mt-4">
  <div class="col-md-4">
    <h6 class="fw-bolder text-center">MANIFEST ANY ONE OF THE FOLLOWING SYMPTOMS</h6>
  </div>
</div>

{{-- row 4 checkbox --}}
<div class="row">

  <div class="col-md-3 fs-4">

      <div class="form-check">
          <input class="form-check-input cb" type="checkbox" name="fever_chill" value="Fever / Chill" id="flexCheckDefault1">
          <label class="form-check-label" for="flexCheckDefault1">
              Fever / Chill
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input cb" type="checkbox" name="headache" value="Headache" id="flexCheckDefault2">
          <label class="form-check-label" for="flexCheckDefault2">
              Headache
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input cb" type="checkbox" name="cough" value="Cough" id="flexCheckDefault3">
          <label class="form-check-label" for="flexCheckDefault3">
              Cough
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input cb" type="checkbox" name="cold" value="Cold" id="flexCheckDefault4">
          <label class="form-check-label" for="flexCheckDefault4">
              Cold
          </label>
        </div>

  </div>
  <div class="col-md-3 fs-4">

      <div class="form-check">
          <input class="form-check-input cb" type="checkbox" name="fatigue" value="Fatigue" id="flexCheckDefault5">
          <label class="form-check-label" for="flexCheckDefault5">
              Fatigue
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input cb" type="checkbox" name="weakness" value="Weakness" id="flexCheckDefault6">
          <label class="form-check-label" for="flexCheckDefault6">
              Weaknes
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input cb" type="checkbox" name="lost_of_smell_taste" value="Loss of Smell / Taste" id="flexCheckDefault7">
          <label class="form-check-label" for="flexCheckDefault7">
              Loss of Smell / Taste
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input cb" type="checkbox" name="diarhea" value="Diarhea" id="flexCheckDefault8">
          <label class="form-check-label" for="flexCheckDefault8">
              Diarhea
          </label>
        </div>

  </div>
  <div class="col-md-6 fs-4">

      <div class="form-check">
          <input class="form-check-input cb" type="checkbox" name="defficult_breathing" value="Defficult in Breathing" id="flexCheckDefault9">
          <label class="form-check-label" for="flexCheckDefault9">
              Shortness of Breath/Defficult in Breathing
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input cb" type="checkbox" name="rashess" value="Rashess" id="flexCheckDefault10">
          <label class="form-check-label" for="flexCheckDefault10">
              Rashess
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input cb" type="checkbox" name="soret_hroat" value="Sorethroat" id="flexCheckDefault11">
          <label class="form-check-label" for="flexCheckDefault11">
              Sore Throat
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="none" value="None" id="flexCheckDefault12" onchange="cbChange();">
          <label class="form-check-label" for="flexCheckDefault12">
              None
          </label>
        </div>
 
  </div>

  {{-- end row --}}
</div>

{{-- row 5 other symptopms --}}
<div class="row justify-content-center mt-3">
  <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="form-floating">
          <textarea class="form-control {{ $errors->has('other_symptoms') ? 'is-invalid':'' }}" name="other_symptoms" id="floatingTextarea">{{ old('other_symptoms') }}</textarea>
          <label for="floatingTextarea">Other symptoms : </label>
        </div>
  </div>
</div>

{{-- row 6 button --}}
<div class="row justify-content-end mt-3">
  <div class="col text-end">
      @btn(['color' => 'primary']) Save @endbtn
  </div>
</div>