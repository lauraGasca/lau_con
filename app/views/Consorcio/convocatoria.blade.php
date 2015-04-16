@section('convocatorias')
      class="active"
@stop

@section('encabezado')
    <div class="full_page_photo" style="background-image: url({{url('images/p3.jpg')}});"> </div>
@stop

@section('contenido')
    <div class="container triangles-of-section">
        <div class="triangle-up-left"></div>
        <div class="square-left"></div>
        <div class="triangle-up-right"></div>
        <div class="square-right"></div>
    </div>
    <section class="with_right_sidebar">
        <div class="container">
            <h2 class="section_header elegant">
                {{$convocatoria->nombre}}
            </h2>
            <div class="row">
                <div id="leftcol" class="col-sm-11 col-md-11">
                    <article class="post">
                        <div class="post_content" style="font-size: large;">
                            <h3>Convoca a:</h3>
                            {{$convocatoria->dirigido}}
                            <br/>
                            <h3>Con el objeto de:</h3>
                            {{$convocatoria->objetivo}}
                            <br/>
                            @foreach($convocatoria->archivos as $archivo)
                                <a href="{{url('images/convocatorias/'.$archivo->url)}}" target="_blank" style="color: rgb(0, 161, 27);">
                                    <i class="fa fa-download"> Ver {{$archivo->nombre}}</i>
                                </a><br/>
                            @endforeach
                        </div>
                        <br><br>
                        <div class="col-sm-6 col-md-4">
                            <div class="btn-group">
                                <a href="{{url('convocatorias')}}" class="btn btn btn-info"><i class="fa fa-mail-reply"></i> Regresar a Convocatorias</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5">
                            {{link_to('contacto', 'Contactar', array('class'=>"btn btn-danger center-block "))}}
                        </div><br><br>
                    </article>
                </div>
            </div>
        </div>
    </section>
@stop