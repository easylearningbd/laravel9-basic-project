@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Portfolio All</h4>

                                     

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Portfolio All Data </h4>
                    

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Portfolio Name</th>
                            <th>Portfolio Title</th>
                            <th>Portfolio Image</th>
                            <th>Action</th>
                            
                        </thead>


                        <tbody>
                        	@php($i = 1)
                        	@foreach($portfolio as $item)
                        <tr>
                            <td> {{ $i++}} </td>
                            <td> {{ $item->portfolio_name }} </td>
                            <td> {{ $item->portfolio_title }} </td>
                            <td> <img src="{{ asset($item->portfolio_image) }}" style="width: 60px; height: 50px;"> </td>
                            
                            <td>
   <a href="{{ route('edit.portfolio',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

     <a href="{{ route('delete.portfolio',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>

                            </td>
                           
                        </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                     
                        
                    </div> <!-- container-fluid -->
                </div>
 

@endsection