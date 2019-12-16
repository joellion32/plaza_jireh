@extends('layouts.plantilla')

@section('contenido')
    <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
    
      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('#'); height: 120%; background-repeat: no-repeat; background-size: cover;">
    
          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
    
            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-3">
                <strong>Plaza Jireh RD</strong>
              </h1>
    
              <p>
                <strong>Tu tienda segura y confiable</strong>
              </p>
    
              <p class="mb-4 d-none d-md-block">
                <strong>Aqui puedes encontrar articulos tecnologicos y para el hogar a un buen precio.</strong>
              </p>
    
            </div>
            <!-- Content -->
    
          </div>
          <!-- Mask & flexbox options-->
    
        </div>
      </div>
      <!--/First slide-->
    
      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%283%29.jpg'); height: 120%;">
    
          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
    
          <!-- Content -->
          <div class="text-center white-text mx-5 wow fadeIn">
            <h1 class="mb-3">
              <strong>Plaza Jireh RD</strong>
            </h1>
    
            <p>
              <strong>Tu tienda segura y confiable</strong>
            </p>
    
            <p class="mb-4 d-none d-md-block">
              <strong>Aqui puedes encontrar articulos tecnologicos y para el hogar a un buen precio.</strong>
            </p>
    
          </div>
          <!-- Content -->
    
          </div>
          <!-- Mask & flexbox options-->
    
        </div>
      </div>
      <!--/Second slide-->
    
      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%285%29.jpg'); background-repeat: no-repeat; background-size: cover; height: 120%">
    
          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
    
            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-3">
                <strong>Plaza Jireh RD</strong>
              </h1>
    
              <p>
                <strong>Tu tienda segura y confiable</strong>
              </p>
    
              <p class="mb-4 d-none d-md-block">
                <strong>Aqui puedes encontrar articulos tecnologicos y para el hogar a un buen precio.</strong>
              </p>
    
            </div>
            <!-- Content -->
    
          </div>
          <!-- Mask & flexbox options-->
    
        </div>
      </div>
      <!--/Third slide-->
    
    </div>
    <!--/.Slides-->
    
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
    
    </div>
    <!--/.Carousel Wrapper-->
    
    <!--Main layout-->
    <main>
    <div class="container" id="productos">
    
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color elegant-color-dark mt-3 mb-5">
    
        <!-- Navbar brand -->
        <span class="navbar-brand">Categorias:</span>
    
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
  
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Todas
                <span class="sr-only">(current)</span>
              </a>
            </li>
            @foreach ($categorias as $categoria)
            <li class="nav-item">
                <a class="nav-link" href="/categoria/{{$categoria->id}}">{{$categoria->nombre_categoria}}</a>
              </li>
            @endforeach
          </ul>
          <!-- Links -->

    

          <form method="GET" action="/" class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Buscar" name="name" aria-label="Search">
            </div>
          </form>
        </div>
        <!-- Collapsible content -->
    
      </nav>
      <!--/.Navbar-->
    
      <!--Section: Products v.3-->
      <section class="text-center mb-4">
    
        <!--Grid row-->
        <div class="row wow fadeIn">
    @foreach ($productos as $producto)
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">
    
            <!--Card-->
            <div class="card">
    
              <!--Card image-->
              <div class="view overlay">
                <img src="{{$producto->imagen}}" class="card-img-top"
                  alt="#">
                <a href="/producto_detalle/{{$producto->id}}">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->
    
              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">{{$producto->nombre_producto}}
                    </a>
                  </strong>
                </h5>
    
                <h4 class="font-weight-bold blue-text">
                  <strong>{{$producto->precio}}$</strong>
                </h4>
    
              </div>
              <!--Card content-->
    
            </div>
            <!--Card-->
    
          </div>
          <!--Grid column-->
          @endforeach
    
          
        </div>
        <!--Grid row-->
    
      </section>
      <!--Section: Products v.3-->
    
      <!--Pagination-->
      <nav class="d-flex justify-content-center wow fadeIn">
        {{ $productos->links() }}
      </nav>
      <!--Pagination-->
    
    </div>
    </main>
    <!--Main layout-->
@endsection