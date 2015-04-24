@section('nosotros')
      class="active"
@stop

@section('encabezado')
    <div class="full_page_photo" style="background-image: url({{url('images/about_us.jpg')}});">
        <div class="hgroup">
            <div class="hgroup_title animated bounceInUp">
                <div class="container">
                    <h1 class="">Nosotros</h1>
                </div>
            </div>
            <div class="hgroup_subtitle animated bounceInUp skincolored">
                <div class="container">
                    <p>Con&oacute;cenos m&aacute;s</p>
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
                <div class="col-sm-12 col-md-5 horizontal_teaser_left">
                    <h3>Nosotros</h3>
                    <p align="justify">Somos una Asociaci&oacute;n Civil comprometida en brindar soluciones
                        en gesti&oacute;n de fondos para proyectos de innovaci&oacute;n, desarrollo tecnol&oacute;gico,
                        productivos y de impacto ambiental para las empresas y personas físicas con
                        actividad empresarial.</p>
                    <p align="justify">El Consorcio del Conocimiento surge a mediados del 2009 con la clara misi&oacute;n
                        de propiciar una cultura de innovaci&oacute;n en nuestra sociedad, teniendo como
                        herramienta fundamental la vinculación entre las empresas y los Centros de
                        investigaci&oacute;n e Instituciones de Educaci&oacute;n Superior del Estado, como una plataforma
                        para la elaboraci&oacute;n de proyectos de innovaci&oacute;n, desarrollo tecnol&oacute;gico, productivos
                        y de impacto ambiental,  que atiendan las &aacute;reas de oportunidad del sector empresarial
                        a través de la aplicaci&oacute;n novedosa del conocimiento, contribuyendo así a la consolidaci&oacute;n
                        de una sociedad competitiva.</p>
                    <br/>
                    <li style="list-style-type: square; padding-left: 20px;">Hemos gestionado desde el 2009 a la fecha 146 proyectos:,</li>
                    <br/><br/>
                    <p><strong>Tipo de empresas:</strong> </p>
                    {{ HTML::image('images/mercado-empresas.png', null, []) }}

                </div>
                <div class="col-sm-12 col-md-7 horizontal_teaser_right">
                    <h3><strong>Estructura del Consorcio del Conocimiento</strong></h3><br/>
                    {{ HTML::image('images/consejo-estructura.png') }}
                    <br/><br/>
                    <p align="justify">Contamos con un Consejo Consultivo Empresarial conformado por
                        empresarios líderes en los sectores económicos de la regi&oacute;n,  y un Consejo
                        T&eacute;cnico formado por destacados especialistas de Instituciones de Educaci&oacute;n
                        Superior y Centros de Investigaci&oacute;n, quienes colaboran con el Consorcio en
                        la vinculación tecnol&oacute;gica y el an&aacute;lisis de la viabilidad de proyectos .</p>
                    <p align="justify">El Consorcio del Conocimiento cuenta con un equipo de personas
                        verdaderamente comprometidas en apoyar a la competitividad de las empresas a
                        través de la gesti&oacute;n de recursos para sus proyectos innovadores, productivos
                        o de un impacto ambiental. El equipo est&aacute; conformado por  expertos en la
                        coordinación y formulaci&oacute;n de proyectos entre las empresas e Instituciones
                        de Educación Superior y/o Centros de Investigaci&oacute;n (si en el proyecto fuese
                        necesaria dicha vinculaci&oacute;n).</p>
                    <p align="justify">Tambi&eacute;n cuenta con personal calificado para el seguimiento de
                        los proyectos,  y realizaci&oacute;n de tr&aacute;mites necesarios para que las empresas
                        puedan concursar en los fondos que mejor apliquen a su propuesta.</p>

                </div>
            </div>
        </div>
    </section>
    <section class="parallax call_to_action" style="background-image:url({{url('images/parallax.jpg')}})">
        <div class="overlay">
            {{ HTML::image('images/rocket_trans.png') }}
            <h3>Impulsamos el desarrollo <strong>sustentable</strong></h3>
            <h4>Damos respuesta a la continua b&uacute;squeda de mejora de las organizaciones a trav&eacute;s de la innovaci&oacute;n tecnol&oacute;gica.</h4>
        </div>
    </section>
    <div class="clients_section wow fadeInUp">
        <div class="container">
            <h2 class="section_header elegant centered">Fondos y convocatorias con las que el Consorcio trabaja</h2>
            <div>
                <ul style="font-size: medium; line-height: 40px;" class="rss">
                    <li>Programa de Est&iacute;mulos a la innovaci&oacute;n (PEI)</li>
                    <li>Convocatoria Conjunta CDTI-CONACYT</li>
                    <li>Fondo de Innovaci&oacute;n Tecnol&oacute;gica del Estado de Guanajuato (FINNOVATEG).</li>
                </ul>
                <br/>
                <h3>Fondos Sectoriales:</h3>
                <ul style="font-size: medium; line-height: 40px;" class="rss">
                    <li>Fondo de Innovación Tecnol&oacute;gica (FIT), Secretaria de Economía y Conacyt.</li>
                    <li>Fondo Sectorial de Innovaci&oacute;n (FINNOVA),  Secretaria de Economía y Conacyt.</li>
                        <li style="margin-left: 30px; list-style-type: circle;">Convocatoria de Bonos para la transferencia y comercialización del conocimiento.</li>
                        <li style="margin-left: 30px; list-style-type: circle;">Convocatoria de bonos para la innovación a través de las Oficinas de Transferencia de Conocimiento.</li>
                    <li>Fondo Sectorial  Sener – Conacyt /Sustentabilidad Energ&eacute;tica.</li>
                    <li>Fomento a las iniciativas a la innovaci&oacute;n del Instituto Nacional del Emprendedor (INADEM).</li>
                    <li>Desarrollo de proveedores (INADEM).</li>
                    <li>Escalamiento productivo (INADEM).</li>
                    <li>Desarrollo y Fortalecimiento de oferta exportable (INADEM).</li>
                    <li>Programa de Apoyo para la mejora Tecnol&oacute;gica de la Industria de la Alta Tecnolog&iacute;a (PROIAT).</li>
                </ul>
            </div>
        </div>
    </div>
    </section>
@stop