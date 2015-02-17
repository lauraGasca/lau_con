@section('servicios')
      class="active"
@stop

@section('encabezado')
    <div class="full_page_photo" style="background-image: url({{url('images/services.jpg')}});">
        <div class="hgroup">
            <div class="hgroup_title animated bounceInUp">
                <div class="container">
                    <h1>Servicios</h1>
                </div>
            </div>
            <div class="hgroup_subtitle animated bounceInUp skincolored">
                <div class="container">
                    <p>Consulta nuestros servicios</p>
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
    <section class="horizontal_teaser">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 horizontal_teaser_left">
                    <h3>SERVICIOS</h3>
                    <p>Solución en Gestión de Fondos de Innovación y Desarrollo Tecnológico, Productivos y de Impacto Ambiental</p>
                </div>
                <div class="col-sm-12 col-md-8 horizontal_teaser_right">
                    <div class="twentytwenty-container">
                        {{ HTML::image('/images/img_after.jpg','Despues') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services_teasers dark_section">
        <div class="container triangles-of-section">
            <div class="triangle-up-left"></div>
            <div class="square-left"></div>
            <div class="triangle-up-right"></div>
            <div class="square-right"></div>
        </div>
        <div class="container">
             <h2 class="section_header fancy centered">Ofrecemos servicios<small>Que destacan por su calidad</small></h2>
             <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="service_teaser vertical">
                        <div class="service_photo">
                            <a target="_blank" href="{{url('servicio/1/gestion-proyectos')}}">
                                {{ HTML::image('images/servicios/1.png','Gestión de proyectos') }}
                            </a>
                        </div>
                        <div class="service_details">
                            <h2>{{ HTML::link('servicio/1/gestion-proyectos', 'Gestión de proyectos',['style'=>"color: #FFFFFF;", 'target'=>"_blank"]) }}</h2>
                            <p>Gestión de proyectos de innovación tecnológica en fondos y apoyos gubernamentales existentes a nivel estatal o federal</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="service_teaser vertical">
                        <div class="service_photo">
                            <a target="_blank" href="{{url('servicio/2/seguimiento-proyectos-aprobados')}}">
                                {{ HTML::image('images/servicios/2.png','Seguimiento de proyectos aprovados') }}
                            </a>
                        </div>
                        <div class="service_details">
                            <h2>{{ HTML::link('servicio/2/seguimiento-proyectos-aprobados', 'Seguimiento de proyectos aprovados',['style'=>"color: #FFFFFF;", 'target'=>"_blank"]) }}</h2>
                            <p>Seguimiento de proyectos aprobados en convocatorias en fondos y apoyos gubernamentales existentes a nivel estatal o federal</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="service_teaser vertical">
                        <div class="service_photo">
                            <a target="_blank" href="{{url('servicio/3/generacion-actualización-reniecyt')}}">
                                {{ HTML::image('images/servicios/3.png','Generación y actualización de RENIECYT') }}
                            </a>
                        </div>
                        <div class="service_details">
                            <h2>{{ HTML::link('servicio/3/generacion-actualización-reniecyt', 'Generación y actualización de RENIECYT',['style'=>"color: #FFFFFF;", 'target'=>"_blank"]) }}</h2>
                            <p>Generación y actualización de Registro Nacional de Instituciones y Empresas Científicas y Tecnológicas (RENIECYT).</p>
                        </div>
                    </div>
                </div>
             </div>
             <div class="row">
                  <div class="col-sm-4 col-md-4">
                       <div class="service_teaser vertical">
                            <div class="service_photo">
                                <a target="_blank" href="{{url('servicio/4/valoracion-evaluacion-I-D-I')}}">
                                    {{ HTML::image('images/servicios/4.png','Valoración y Evaluación de Proyectos I+D+I') }}
                                </a>
                            </div>
                            <div class="service_details">
                                <h2>{{ HTML::link('servicio/4/valoracion-evaluacion-I-D-I', 'Valoración y Evaluación de Proyectos I+D+I',['style'=>"color: #FFFFFF;", 'target'=>"_blank"]) }}</h2>
                            </div>
                       </div>
                  </div>
                  <div class="col-sm-4 col-md-4">
                       <div class="service_teaser vertical">
                            <div class="service_photo">
                                <a target="_blank" href="{{url('servicio/5/cierre-proyectos-I-D-I')}}">
                                    {{ HTML::image('images/servicios/5.png','Cierre de proyectos I+D+I') }}
                                </a>
                            </div>
                            <div class="service_details">
                                <h2>{{ HTML::link('servicio/5/cierre-proyectos-I-D-I', 'Cierre de proyectos I+D+I',['style'=>"color: #FFFFFF;", 'target'=>"_blank"]) }}</h2>
                            </div>
                       </div>
                  </div>
                  <div class="col-sm-4 col-md-4">
                       <div class="service_teaser vertical">
                            <div class="service_photo">
                                <a target="_blank" href="{{url('servicio/6/vinculacion-IES-CIs')}}">
                                    {{ HTML::image('images/servicios/6.png','Vinculación con IES/CIs') }}
                                </a>
                            </div>
                            <div class="service_details">
                                <h2>{{ HTML::link('servicio/6/vinculacion-IES-CIs', 'Vinculación con IES/CIs',['style'=>"color: #FFFFFF;", 'target'=>"_blank"]) }}</h2>
                                <p>Vinculación con Institución de Educación superior y Centros de Investigación (IES/CIs)
                                </p>
                            </div>
                       </div>
                  </div>
             </div>
        </div>
    </section>
@stop