@section('contacto')
      class="active"
@stop
@section('encabezado')
    <div class="full_page_photo">
          <div id="map"></div>
          <div class="container">
               <div class="hgroup">
                    <div class="hgroup_title animated bounceInUp ">
                         <div class="container">
                              <h1>Contacto</h1>
                         </div>
                    </div>
                    <div class="hgroup_subtitle animated bounceInUp skincolored">
                         <div class="container">
                              <p>Comunícate con nosotros, nos encantaría responder tus dudas</p>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@stop
@section('contenido')
    @if(Session::get('confirm'))
        <script>alert('ok')</script>
    @endif
    @if(count($errors)>0)
        <script>alert('error')</script>
    @endif
    <div class="container triangles-of-section">
        <div class="triangle-up-left"></div>
        <div class="square-left"></div>
        <div class="triangle-up-right"></div>
        <div class="square-right"></div>
   </div>
   <div class="container">
        <section>
             <div class="row">
                  <div class="office_address col-sm-6 col-md-4">
                       <div class="team_member">
                              {{ HTML::image('/images/consorcio.png','Logo') }}<br/><br/><br/>
                              <address>
                                  Sinaloa Poniente 119 C<br/>
                                  Colonia Alameda<br/>
                                  Entre Benito Ju&aacute;rez y &Aacute;lvaro Obreg&oacute;n
                              </address>
                       </div>
                  </div>
                  <div class="contact_form col-sm-6 col-md-8">
                        {{ Form::open(array('url' => 'contacto', 'method' => 'post', 'id'=>'contact_form'))}}
                              <div class="row">
                                   <div class="col-sm-6 col-md-6">
                                        <label>Nombre</label>
                                        {{Form::text('name', '',array('class'=>'form-control', 'placeholder'=>'Nombre Completo'))}}
                                        <span class="message-error">{{$errors->first('name')}}</span>
                                   </div>
                                   <div class="col-sm-6 col-md-6">
                                        <label>Correo Electronico</label>
                                        {{Form::email('email', '', array('class'=>'form-control', 'placeholder'=>'ejemplo@dominio.com'))}}
                                        <span class="message-error">{{$errors->first('email')}}</span>
                                   </div>
                              </div>
                              <!--<div class="row">
                                    <div class="col-sm-12 col-md-12">
                                         <label>Sector</label>
                                         {{Form::select('sector', array(null=>'Selecciona', '1' => 'Empresa1', '2' => 'Empresa2', '3' => 'Empresa3', '4' => 'Empresa4', '5' => 'Otro...'), null,array('class'=>'form-control', 'onchange'=>'otro();','id'=>'sector'))}}
                                         <span class="message-error">{{$errors->first('sector')}}</span>
                                    </div>
                              </div>
                              @if($errors->first('otrosector')!='')
                                    <div class="row" id="otro">
                              @else
                                    <div class="row" id="otro" hidden>
                              @endif
                                    <div class="col-sm-12 col-md-12">
                                         {{Form::text('otrosector', '',array('class'=>'form-control','placeholder'=>'Escriba sector al que pertenece','id'=>'otro_input'))}}
                                         <span class="message-error">{{$errors->first('otrosector')}}</span>
                                    </div>
                              </div>-->
                              <div class="row">
                                   <div class="col-sm-12 col-md-12">
                                        <label>Asunto</label>
                                        {{Form::text('asunto', '',array('class'=>'form-control', 'placeholder'=>'Asunto del Mensaje'))}}
                                        <span class="message-error">{{$errors->first('asunto')}}</span>
                                   </div>
                              </div>
                              <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                          <label>Mensaje</label>
                                          {{Form::textarea('mensaje', '',array('class'=>'form-control', 'placeholder'=>'¿En que podemos ayudarle?'))}}
                                          <span class="message-error">{{$errors->first('mensaje')}}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-12"><br/>
                                          {{Form::submit('Enviar Mensaje',array('class'=>"btn btn-primary"))}}
                                          <span id="notice" class="alert alert-warning alert-dismissable hidden" style="margin-left:20px;"></span>
                                    </div>
                              </div>
                       {{ Form::close() }}
                  </div>
             </div>
        </section>
   </div>
    <script>
        function otro(){
            $( "#otro_input" ).val('');
            if ($( "#sector" ).val()==5)
                $( "#otro" ).show();
            else
                $( "#otro" ).hide();
        }
    </script>
@stop