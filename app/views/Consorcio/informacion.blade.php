@section('glosario')
    class="active"
@stop

@section('encabezado')
    <div class="full_page_photo no_photo">
        <div class="container">
            <div class="hgroup">
                <div class="hgroup_title animated bounceInUp skincolored">
                    <div class="container">
                        <h1>Proceso para obtenci&oacute;n de Recursos Econ&oacute;micos</h1>
                    </div>
                </div>
                <div class="hgroup_subtitle animated bounceInUp ">
                    <div class="container">
                        <p>Actividades para la gesti&oacute;n de tu proyecto</p>
                    </div>
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
    <section class="with_right_sidebar">
        <div class="container">
            <div class="row">
                <div id="leftcol" class="col-sm-11 col-md-11" style="font-size: 25px;">
                    <div class="col-sm-11 col-md-11">
                        <div class="col-sm-4 col-md-4">
                            <div class="btn-group">
                                <a href="{{url('/')}}" class="btn btn btn-info"><i class="fa fa-mail-reply"></i> Regresar a la p&aacute;gina principal</a>
                            </div>
                        </div>
                    </div><br/><br/><br/>
                    <section class="features_teasers_wrapper" style="padding: 0">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-2 col-md-2"></div>
                                <div class="col-sm-3 col-md-3" style="text-align: center">
                                    <a href="#idea" style="color: rgb(90, 90, 90);"><img alt="responsive" src="{{url('images/phone-v2.png')}}">
                                    <h3 style="height: 50px;">Idea o proyecto</h3></a>
                                </div>
                                <div class="col-sm-2 col-md-2" style="text-align: center; padding-top: 35px;">
                                    <img alt="responsive" src="{{url('images/Flecha_tesela.png')}}">
                                </div>
                                <div class="col-sm-3 col-md-3" style="text-align: center">
                                    <a href="#eleccion" style="color: rgb(90, 90, 90);"><img alt="responsive" src="{{url('images/rocket_trans-v2.png')}}">
                                    <h3 style="height: 50px;">Elecci&oacute;n de Fondo</h3></a>
                                </div>
                                <div class="col-sm-2 col-md-2" style="text-align: center; padding-top: 60px;">
                                    <img alt="responsive" src="{{url('images/fecha3.png')}}" style="width: 70px;">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="features_teasers_wrapper" style="padding: 0">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 col-md-4" style="text-align: left">
                                    <a href="#seguimiento" style="color: rgb(90, 90, 90);"><img alt="responsive" src="{{url('images/phone-v2.png')}}">
                                    <h3 style="height: 50px;">Seguimiento del Proyecto</h3></a>
                                </div>
                                <div class="col-sm-4 col-md-4" style="text-align: center; padding-top: 40px;">
                                    <a href="{{url('contacto')}}" class="btn btn-primary">Comienza tu proyecto Aqu&iacute;</a>
                                </div>
                                <div class="col-sm-4 col-md-4" style="text-align: right">
                                    <a href="#vinculacion" style="color: rgb(90, 90, 90);"><img alt="responsive" src="{{url('images/phone-v2.png')}}">
                                    <h3 style="height: 50px;">Vinculaci&oacute;n</h3></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="features_teasers_wrapper" style="padding: 0">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-2 col-md-2" style="text-align: center; ">
                                    <img alt="responsive" src="{{url('images/fecha5.png')}}" style="width: 70px;"/>
                                </div>
                                <div class="col-sm-3 col-md-3" style="text-align: center">
                                    <a href="#gestion" style="color: rgb(90, 90, 90);"><img alt="responsive" src="{{url('images/phone-v2.png')}}">
                                    <h3 style="height: 50px;">Gesti&oacute;n del Proyecto</h3></a>
                                </div>

                                <div class="col-sm-2 col-md-2" style="text-align: center; padding-top: 35px;">
                                    <img alt="responsive" src="{{url('images/Flecha_tesela2.png')}}">
                                </div>

                                <div class="col-sm-3 col-md-3" style="text-align: center">
                                    <a href="#solicitud" style="color: rgb(90, 90, 90);"><img alt="responsive" src="{{url('images/rocket_trans-v2.png')}}">
                                    <h3 style="height: 50px;">Solicitud de Informaci&oacute;n</h3></a>
                                </div>

                                <div class="col-sm-2 col-md-2" style="text-align: center; ">
                                    <img alt="responsive" src="{{url('images/fecha4.png')}}" style="width: 70px;"/>
                                </div>
                            </div>
                        </div>
                    </section>
                    <article class="post" id="idea" style="padding-top: 120px;">
                        <div class="post_header">
                            <h3 class="post_title"><a href="#">Idea o proyecto:</a></h3>
                        </div>
                        <div class="post_content">
                            <p align="justify">Todo proyecto comienza con una idea y/o necesidad que quieras atender en el mercado:
                                si ya tienes tu propuesta definida o solo tienes la idea, nosotros te ayudamos a
                                definir si  esta idea o propuesta puede ser sometida en alguna convocatoria para
                                solicitar recursos. Este an&aacute;lisis se hace en base a que nos  detalles si tú
                                propuesta o idea cuenta con mercado potencial, es una idea novedosa y otros elementos
                                que se consideran importantes para un proyecto. </p>
                        </div>
                    </article>
                    <article class="post" id="eleccion" style="padding-top: 120px;">
                        <div class="post_header">
                            <h3 class="post_title"><a href="#">Elecci&oacute;n de Fondo</a></h3>
                        </div>
                        <div class="post_content">
                            <p align="justify">Una vez definido el proyecto, evaluamos a cu&aacute;l de los fondos puede ser sometido
                                para concursar por un recurso econ&oacute;mico, que facilite llevar a cabo el proyecto
                                con los impactos y resultados deseados.</p>
                        </div>
                    </article>
                    <article class="post" id="vinculacion" style="padding-top: 120px;">
                        <div class="post_header" >
                            <h3 class="post_title"><a href="#">Vinculaci&oacute;n </a></h3>
                        </div>
                        <div class="post_content">
                            <p align="justify">Te ofrecemos opciones de vinculaci&oacute;n acad&eacute;mica para poder hacer que tu proyecto se fortalezca.</p>
                            <p align="justify">Vinculación acad&eacute;mica con el sector empresarial: Es la relaci&oacute;n de
                                intercambio y colaboraci&oacute;n entre las Instituciones de Educaci&oacute;n
                                Superior o los Centros de Investigaci&oacute;n con el sector productivo.
                                Tiene como objetivos: para las Instituciones de educaci&oacute;n Superior  y/o Centros
                                de Investigaci&oacute;n, avanzar en la investigaci&oacute;n, y aportar conocimiento a
                                la soluci&oacute;n de necesidades; para las empresas, innovar a trav&eacute;s de la
                                aplicaci&oacute;n novedosa del conocimiento que contribuya a su competitividad.</p>
                        </div>
                    </article>
                    <article class="post" id="solicitud" style="padding-top: 120px;">
                        <div class="post_header">
                            <h3 class="post_title"><a href="#">Solicitud de Informaci&oacute;n </a></h3>
                        </div>
                        <div class="post_content">
                            <p align="justify">En la parte del proceso para someter tu proyecto en algún fondo para solicitar recursos,
                                realizamos reuniones de trabajo para solicitarte m&aacute;s informaci&oacute;n
                                acerca de &eacute;ste, se realiza un cronograma de actividades y se especifican
                                responsabilidades, se firman acuerdos de confidencialidad en caso de ser necesario.</p>
                        </div>
                    </article>
                    <article class="post" id="gestion" style="padding-top: 120px;">
                        <div class="post_header">
                            <h3 class="post_title"><a href="#">Gesti&oacute;n de la proyecto</a></h3>
                        </div>
                        <div class="post_content">
                            <p align="justify">El Consorcio del Conocimiento, coordina y realiza las actividades necesarias para
                                elaborar los documentos normativos ante el fondo que se solicitar&aacute;n los recursos.
                                Esto con el fin de que el proyecto cumpla con todos los requerimientos y tenga mayor
                                oportunidad de obtener el apoyo por parte del fondo elegido.</p>
                        </div>
                    </article>
                    <article class="post" id="seguimiento" style="padding-top: 120px;">
                        <div class="post_header">
                            <h3 class="post_title"><a href="#">Seguimiento del proyecto</a></h3>
                        </div>
                        <div class="post_content">
                            <p align="justify">El Consorcio del Conocimiento durante la ejecuci&oacute;n del proyecto, te apoyar&aacute;
                                para el seguimiento administrativo del mismo, para que &eacute;ste llegue a un buen t&eacute;rmino.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@stop