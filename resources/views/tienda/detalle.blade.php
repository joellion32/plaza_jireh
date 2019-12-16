@extends('layouts.plantilla')

@section('contenido')
    
  <!--Main layout-->
  <main class="mt-5 pt-4">
        <div class="container dark-grey-text mt-5">
    
          <!--Grid row-->
          <div class="row wow fadeIn">
    
            <!--Grid column-->
            <div class="col-md-6 mb-4">
    
              <img style="width:500px;" src="{{$producto->imagen}}" class="img-fluid" alt="">
    
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-md-6 mb-4">
    
              <!--Content-->
              <div class="p-4">
    
                <div class="mb-3">
                  <a href="">
                    <span class="badge purple mr-1">{{$producto->categoria->nombre_categoria}}</span>
                  </a>
                  <a href="">
                    <span class="badge blue mr-1">Nuevo</span>
                  </a>
                </div>
    
                <p class="lead">
                  <span>$RD {{$producto->precio}}</span>
                </p>
    
                <p class="lead font-weight-bold">Descripcion</p>
    
                <p>{{$producto->descripcion}}</p>
    
                <form class="d-flex justify-content-left">
                  <!-- Default input -->
                  <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
                  <button class="btn btn-primary btn-md my-0 p" type="submit">Add to cart
                    <i class="fas fa-shopping-cart ml-1"></i>
                  </button>
    
                </form>
    
              </div>
              <!--Content-->
    
            </div>
            <!--Grid column-->
    
          </div>
          <!--Grid row-->
    
          <hr>
    
          <!--Grid row-->
          <div class="row d-flex justify-content-center wow fadeIn">
    
            <!--Grid column-->
            <div class="col-md-6 text-center">
    
              <h4 class="my-4 h4">Productos Relacionados</h4>
    
            </div>
            <!--Grid column-->
    
          </div>
          <!--Grid row-->
             <!--Grid row-->
             <div class="row wow fadeIn">
                    @foreach ($detalle as $item)

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">
            
                      <img src="{{$item->imagen}}" class="img-fluid" alt="">
            
                    </div>
                    <!--Grid column-->
                    @endforeach

                  </div>
                  <!--Grid row-->
            
                </div>
     
      </main>
      <!--Main layout-->
@endsection