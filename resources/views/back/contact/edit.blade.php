@extends('back.layouts.master')

@section('content')

<div class="content-wrapper">

    <div class="row">
    {{--   @if ($errors->any())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
          <li> {{$error}}</li> 
        @endforeach
      </div>
      @endif --}}

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Əlaqə redaktə et</h4>

            <form method="POST" action=""  enctype="multipart/form-data">
           @method('POST')
              @csrf

              <div class="form-group">
                <label for="exampleInputName1">Adres_az</label>
                <input type="text" name="address" value="" class="form-control" id="exampleInputName1"   placeholder="Adres ...">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Adres_en</label>
                <input type="text" name="address_en" value="" class="form-control" id="exampleInputName1"   placeholder="Adres ...">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Adres_ru</label>
                <input type="text" name="address_ru" value="" class="form-control" id="exampleInputName1"   placeholder="Adres ...">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Email</label>
                <input type="text" name="email" value="" class="form-control" id="exampleInputName1"   placeholder="Email ...">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Telefon</label>
                <input type="text" name="phone" value="" class="form-control" id="exampleInputName1"   placeholder="Telefon ...">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Iş günləri_az</label>
                <input type="text" name="work_days" value="" class="form-control" id="exampleInputName1"   placeholder="Iş günləri ...">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Iş günləri_en</label>
                <input type="text" name="work_days_en" value="" class="form-control" id="exampleInputName1"   placeholder="Iş günləri ...">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Iş günləri_ru</label>
                <input type="text" name="work_days_ru" value="" class="form-control" id="exampleInputName1"   placeholder="Iş günləri ...">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Iş saatları</label>
                <input type="text" name="work_hours" value="" class="form-control" id="exampleInputName1"   placeholder="Iş saatları ...">
              </div>

              
   
              <button type="submit" class="btn btn-primary mr-2">Yenilə</button>

            </form>
          </div>
        </div>
      </div>


    </div>
  </div>
@endsection