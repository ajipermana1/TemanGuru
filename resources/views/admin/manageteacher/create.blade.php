@extends('admin.template.admin-main');

@section('content')

<div class="card">
    <div class="card-header">
      <h5>Tambah data guru</h5>
    </div>
    <form class="form theme-form">
      <div class="card-body">
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label class="form-label" for="exampleInputPassword2">Nama</label>
                <input class="form-control" id="exampleInputPassword2" type="text" placeholder="Nama guru" data-bs-original-title="" title="">
              </div>
            </div>
          </div>
        <div class="row">
            <div class="col">
              <div class="mb-3">
                <label class="form-label" for="exampleFormControlSelect9">Kelas</label>
                <select class="form-select digits" id="exampleFormControlSelect9">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col">
            <div class="mb-3">
              <label class="form-label" for="exampleFormControlSelect9">Matpel</label>
              <select class="form-select digits" id="exampleFormControlSelect9">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
        </div>

        {{-- <div class="row">
          <div class="col">
            <div>
              <label class="form-label" for="exampleFormControlTextarea4">Example textarea</label>
              <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
            </div>
          </div>
        </div> --}}
      </div>
      <div class="card-footer text-end">
        <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Submit</button>
        <input class="btn btn-light" type="reset" value="Cancel" data-bs-original-title="" title="">
      </div>
    </form>
  </div>

@endsection
