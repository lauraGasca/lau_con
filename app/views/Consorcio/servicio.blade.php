@section('servicios')
      class="active"
@stop

@section('encabezado')
    <div class="full_page_photo no_photo">
        <div class="hgroup">
            <div class="hgroup_title animated bounceInUp skincolored">
                <div class="container">
                    <h1 class="">{{$servicio->nombre}}</h1>
                </div>
            </div>
        </div>
    </div>
@stop

@section('contenido')
    <div class="container triangles-of-section">
        <div class="triangle-up-left"></div>
        <div class="square-left"></div>
        <div class="triangle-up-right"></div>
        <div class="square-right"></div>
    </div>
    <section class="portfolio_slider_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div class="portfolio_slider_wrapper">
                        <div class="flexslider" id="portfolio_slider">
                            <ul class="slides">
                                <li class="item" data-thumb="images/servicios/{{$servicio->imagen}}" style="background-image: url({{url('images/servicios/'.$servicio->imagen)}})">
                                    <div class="container">
                                        <div class="carousel-caption">
                                            <p class="lead"></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <h2 class="section_header">Acerca del Servicio</h2>
                    <div class="portfolio_details" style="font-size: large;">
                        <div align="justify">{{$servicio->descripcion}}</div><br/><br/><br/><br/>
                        {{link_to('contacto', 'Contactar', array('class'=>"btn btn-danger center-block "))}}<br/>
                        <div class="btn-group" style="width: 100%;" >
                            <a href="{{url('servicios')}}" style="width: 100%;" class="btn btn btn-info"><i class="fa fa-mail-reply"></i> Regresar a Servicios</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop