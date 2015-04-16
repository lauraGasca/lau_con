@section('css')
    @parent
    {{ HTML::script('sentir/js/ckeditor/ckeditor.js') }}
@stop

@section('contenido')
    <div class="mail-apps-wrap">
        <div class="the-box bg-success no-border no-margin heading">
            <div class="row">
                <div class="col-sm-6">
                    <h1><i class="fa fa-pencil icon-lg icon-circle icon-bordered"></i> Editar Servicio</h1>
                </div>
            </div>
        </div><br/>
        <div class="the-box no-margin">
            @if(Session::get('confirm'))
                <div class="alert alert-success alert-bold-border square fade in alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{Session::get('confirm')}}
                </div>
            @endif
            @if(count($errors)>0)
                <div class="alert alert-danger alert-block fade in alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>¡Por favor!</strong> Revise los datos del formulario.
                </div>
            @endif
            {{ Form::model($servicio, array('url'=>'servicio/update', 'method' => 'post', 'enctype'=>'multipart/form-data') )}}
                {{Form::hidden('id')}}
                <div class="form-group">
                    <label>Nombre del Servicio</label>
                    {{Form::text('nombre', null, ['placeholder'=>'Nombre del Servicio', 'class'=>"form-control input"])}}
                    <span class="message-error">{{$errors->first('nombre')}}</span>
                </div>
                <div class="form-group">
                    <label>Resumen del Servicio</label>
                    {{ Form::textarea('resumen', null, ['class'=>"form-control no-resize", 'placeholder'=>'Resumen del Servicio', 'style'=>"height: 80px;"]) }}
                    <span class="message-error">{{$errors->first('resumen')}}</span>
                </div>
                <div class="form-group">
                    <label>Descripci&oacute;n del Servicio</label>
                    {{ Form::textarea('descripcion', null, ['class'=>"form-control no-resize", 'placeholder'=>'Descripci&oacute;n del Servicio', 'style'=>"height: 120px;"]) }}
                    <script type="text/javascript">
                        CKEDITOR.replace( 'descripcion',
                                {
                                    toolbar : 'Incuba'
                                });
                    </script>
                    <span class="message-error">{{$errors->first('descripcion')}}</span>
                </div>
                <div class="form-group">
                    <label>Imagen</label>
                    <div class="input-group">
                        {{Form::text('texto', null, ['class'=>"form-control", 'readonly'])}}
                        <span class="input-group-btn">
                                <span class="btn btn-primary btn-file">
                                    <i class="fa fa-plus"></i>{{Form::file('imagen')}}
                                </span>
                            </span>
                    </div>
                    <span class="message-error">{{$errors->first('imagen')}}</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a class="btn btn-danger" href="{{url('servicio')}}">Cancelar</a>
                </div>
            {{Form::close()}}
        </div>
        <footer>
            &copy; 2015 <a href="{{url('/')}}" style="color: #666666;">Consorcio del Conocimiento A.C</a>
        </footer>
    </div>
@stop