@extends('back.layouts.master')

@section('content')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
<div class="row">


    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
        {{--   @if ($errors->any())
          <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
              <li> {{$error}}</li> 
            @endforeach --}}
          </div>
              
          @endif

        <div class="card-body">
          <h4 class="card-title">Haqqımızda əlavə et</h4>
     
          <form method="POST" action=""  enctype="multipart/form-data">
           
         
           
            <div class="form-group">
              <label for="exampleInputName1">Başlıq_az</label>
              <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="Haqqımızda başlığı ...">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Başlıq_en</label>
              <input type="text" name="title_en" class="form-control" id="exampleInputName1" placeholder="Haqqımızda başlığı ...">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Başlıq_ru</label>
              <input type="text" name="title_ru" class="form-control" id="exampleInputName1" placeholder="Haqqımızda başlığı ...">
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Mətn_az</label>
              <textarea class="form-control" id="editor" name="content" id="exampleTextarea1" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Mətn_en</label>
              <textarea class="form-control" id="editor1" name="content_en" id="exampleTextarea1" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Mətn_ru</label>
              <textarea class="form-control" id="editor2" name="content_ru" id="exampleTextarea1" rows="4"></textarea>
            </div>

           
            <button type="submit" class="btn btn-primary mr-2">Əlavə et</button>

          </form>
        </div>
      </div>
    </div>


  </div>
</div>
@endsection
@section('script')
<script src="{{asset('admin/')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('admin/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('admin/')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('admin/')}}/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="{{asset('admin/')}}/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('admin/')}}/js/demo/chart-area-demo.js"></script>
<script src="{{asset('admin/')}}/js/demo/chart-pie-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script>
    $(document).ready(function() {
    $('#editor').summernote();
  });
  </script>
   <script>
    $(document).ready(function() {
    $('#editor1').summernote();
  });
  </script>
   <script>
    $(document).ready(function() {
    $('#editor2').summernote();
  });
  </script>
@endsection