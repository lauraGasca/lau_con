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
                 @foreach($servicios as $servicio)
                     <div class="col-sm-4 col-md-4" style="height: 400px;">
                         <div class="service_teaser vertical">
                             <div class="service_photo">
                                 <ahref="{{url('servicios/'.substr(strip_tags(trim(str_replace(' ', '-', $servicio->nombre), '-')), 0, 100).'/'.$servicio->id)}}">
                                     {{ HTML::image('images/servicios/'.$servicio->imagen, $servicio->nombre) }}
                                 </a>
                             </div>
                             <div class="service_details" >
                                 <h2 style="font-size: 20px;">{{ HTML::link('servicios/'.substr(strip_tags(trim(str_replace('/', '-',str_replace(' ', '-', $servicio->nombre)), '-')), 0, 100).'/'.$servicio->id, $servicio->nombre,['style'=>"color: #FFFFFF;"]) }}</h2>
                                 <p style="font-size: 15px;">{{$servicio->resumen}}</p>
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>
        </div>
    </section>
@stop