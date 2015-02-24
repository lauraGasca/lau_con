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
                    <p>Conócenos más.....// El consorcio comienza...</p>
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
                    <h3>Nosotros</h3>
                    <p>Somos una Asociación Civil, con la clara misión de propiciar una cultura de Innovación
                    entre las Empresas y Centros de Investigación e Instituciones de Educación Superior, a
                    través de la Formulación de proyectos de <strong>Innovación y Desarrollo Tecnológico,
                    Productivos y de Impacto Ambiental</strong></p>

                    <p>Se crea a mediados del 2009 como una iniciativa del <strong>CONCYTEG</strong> y del
                    <strong>Consejo Coordinador Empresarial de Celaya</strong>; con la misión clara de propiciar una cultura de
                    innovación en nuestra sociedad, teniendo como herramienta fundamental la <strong>vinculación</strong>
                    entre las empresas y los Centros de investigación e Instituciones de Educación Superior
                    del Estado, como una plataforma para la elaboración de proyectos de innovación y
                    desarrollo que atiendan las áreas de oportunidad a través de la aplicación novedosa del
                    conocimiento, contribuyendo así a la consolidación de una sociedad competitiva.</p>
                    <br/>
                    <li style="list-style-type: square; padding-left: 20px;">Hemos gestionado desde el 2009 a la fecha 146 proyectos:,</li>
                    <br/><br/>
                    <p><strong>Tipo de empresas:</strong> </p>
                    {{ HTML::image('images/mercado-empresas.png') }}
                    <br/><br/>
                    <p><strong>Sectores</strong> </p>
                    <br/>
                    <p><strong>Tipos de proyectos</strong> </p>
                    <li>90% de Desarrollo Tecnológico e Innovación</li>
                    <li>6% Productivos</li>
                    <li>4% de Impacto Ambiental</li>
                </div>
                <div class="col-sm-12 col-md-8 horizontal_teaser_right">
                    <h3><strong>Estructura del Consorcio del Conocimiento</strong></h3><br/>
                    {{ HTML::image('images/consejo-estructura.png') }}
                    <br/><br/>
                    <p>En estructura operativa se encuentra:</p>
                    <br/>
                    <p><strong>Operaci&oacute;n</strong></p>
                    <p>Contamos con un Consejo Directivo Empresarial conformado
                    empresarios en la región líderes en los sectores económicos
                    y Consejo Técnico conformado por Investigadores
                    Conformado por destacados especialistas de Centros de Investigación e
                    Instituciones de Educación Superior, quienes apoyan en la
                    gestión tecnológica, determinan la estrategia adecuada de vinculación, apoyan con
                    la elaboración de la propuesta a someter en algún fondo para gestionar los
                    apoyos en innovación y desarrollo para las empresas.</p>

                </div>
            </div>
        </div>
    </section>
    <section class="parallax call_to_action" style="background-image:url({{url('images/parallax.jpg')}})">
        <div class="overlay">
            {{ HTML::image('images/rocket_trans.png') }}
            <h3>Impulsamos el desarrollo <strong>sustentable</strong></h3>
            <h4>Damos respuesta a la continua b&uacute;squeda de mejora de las organizaciones a trav&eacute;s de la innovaci&oacute;n tecnol&oacute;gica.<h4>
        </div>
    </section>
    <div class="clients_section wow fadeInUp">
        <div class="container">
            <h2 class="section_header elegant centered">Historia</h2>
            <div>
                <h3>Fondos con los cuales se han trabajado:</h3>
                <ul style="font-size: medium;" class="rss">
                    <li>Fondos Mixtos Guanajuato.</li>
                    <li>Fondos de Innovación Tecnológica (Conacyt-Secretaría de Economía)</li>
                    <li>Programa de Estímulos a la innovación (PEI)</li>
                    <li>Convocatoria Conjunta CDTI-CONACYT</li>
                    <li>Fondo Sectorial de Economía (FINNOVA, Pilares a la Innovación)</li>
                    <li>ProMéxico</li>
                    <li>Fondo sectorial de Energía Sener-Conacyt (Energía y sustentabilidad energética).</li>
                    <li>Instituto Nacional del Emprendedor (INADEM), Desarrollo de Proveedores.</li>
                </ul>
            </div>
        </div>
    </div>
    </section>
@stop