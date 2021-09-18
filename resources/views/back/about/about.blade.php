@extends('back.layouts.master')

@section('content')

<link href="{{asset('admin/')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
        <div class="card-body">
            <a href="{{route('about.create')}}"><button class="btn btn-block btn-primary mb-4">Haqqımızda əlavə et</button></a>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Başlıq_az</th>
                            <th>Mətn_az</th>
                            <th>Başlıq_en</th>
                            <th>Mətn_en</th>
                            <th>Başlıq_ru</th>
                            <th>Mətn_ru</th>
                            <th>Yaranma tarixi</th>
                            <th>Əməliyyatlar</th>
                            
                        </tr>
                    </thead>
                  
                    <tbody>
                    
                        <tr>
                            <td></td>
                          
                         
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                         
                            <td></td>
                            {{-- <td>
                              <label class="badge badge-info">On hold</label>
                            </td> --}}
                            <td style="display: flex; justify-content:space-around">
                                   <a  style=" padding:6px " href="" title="Redaktə et" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                   <a  style=" padding:6px" href="" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                 
                                 
                            </td>
                        </tr>
                   
                     
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



@section('script')
 <!-- Bootstrap core JavaScript-->
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

    <!-- Page level plugins -->
<script src="{{asset('admin/')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin/')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('admin/')}}/js/demo/datatables-demo.js"></script>
@endsection


@endsection