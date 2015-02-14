@section('inicio')
      class="active"
@stop

@section('encabezado')
    <section id="slider_wrapper" class="slider_wrapper full_page_photo">
        <div id="main_flexslider" class="flexslider">
            <ul class="slides">
                <li class="item" style="background-image: url({{url('images/1.jpg')}})">
                    <div class="container">
                        <div class="carousel-caption animated bounceInUp">
                            <h1>"Las empresas no surguen con la generaci&oacute;n de buenas ideas, si no con la gesti&oacute;n de ellas"</h1>
                            <!--<p class="lead skincolored"></p>-->
                        </div>
                    </div>
                </li>
                <li class="item" style="background-image: url({{url('images/2.jpg')}})">
                    <div class="container">
                        <div class="carousel-caption animated bounceInUp">
                            <h1>Soluci&oacute;n en Gesti&oacute; de Fonfos de Innovaci&oacute; y Dessarrollo Tecnol&oacute;gico Productivos y de Impacto Ambiental</h1>
                            <!--<p class="lead skincolored"></p>-->
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@stop

@section('contenido')
    <div class="container triangles-of-section">
        <div class="triangle-up-left"></div>
        <div class="square-left"></div>
        <div class="triangle-up-right"></div>
        <div class="square-right"></div>
    </div>
    <section class="features_teasers_wrapper">
        <div class="container">
            <div class="row">
                <div class="feature_teaser col-sm-4 col-md-4">
                    <img alt="responsive" src="{{url('images/phone-v2.png')}}">
                    <h3 style="height: 50px;">El consorcio del Conocimiento</h3>
                    {{link_to('nosotros', 'Nosotros', array('class'=>"btn btn-danger center-block "))}}
                </div>

                <div class="feature_teaser col-sm-4 col-md-4">
                    <img alt="responsive" src="{{url('images/lib-v2.png')}}">
                    <h3 style="height: 50px;">Nuestra especialidad</h3>
                    {{link_to('servicios', 'Servicios', array('class'=>"btn btn-danger center-block "))}}
                </div>
                <div class="feature_teaser col-sm-4 col-md-4">
                    <img alt="responsive" src="{{url('images/rocket_trans-v2.png')}}">
                    <h3 style="height: 50px;">Convocatorias</h3>
                    {{link_to('convocatorias', 'Convocatorias', array('class'=>"btn btn-danger center-block "))}}
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio_teasers_wrapper">
        <div class="clients_section wow fadeInUp">
            <div class="container">
                <h2 class="section_header fancy centered">Alianzas Estrat&eacute;gicas
                    <small>Contamos con alianzas estrat&eacute;gicas para la cooperaci&oacute;n mutua en temas de innovaci&oacute;n y transferencia de Tecnolog&iacute;a.</small></h2>
                <div class="clients_list">
                    <a href="#"><img src="{{url('images/portfolio/logo_tecno.png')}}" alt="client" height="120px"></a>
                    <a href="#"><img src="{{url('images/portfolio/uniguanajuato.jpg')}}" alt="client" height="120px"></a>
                    <a href="#"><img src="{{url('images/portfolio/caname.jpg')}}" alt="client" height="120px"></a>
                    <a href="#"><img src="{{url('images/portfolio/crode.jpg')}}" alt="client" height="120px"></a>
                    <a href="#"><img src="{{url('images/portfolio/logo_inifap_uruapan.gif')}}" alt="client" height="120px"></a>
                    <a href="#"><img src="{{url('images/portfolio/IAT.jpg')}}" alt="client" height="120px"></a>
                    <a href="#"><img src="{{url('images/portfolio/incuba.png')}}" alt="client" height="120px"></a>
                    <a href="#"><img src="{{url('images/portfolio/SSc.png')}}" alt="client" height="120px"></a>
                    <a href="#"><img src="{{url('images/portfolio/anpic.jpeg')}}" alt="client" height="120px"></a>
                </div>
            </div>
        </div><br/>
        <div class="clients_section wow fadeInUp">
            <div class="container">
                <h2 class="section_header fancy centered">Fondos o Instituciones con quienes trabajamos</h2>
                <div class="clients_list">
                    <a href="#"><img src="{{url('images/clients/concyteg.gif')}}" alt="client" height="60px"></a>
                    <a href="#"><img src="{{url('images/clients/logo_conacyt.png')}}" alt="client" height="60px"></a>
                    <a href="#"><img src="{{url('images/clients/cdti-logo.png')}}" alt="client" height="60px"></a>
                    <a href="#"><img src="{{url('images/clients/logoSE_hoz.png')}}" alt="client" height="60px"></a>
                    <a href="#"><img src="{{url('images/clients/inadem_campamento.png')}}" alt="client" height="60px"></a>
                </div>
            </div>
        </div>
    </section>
@stop