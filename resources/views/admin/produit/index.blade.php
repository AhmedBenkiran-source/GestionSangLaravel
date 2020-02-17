
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
                    <h3 class="text-primary">Produit</h3> </div>
                <div class="col-md-7 align-self-center">
                   
                </div>
            </div>
                                <div class="pull-right">
                                    <a href="{{ url('/system-management/produit/create') }}" class="btn btn-info  fa fa-plus-circle"> <span>Ajouter Nouveau Produit</span></a>
                                </div>
                                
                             
                                <div class="table-responsive m-t-40">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="99% ">
                                       <thead>
                                            <tr>
                                                <th>Nom_Produit</th>
                                                <th>Prix</th>
                                                <th>Quantite</th>
                                                <th>Categorie</th>
                                                <th>Evenement</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        @if($all)
                                        @foreach($all as $produit)
                                         <tr>
                                                <td>{{ $produit->NomProduit }}</td>
                                                <td>{{ $produit->Prix }}</td>
                                                <td>{{ $produit->Quantite }}</td>
                                                <td>{{ $produit->GetEvenement->typeevent}}</td>
                                                <td>{{ $produit->GetCategorie->libelle}}</td>
                                                
                                                <td >
                                                   
                                            
                                                    <form id="delete" class="row" method="POST"  action="{{ route('produit.destroy', ['id' => $produit->id]) }}">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}        
                                                            <button  class="btn btn-danger btn-rounded m-b-10 m-l-5"  onclick="Delete()" >
                                                                <span class="fa fa-trash" > </span>
                                                            </button>
                                                             <a  href="{{ route('produit.edit', ['id' => $produit->id]) }}" class="btn btn-warning btn-rounded m-b-10 m-l-5"> 
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
 