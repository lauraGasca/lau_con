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
                            <h1>{{$frases[0]->frase}}</h1>
                            <p class="lead skincolored" style="background-color: rgba(66, 139, 202, 0);"></p>
                        </div>
                    </div>
                </li>
                <li class="item" style="background-image: url({{url('images/2.png')}})">
                    <div class="container">
                        <div class="carousel-caption animated bounceInUp">
                            <h1>{{$frases[1]->frase}}</h1>
                            <p class="lead skincolored" style="background-color: rgba(66, 139, 202, 0);"></p>
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
                    <a target="_blank"  href="http://www.caname.org.mx/">{{ HTML::image('images/portfolio/caname.png', 'Caname', ['height'=>"120px"]) }}</a>
                    <a target="_blank"  href="http://www.celayasalvatierra.ugto.mx/">{{ HTML::image('images/portfolio/Universidad de Guanajuato Celaya- Salvatierra.png', 'Universidad de Guanajuato', ['height'=>"120px"]) }}</a>
                    <a target="_blank"  href="http://www.upgto.edu.mx/">{{ HTML::image('images/portfolio/Universidad Politécnica de Guanajuato.png', 'Universidad Politécnica de Guanajuato', ['height'=>"70px"]) }}</a>
                    <a target="_blank"  href="http://www.upjr.edu.mx/">{{ HTML::image('images/portfolio/Universidad Politécnica de Juventino Rosas.png', 'Universidad Politécnica de Juventino Rosas', ['height'=>"120px"]) }}</a>
                    <a target="_blank"  href="http://itcelaya.edu.mx/">{{ HTML::image('images/portfolio/logo_tecno.png', 'ITC', ['height'=>"120px"]) }}</a>
                    <a target="_blank"  href="http://www.ptsanmiguelense.com/2014/">{{ HTML::image('images/portfolio/Parque Tecnológico Sanmiguelense.png', 'Parque Tecnológico Sanmiguelense', ['height'=>"120px"]) }}</a>
                    <a target="_blank"  href="http://www.inifap.gob.mx/SitePages/default.aspx">{{ HTML::image('images/portfolio/inifap.png', 'Inifap', ['height'=>"120px"]) }}</a>
                    <a target="_blank"  href="http://www.cicata.ipn.mx/Paginas/Inicio.aspx">{{ HTML::image('images/portfolio/Cicata.png', 'Cicata', ['height'=>"120px"]) }}</a>
                    <a target="_blank"  href="http://www.anpic.com/sitio/esp/index.php">{{ HTML::image('images/portfolio/Anpic.png', 'Anpic', ['height'=>"120px"]) }}</a>
                    <a target="_blank"  href="http://www.crodecelaya.edu.mx/">{{ HTML::image('images/portfolio/Crode2.png', 'CRODE', ['height'=>"120px"]) }}</a>
                </div>
            </div>
        </div><br/>
        <div class="clients_section wow fadeInUp">
            <div class="container">
                <h2 class="section_header fancy centered">Fondos o Instituciones con quienes trabajamos</h2>
                <div class="clients_list">
                    <a target="_blank"  href="http://concyteg.gob.mx/">{{ HTML::image('images/clients/concyteg.gif', 'concyteg', ['height'=>"80px"]) }}</a>
                    <a target="_blank"  href="http://www.conacyt.mx/">{{ HTML::image('images/clients/logo_conacyt.png', 'conacyt', ['height'=>"80px"]) }}</a>
                    <a target="_blank"  href="https://www.cdti.es/">{{ HTML::image('images/clients/cdti-logo.png', 'cdti', ['height'=>"80px"]) }}</a>
                    <a target="_blank"  href="http://www.economia.gob.mx/">{{ HTML::image('images/clients/logoSE_hoz.png', 'Secretaria de Economia', ['height'=>"80px"]) }}</a>
                    <a target="_blank"  href="https://www.inadem.gob.mx/">{{ HTML::image('images/clients/inadem_campamento2.png', 'Caname', ['height'=>"80px"]) }}</a>
                </div>
            </div>
        </div>
    </section>
@stop