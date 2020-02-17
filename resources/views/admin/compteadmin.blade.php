
@extends('admin.layouts.template')
@section('content')
<div class="page-wrapper">


                <div class="card">
                @if(session()->has('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>   
          @endif
          @if(session()->has('danger'))
          <div class="alert alert-danger">
            {{ session()->get('danger') }}
          </div>   
          @endif
          @if(session()->has('info'))
          <div class="alert alert-info">
            {{ session()->get('info') }}
          </div>   
          @endif


  
    <!-- Main wrapper  -->
    <div id="main-wrapper">
      
        <!-- Page wrapper  -->
       
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-body">
                        <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Admin</h3> </div>
                <div class="col-md-7 align-self-center">
                   
                </div>
            </div>
                               
                                
                             
                                <div class="table-responsive m-t-40">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="99% ">
                                       <thead>
                                            <tr>
                                                <th>NomAdmin</th>
                                                <th>Email</th>
                                                <th>created_at</th>
                                                <th>updated_at</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        @if($admins)
                                        @foreach($admins as $categorie)
                                         <tr>
                                                <td>{{ $categorie->username }}</td>
                                                <td>{{ $categorie->email }}</td>
                                                <td>{{ $categorie->created_at }}</td>
                                                <td>{{ $categorie->updated_at }}</td>
                                                
                                                
                                                <td >
                                                   
                                            
                                                    <form id="delete" class="row" method="POST"  action="{{ route('compteadmin.destroy', ['id' => $categorie->id]) }}">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}        
                                                            <button  class="btn btn-danger btn-rounded m-b-10 m-l-5"  onclick="Delete()" >
                                                                <span class="fa fa-trash" > </span>
                                                            </button>
                                                             <a  href="{{ url('/system-management/compteadmin/'.$categorie->id.'/edit')}}" class="btn btn-warning btn-rounded m-b-10 m-l-5"> 
                                                            <i class="fa fa-pencil"></i></a>
                                                     </form>    
                                                </td>                                           
                                         </tr>
                                         @endforeach
                                         @endif            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
        
        </div>
        <!-- End Page wrapper  -->
    </div>

                            
                </div>

 </div>
@endsection
 