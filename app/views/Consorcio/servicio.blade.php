@section('servicios')
      class="active"
@stop

@section('encabezado')
    <div class="full_page_photo no_photo">
        <div class="hgroup">
            <div class="hgroup_title animated bounceInUp skincolored">
                <div class="container">
                    @if($servicio==1)
                        <h1 class="">Gestión de proyectos</h1>
                    @endif
                    @if($servicio==2)
                        <h1 class="">Seguimiento de proyectos aprovados</h1>
                    @endif
                    @if($servicio==3)
                        <h1 class="">Generación y actualización de RENIECYT</h1>
                    @endif
                    @if($servicio==4)
                        <h1 class="">Valoración y Evaluación de Proyectos I+D+I</h1>
                    @endif
                    @if($servicio==5)
                        <h1 class="">Cierre de proyectos I+D+I</h1>
                    @endif
                    @if($servicio==6)
                        <h1 class="">Vinculación con IES/CIs</h1>
                    @endif
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
                                <li class="item" data-thumb="images/portfolio/item/8.jpg" style="background-image: url({{url('images/portfolio/item/8.jpg')}})">
                                    <div class="container">
                                        <div class="carousel-caption">
                                            <p class="lead">optional description of the photo</p>
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
                        @if($servicio==1)
                            <p>Gestión de proyectos de innovación tecnológica en fondos y apoyos gubernamentales existentes a nivel estatal o federal</p>
                            <br/>
                            <p>Damos solución en Gestión de Fondos de Innovación y Desarrollo Tecnológico, Productivos y de Impacto Ambiental</p>
                        @endif
                        @if($servicio==2)
                            <p>Seguimiento de proyectos aprobados en convocatorias en fondos y apoyos gubernamentales existentes a nivel estatal o federal</p>
                            <br/>
                            <p>Nos especializamos en el seguimiento y asesoramiento, para la ejecución correcta de proyectos aprobados en
                                convocatorias de fondos y apoyos gubernamentales.</p>
                        @endif
                        @if($servicio==3)
                            <p>Generación y actualización de Registro Nacional de Instituciones y Empresas Científicas y Tecnológicas (RENIECYT).</p>
                            <br/>
                            <p>Realizamos el proceso para la generación y actualización del Registro Nacional de Instituciones y Empresas Científicas y
                                Tecnológicas (RENIECYT), requisito indispensable ante Concyteg y Conacyt para la participación en fondos y apoyos
                                para proyectos de Investigación, Desarrollo e Innovación. (I+D+I).</p>
                        @endif
                        @if($servicio==4)
                            <p>Valoración y Evaluación de Proyectos I+D+I</p>
                            <br/>
                            <p>Desarrollamos la valoración y evaluación técnica, financiera y comercial, en proyectos de Innovación y Desarrollo
                                Tecnológico, Productivos y de Impacto Ambiental.</p>
                        @endif
                        @if($servicio==5)
                            <p>Cierre de proyectos I+D+I</p>
                            <br/>
                            <p>Realizamos el proceso de cierre para proyectos aprobados en convocatorias de fondos y apoyos gubernamentales.</p>
                        @endif
                        @if($servicio==6)
                            <p>Vinculación con Institución de Educación superior y Centros de Investigación (IES/CIs)</p>
                            <br/>
                            <p>Realizamos el proceso de Vinculación entre Instituciones de Educación Superior y Centros de Investigación con
                                empresarios para el desarrollo de proyectos de Innovación y Desarrollo Tecnológico, Productivos y de Impacto
                                Ambiental.</p>
                        @endif
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        {{link_to('contacto', 'Contactar', array('class'=>"btn btn-danger center-block "))}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop