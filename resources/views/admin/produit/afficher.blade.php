
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
                               
                                
                             
                                <div class="table-responsive m-t-40">
                                <table class="table">
             
             <tbody>
          @if($produit)
               <tr>
                 <td >Nom_Produit : </td>  
                 <td >{{ $produit->NomProduit }}</td>
                 <td  colspan = "6" rowspan="10">                  
                   <div class="img-magnifier-container">
                       <img id="myimage" src="{{ asset('storage/'.$produit->Image) }}" width="650" height="400">
                     </div>
                  </td>
               </tr>
             >
                 <tr>
                     <td >Evenement : </td>  
                     <td>{{ $produit->GetEvenement->typeevent}}</td>
                     <td></td>

              </tr> 
             
              <tr>
                     <td >Categorie : </td>  
                     <td>{{ $produit->GetCategorie->libelle}}</td>
                     <td></td>

              </tr>    
              <tr>
                     <td >Prix : </td>  
                     <td>{{ $produit->Prix }}</td>
                     <td></td>

              </tr>   
              <tr>
                     <td >Quantite : </td>  
                     <td>{{ $produit->Quantite }}</td>
                     <td></td>

              </tr>    
              
              <tr>
                     <td >Created At : </td>  
                     <td>{{$produit->created_at}}</td>
                     <td></td>

              </tr>   
              <tr>
                     <td >Updated At : </td>  
                     <td>{{$produit->updated_at}}</td>
                     <td></td>
              </tr>   
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
 
<style>
    * {box-sizing: border-box;}
    .img-magnifier-container {
      position:relative;
    }
    .img-magnifier-glass {
      position: absolute;
      border: 3px solid #000;
      border-radius: 50%;
      cursor: none;
      /*Set the size of the magnifier glass:*/
      width: 100px;
      height: 100px;
    }
    </style>
    <script>
    function magnify(imgID, zoom) {
      var img, glass, w, h, bw;
      img = document.getElementById(imgID);
      /*create magnifier glass:*/
      glass = document.createElement("DIV");
      glass.setAttribute("class", "img-magnifier-glass");
      /*insert magnifier glass:*/
      img.parentElement.insertBefore(glass, img);
      /*set background properties for the magnifier glass:*/
      glass.style.backgroundImage = "url('" + img.src + "')";
      glass.style.backgroundRepeat = "no-repeat";
      glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
      bw = 3;
      w = glass.offsetWidth / 2;
      h = glass.offsetHeight / 2;
      /*execute a function when someone moves the magnifier glass over the image:*/
      glass.addEventListener("mousemove", moveMagnifier);
      img.addEventListener("mousemove", moveMagnifier);
      /*and also for touch screens:*/
      glass.addEventListener("touchmove", moveMagnifier);
      img.addEventListener("touchmove", moveMagnifier);
      function moveMagnifier(e) {
        var pos, x, y;
        /*prevent any other actions that may occur when moving over the image*/
        e.preventDefault();
        /*get the cursor's x and y positions:*/
        pos = getCursorPos(e);
        x = pos.x;
        y = pos.y;
        /*prevent the magnifier glass from being positioned outside the image:*/
        if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
        if (x < w / zoom) {x = w / zoom;}
        if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
        if (y < h / zoom) {y = h / zoom;}
        /*set the position of the magnifier glass:*/
        glass.style.left = (x - w) + "px";
        glass.style.top = (y - h) + "px";
        /*display what the magnifier glass "sees":*/
        glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
      }
      function getCursorPos(e) {
        var a, x = 0, y = 0;
        e = e || window.event;
        /*get the x and y positions of the image:*/
        a = img.getBoundingClientRect();
        /*calculate the cursor's x and y coordinates, relative to the image:*/
        x = e.pageX - a.left;
        y = e.pageY - a.top;
        /*consider any page scrolling:*/
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;
        return {x : x, y : y};
      }
    }
    </script>
    
<script>
    /* Initiate Magnify Function
    with the id of the image, and the strength of the magnifier glass:*/
    magnify("myimage", 3);
    </script>
@endsection
 