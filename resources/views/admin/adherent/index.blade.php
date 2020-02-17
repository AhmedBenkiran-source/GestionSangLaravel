
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
                    <h3 class="text-primary">Adherents</h3> </div>
                <div class="col-md-7 align-self-center">
                   
                </div>
            </div>
                                <div class="pull-right">
                                    <a href="{{ url('/system-management/adherente/create') }}" class="btn btn-info  fa fa-plus-circle"> <span>Ajouter Adherents</span></a>
                                </div>
                                
                             
                                <div class="table-responsive m-t-40">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="99% ">
                                       <thead>
                                            <tr>
                                                <th>IdRencontre</th>
                                                <th>Nom</th>
                                                <th>E-Mail</th>
                                                <th>N° télé</th>
                                                <th>Date_Creation</th>
                                                <th>Date_Modification</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        @if($all)
                                        @foreach($all as $fournisseur)
                                         <tr>
                                                <td>{{ $fournisseur->id }}</td>
                                                <td>{{ $fournisseur->NomAdherents }}</td>
                                                <td>{{ $fournisseur->Numerotelephone }}</td>
                                                <td>{{ $fournisseur->Email }}</td>
                                                <td>{{ $fournisseur->created_at }}</td>
                                                <td>{{ $fournisseur->updated_at }}</td>
                                                
                                                <td >
                                                   
                                            
                                                    <form id="delete" class="row" method="POST"  action="{{ route('adherente.destroy', ['id' => $fournisseur->id]) }}">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}        
                                                            <button  class="btn btn-danger btn-rounded m-b-10 m-l-5"  onclick="Delete()" >
                                                                <span class="fa fa-trash" > </span>
                                                            </button>
                                                             <a  href="{{ url('/system-management/adherente/'.$fournisseur->id.'/edit')}}" class="btn btn-warning btn-rounded m-b-10 m-l-5"> 
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
 