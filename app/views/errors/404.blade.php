@extends ('layouts.principal')

@section('encabezado')
    <div class="full_page_photo" style="background-image: url({{url('images/404.jpg')}});">
        <div class="hgroup">
            <div class="hgroup_title animated bounceInUp">
                <div class="container">
                    <h1><strong>Error 404</strong></h1>
                </div>
            </div>
            <div class="hgroup_subtitle animated bounceInUp skincolored">
                <div class="container">
                    <p>La p&aacute;gina solicitada no existe.</p>
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
    <section class="call_to_action four-o-four">
        <div class="container"> <i class="fa fa-ambulance"></i>
            <h3>Revisa la URL y vuelve a intentarlo</h3>
        </div>
    </section>
@stop