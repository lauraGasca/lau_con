@section('convocatorias')
      class="active"
@stop

@section('encabezado')
    <div class="full_page_photo" style="background-image: url({{url('images/portfolio/p3.jpg')}});"> </div>
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
                @if($convocatoria==1)
                    Programa de Est&iacute;mulos a la Innovaci&oacute;n (PEI)
                    <small><i class="fa-time"></i> Innovaci&oacute;n y Desarrollo Tecnol&oacute;gico</small>
                @endif
                @if($convocatoria==2)
                    INADEM
                    <small><i class="fa-time"></i> Productivos</small>
                @endif
                @if($convocatoria==3)
                    Fondo de Innovaci&oacute;n Tecnol&oacute;gica del Estado de Guanajuato
                    <small><i class="fa-time"></i> Innovaci&oacute;n y Desarrollo Tecnol&oacute;gico</small>
                @endif
                @if($convocatoria==4)
                    Convocatoria de Bonos para la transferencia y comercializaci&oacute;n del conocimiento (Finnova OTT)
                        <small><i class="fa-time"></i> Innovaci&oacute;n y Desarrollo Tecnol&oacute;gico</small>
                @endif
                @if($convocatoria==5)
                    CDTI-CONACYT 2015
                    <small><i class="fa-time"></i> Innovaci&oacute;n y Desarrollo Tecnol&oacute;gico</small>
                @endif
                @if($convocatoria==6)
                    Fondo de Innovaci&oacute;n Tecnol&oacute;gica (FIT)
                    <small><i class="fa-time"></i> Innovaci&oacute;n y Desarrollo Tecnol&oacute;gico</small>
                @endif
                @if($convocatoria==7)
                    CONACYT-SENER-SUSTENTABILIDAD ENERG&Eacute;TICA-2013-05<br/>
                    Laboratorio de innovaci&oacute;n en sustentabilidad energ&eacute;tica
                    <small><i class="fa-time"></i> Impacto Ambiental</small>
                @endif
                @if($convocatoria==8)
                    Programa para el Desarrollo Tecnol&oacute;gico de la Industria (Prodiat)
                    <small><i class="fa-time"></i> Productivos</small>
                @endif
            </h2>
            <div class="row">
                <div id="leftcol" class="col-sm-11 col-md-11">
                    <article class="post">
                        <div class="post_content" style="font-size: large;">
                            @if($convocatoria==1)
                                <p>Programa de Est&iacute;mulos a la Innovaci&oacute;n 2015, que cerr&oacute; en Noviembre 2015.</p>

                                <p>Dichos proyectos se ejecutan en el a&ntilde;o fiscal 2015.</p>
                                <br/>
                                <p>Dirigido a empresas mexicanas inscritas en el Registro Nacional de Instituciones y Empresas Cient&iacute;ficas y Tecnol&oacute;gicas <strong>(RENIECYT)</strong>,
                                que realicen actividades de Investigaci&oacute;n, Desarrollo Tecnol&oacute;gico e Innovaci&oacute;n <strong>(IDTI)</strong> en
                                el pa&iacute;s, de manera individual o en vinculaci&oacute;n con Instituciones de Educaci&oacute;n Superior
                                p&uacute;blicas o privadas nacionales <strong>(IES)</strong> y/o Centros e Institutos de Investigaci&oacute;n p&uacute;blicos
                                nacionales <strong>(CI)</strong>.</p>

                            @endif
                            @if($convocatoria==2)
                                <p><strong>INADEM</strong> (Instituto Nacional del Emprendedor). Convocatoria 1.1.</p>
                                <br/>
                                <p>Dirigido a empresas peque&ntilde;as, medianas que quieran incorporarse a cadenas productivas, y empresas grandes
                                que quieran desarrollar a varios de sus proveedores.</p>
                            @endif
                            @if($convocatoria==3)
                                <p>"Fondo de Innovaci&oacute;n Tecnol&oacute;gica del Estado de Guanajuato" <strong>(FINNOVATEG)</strong>, propuestas de
                                Innovaci&oacute;n y Desarrollo Tecnol&oacute;gico que permitan la vinculaci&oacute;n con el sector productivo del
                                Estado, logrando incrementar la competitividad de las empresas Guanajuatenses, que:</p>
                                <br/>
                                <p><strong>I. </strong> Genere o mejore significativamente un producto, proceso y/o servicio susceptible de llegar al mercado</p>
                                <br/>
                                <p><strong>II.</strong> Fortalezca la vinculaci&oacute;n entre el sector acad&eacute;mico y productivo.</p>

                                @endif
                            @if($convocatoria==4)
                                <p>Dirigida a Las Oficinas de Transferencia de Conocimiento <strong>(OT)</strong> certificadas por el <strong>FINNOVA</strong>.</p>
                                <br/>
                                <p>Impulsar la innovaci&oacute;n y vinculaci&oacute;n entre las instituciones generadores de conocimiento y empresas.</p>
                            @endif
                            @if($convocatoria==5)
                                <p>Dirigido a las empresas con <strong>Reniecyt</strong>, que presenten propuestas en
                                conjunto con empresas espa&ntilde;olas como contraparte en proyectos de innovaci&oacute;n.</p>
                                <br/>
                                <p><strong>Fondo Internacional Bilateral</strong>.</p>
                            @endif
                            @if($convocatoria==6)
                                <p>Dirigido a proyectos que van desde la elaboraci&oacute;n del plan de negocios, dise&ntilde;o de un prototipo,
                                la elaboraci&oacute;n del prototipo mismo, su mejora y todos los estudios relacionados.</p>
                                <br/>
                                <p>Dirigido a las Instituciones de Educaci&oacute;n Superior y Centros de Investigaci&oacute;n del Estado
                                Guanajuato.</p>
                            @endif
                            @if($convocatoria==7)
                                <p>Proyectos de innovaci&oacute;n que involucren actividades de investigaci&oacute;n cient&iacute;fica y tecnol&oacute;gica
                                aplicada, adopci&oacute;n, asimilaci&oacute;n y desarrollo tecnol&oacute;gico, enfocados en brindar soluciones
                                cient&iacute;ficas y tecnol&oacute;gicas para atender los retos, necesidades y oportunidades con que cuenta el
                                sector en temas de eficiencia energ&eacute;tica, energ&iacute;as renovables, uso de tecnolog&iacute;as limpias y
                                diversificaci&oacute;n de fuentes primarias de energ&iacute;a.</p>
                                <br/>
                                <p>Dirigido a las Instituciones de Educaci&oacute;n Superior <strong>(IES)</strong> y Centros e Institutos de Investigaci&oacute;n <strong>(CI)</strong>
                                p&uacute;blicos y privados del pa&iacute;s inscritos en el Registro Nacional de Instituciones y Empresas
                                Cient&iacute;ficas y Tecnol&oacute;gicas <strong>(RENIECYT)</strong>.</p>
                            @endif
                            @if($convocatoria==8)
                                <p>Programa para el Desarrollo Tecnol&oacute;gico de la Industria <strong>(PRODIAT)</strong> tiene como
                                objetivo general contribuir a resolver las fallas de mercado que enfrentan las
                                industrias de alta Tecnolog&iacute;a, a fin de incentivar su participaci&oacute;n en actividades de
                                mayor valor agregado por medio del otorgamiento de apoyos de car&aacute;cter temporal para
                                la realizaci&oacute;n de proyectos que a tiendan dichas fallas de mercado.</p>
                            @endif
                        </div>
                        <br><br>
                        <div id="leftcol" class="col-sm-6 col-md-6">
                            {{link_to('contacto', 'Contactar', array('class'=>"btn btn-danger center-block "))}}
                        </div><br><br>
                    </article>

                </div>
                <!--<div id="sidebar" class="col-sm-4 col-md-4">
                    <aside class="widget">
                        <h4>Text Widget</h4>
                        <p>Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens etrsaters tum aecenas faucib sadips amets.</p>
                    </aside>
                    <aside class="widget">
                         <h4>Tabs</h4>
                         <ul class="nav nav-tabs" id="myTab">
                              <li class="active"><a data-toggle="tab" href="#recent">Recent</a></li>
                              <li class=""><a data-toggle="tab" href="#tags">Tags</a></li>
                         </ul>
                         <div class="tab-content" id="myTabContent">
                              <div id="recent" class="tab-pane fade active in">
                                   <ul class="media-list">
                                        <li class="media"> <a href="#" class="media-photo" style="background-image:url(images/portfolio/t5.jpg)"></a> <a href="#" class="media-date">19<span>FEB</span></a>
                                             <h5 class="media-heading"><a href="#">Media heading, this is a title of a news...</a></h5>
                                             <p>Fugiat dapibus, tellus ac cursus commodo, ut fermentum...</p>
                                        </li>
                                        <li class="media"> <a href="#" class="media-photo" style="background-image:url(images/portfolio/t4.jpg)"></a> <a href="#" class="media-date">18<span>FEB</span></a>
                                             <h5 class="media-heading"><a href="#">Media heading, of a news item.</a></h5>
                                             <p>Fugiat dapibus, tellus ac cursus commodo, condime ntum nibh, ut fermentum...</p>
                                        </li>
                                        <li class="media"> <a href="#" class="media-photo" style="background-image:url(images/portfolio/t5.jpg)"></a> <a href="#" class="media-date">17<span>FEB</span></a>
                                             <h5 class="media-heading"><a href="#">Media heading, this is a title of a news...</a></h5>
                                             <p>Fugiat dapibus, tellus ac cursus commodo, ut fermentum...</p>
                                        </li>
                                        <li class="media"> <a href="#" class="media-photo" style="background-image:url(images/portfolio/t4.jpg)"></a> <a href="#" class="media-date">16<span>FEB</span></a>
                                             <h5 class="media-heading"><a href="#">Media heading, of a news item.</a></h5>
                                             <p>Fugiat dapibus, tellus ac cursus commodo, condime ntum nibh, ut fermentum...</p>
                                        </li>
                                   </ul>
                              </div>
                              <div id="tags" class="tab-pane fade"> <a class="label label-default">Default</a> <a class="label label-primary">Primary</a> <a class="label label-success">Success</a> <a class="label label-warning">Warning</a> <a class="label label-danger">Danger</a> <a class="label label-info">Info</a> <a class="label label-default">Default</a> <a class="label label-success">Success</a> <a class="label label-danger">Danger</a> <a class="label label-info">Info</a> <a class="label label-default">Default</a> <a class="label label-success">Success</a> <a class="label label-success">Success</a> <a class="label label-warning">Warning</a> <a class="label label-danger">Danger</a> <a class="label label-warning">Warning</a> <a class="label label-warning">Warning</a> <a class="label label-danger">Danger</a> <a class="label label-info">Info</a> <a class="label label-inverse">Inverse</a> </div>
                         </div>
                    </aside>
                </div>-->
            </div>
        </div>
    </section>
@stop