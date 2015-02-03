@section('css')
      @parent
      <!-- Tabla CSS -->
      {{ HTML::style('/css/table.css') }}
@show

@section('convocatorias')
      class="active"
@stop

@section('encabezado')
      <div class="full_page_photo" style="background-image: url({{url('images/about_us.jpg')}});">
            <div class="container">
                  <div class="hgroup">
                        <div class="hgroup_title animated bounceInUp skincolored">
                              <div class="container">
                                   <h1>Convocatorias</h1>
                              </div>
                        </div>
                        <!--<div class="hgroup_subtitle animated bounceInUp ">
                              <div class="container">
                                   <p>This could be your <strong>News Section</strong> if you like it classic! </p>
                              </div>
                        </div>-->
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
      <section class="with_right_sidebar" >
            <div class="table-responsive" style="width: 90%; padding-left: 10%;">
                  <table class="table2 table-bordered " style="width: 100%;">
                      <thead>
                          <tr>
                              <th scope="col" abbr="Starter">Convocatoria</th>
                              <th scope="col" abbr="Starter">Descripci&oacute;n</th>
                              <th scope="col" abbr="Medium">Estatus</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>{{ HTML::link('convocatoria/1/pei', 'PEI',['target'=>"_blank"]) }}</td>
                              <td>Programa de Estímulos a la Innovación</td>
                              <td><span class="check"></span></td>
                          </tr>
                          <tr>
                              <td>{{ HTML::link('convocatoria/2/inadem-1-1', 'Inadem 1.1',['target'=>"_blank"]) }}</td>
                              <td>Instituto Nacional del Emprendedor. Convocatoria 1.1</td>
                              <td><span class="check"></span></td>
                          </tr>
                          <tr>
                              <td>{{ HTML::link('convocatoria/3/Finnovateg', 'Finnovateg',['target'=>"_blank"]) }}</td>
                              <td>Fondo de Innovación Tecnológica del Estado de Guanajuato</td>
                              <td><span class="check"></span></td>
                          </tr>
                          <tr>
                              <td>{{ HTML::link('convocatoria/4/finnova-ott', 'Finnova OTT',['target'=>"_blank"]) }}</td>
                              <td>Convocatoria de Bonos para la transferencia y comercialización del conocimiento</td>
                              <td><span class="check"></span></td>
                          </tr>
                          <tr>
                              <td>{{ HTML::link('convocatoria/5/cdti-conacyt', ' CDTI-Conacyt',['target'=>"_blank"]) }}</td>
                              <td>CONACYT-SENER-SUSTENTABILIDAD ENERGÉTICA-2013-05</td>
                              <td><span class="check"></span></td>
                          </tr>
                          <tr>
                              <td>{{ HTML::link('convocatoria/6/fit', 'FIT',['target'=>"_blank"]) }}</td>
                              <td>Fondo de Innovación Tecnológica</td>
                              <td><span class="check"></span></td>
                          </tr>
                          <tr>
                              <td>{{ HTML::link('convocatoria/7/sener', 'Sener',['target'=>"_blank"]) }}</td>
                              <td>CONACYT-SENER-SUSTENTABILIDAD ENERGÉTICA-2013-05 LABORATORIO DE INNOVACIÓN EN SUSTENTABILIDAD ENERGÉTICA</td>
                              <td><span class="check"></span></td>
                          </tr>
                          <tr>
                              <td>{{ HTML::link('convocatoria/8/prodiat', 'Prodiat',['target'=>"_blank"]) }}</td>
                              <td>PROGRAMA PARA EL DESARROLLO TECNOLÓGICO DE LA INDUSTRIA</td>
                              <td><span class="check"></span></td>
                          </tr>
                      </tbody>
                  </table>
            </div>
      </section>
@stop