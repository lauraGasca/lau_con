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
                <li class="item" style="background-image: url({{url('images/3.jpg')}})">
                    <div class="container">
                        <div class="carousel-caption animated bounceInUp">
                            <h1>Utilizes subtle animations<br>
                                 to serve a <strong>minimal</strong> approach</h1>
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
                <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="{{url('images/phone-v2.png')}}">
                    <h3>El consorcio del Conocimiento</h3>
                    <!--<p>A multipurpose but mainly business oriented design, built to serve as a foundation for your web projects. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem.</p>-->
                </div>
                <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="{{url('images/lib-v2.png')}}">
                    <h3>Nuestra especialidad</h3>
                    <p>Solución en Gestión de Fondos de Innovación y Desarrollo Tecnológico, Productivos y de Impacto Ambiental</p>
                    {{link_to('servicios', 'Servicios', array('class'=>"btn btn-danger center-block "))}}
                </div>
                <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="{{url('images/rocket_trans-v2.png')}}">
                    <h3>Convocatorias</h3>
                    <!--<p>Cleanstart comes with a style.less file that tries to use all the power of {less} and bootstrap combined. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem.</p>-->
                    {{link_to('convocatorias', 'Convocatorias', array('class'=>"btn btn-danger center-block "))}}
                </div>
            </div>
        </div>
    </section>
    <section class="call_to_action dark_section">
        <div class="container">
            <h3>Proceso a seguir para la Gesti&oacute;n de Recursos Economicos para tus Proyectos</h3>
            <a class="btn btn-primary" href="{{url('informacion')}}">{laberinto, juego, didáctico }</a>
        </div>
    </section>
    <section class="portfolio_teasers_wrapper">
        <div class="container triangles-of-section">
            <div class="triangle-up-left"></div>
            <div class="square-left"></div>
            <div class="triangle-up-right"></div>
            <div class="square-right"></div>
        </div>
        <div class="container">
            <h2 class="section_header fancy centered">
                Alianzas Estrat&eacute;gicas
                <small>Contamos con alianzas estrat&eacute;gicas para la cooperaci&oacute;n mutua en temas de innovaci&oacute;n y transferencia de Tecnolog&iacute;a.</small></h2>
            <div class="portfolio_strict row">
                <div class="col-sm-4 col-md-4">
                    <div class="portfolio_item wow fadeInUp">
                        <a href="#">
                            <figure style="background-image:url({{url('images/portfolio/logo_tecno.png')}})">
                                <figcaption>
                                    <div class="portfolio_description">
                                        <h3>Instituto Tecnologico de Celaya</h3>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="portfolio_item wow fadeInUp">
                        <a href="portfolio_item.html">
                            <figure style="background-image:url({{url('images/portfolio/anpic.jpeg')}})">
                                <figcaption>
                                    <div class="portfolio_description">
                                        <h3>Asociación Nacional de proveedores de la industria del calzado</h3>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="portfolio_item wow fadeInUp">
                        <a href="portfolio_item.html">
                            <figure style="background-image:url({{url('images/portfolio/SSc.png')}})">
                                <figcaption>
                                    <div class="portfolio_description">
                                        <h3>Grupo SSC e Instituto Sanmiguelense Parque</h3>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="portfolio_item wow fadeInUp">
                        <a href="portfolio_item.html">
                            <figure style="background-image:url({{url('images/portfolio/incuba.png')}})">
                                <figcaption>
                                    <div class="portfolio_description">
                                        <h3>IncubaMás</h3>
                                        <!--<span class="cross"></span>
                                        <p>Design</p>-->
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="portfolio_item wow fadeInUp">
                        <a href="portfolio_item.html">
                            <figure style="background-image:url({{url('images/portfolio/IAT.jpg')}})">
                                <figcaption>
                                    <div class="portfolio_description">
                                        <h3>IAT Inovaci&oacute;n Tegnologica</h3>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="portfolio_item wow fadeInUp">
                        <a href="portfolio_item.html">
                            <figure style="background-image:url({{url('images/portfolio/logo_inifap_uruapan.gif')}})">
                                <figcaption>
                                    <div class="portfolio_description">
                                        <h3>Instituto Nacional de Investigaciones Forestales Agricolas y Pecuarias</h3>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="portfolio_item wow fadeInUp">
                        <a href="portfolio_item.html">
                            <figure style="background-image:url({{url('images/portfolio/crode.jpg')}})">
                                <figcaption>
                                    <div class="portfolio_description">
                                        <h3>CRODE Celaya</h3>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="portfolio_item wow fadeInUp">
                        <a href="portfolio_item.html">
                            <figure style="background-image:url({{url('images/portfolio/caname.jpg')}})">
                                <figcaption>
                                    <div class="portfolio_description">
                                        <h3>CANAME</h3>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="portfolio_item wow fadeInUp">
                        <a href="portfolio_item.html">
                            <figure style="background-image:url({{url('images/portfolio/uniguanajuato.jpg')}})">
                                <figcaption>
                                    <div class="portfolio_description">
                                        <h3>Universidad de Guanajuato</h3>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clients_section wow fadeInUp">
            <div class="container">
                <h2 class="section_header elegant centered">Fondos o Instituciones con quienes trabajamos</h2>
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