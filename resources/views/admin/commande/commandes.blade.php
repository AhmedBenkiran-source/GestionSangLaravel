
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
                    <h3 class="text-primary">Commande</h3> </div>
                <div class="col-md-7 align-self-center">
                   
                </div>
            </div>
                                
                                <div class="table-responsive m-t-40">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="99% ">
                                       <thead>
                                            <tr>
                                                <th>Produit</th>
                                                <th>Quantite</th>
                                                <th>Prix</th>
                                                <th>Date commande</th>
                                                <th>Etat commande</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        @if($paniers)
           @foreach($paniers as $panier)
                @if($panier->id_user == Auth::user()->id && $panier->Statut == "Commande" )
                

                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="" width="100" height="100" class="img-responsive"/></div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{$panier->GetProduit->NomProduit}}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">{{$panier->Quantite}}</td>
                        <td data-th="Price">{{$panier->GetProduit->Prix *$panier->Quantite}}</td>
                        
                        <td data-th="Price">{{$panier->updated_at}}</td>

                        <td data-th="Quantity">{{$panier->Etat}}</td>
                       <td> 
                       <a href="{{ route('commande.show', ['id' => $panier->id]) }}"  class="btn btn-primary"> 
                                                             livree</a>
                         <a href="{{ route('commande.edit', ['id' => $panier->id]) }}"  class="btn btn-primary"> 
                                                                non livree</a>                                        
                                                      
                        </td>

                    </tr>
                   @endif   
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
 