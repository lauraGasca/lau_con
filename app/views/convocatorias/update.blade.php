@section('css')
    @parent
    {{ HTML::script('sentir/js/ckeditor/ckeditor.js') }}
@stop

@section('contenido')
    <div class="mail-apps-wrap">
        <div class="the-box bg-success no-border no-margin heading">
            <div class="row">
                <div class="col-sm-6">
                    <h1><i class="fa fa-pencil icon-lg icon-circle icon-bordered"></i> Editar Convocatoria</h1>
                </div>
            </div>
        </div><br/>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    @if(count($errors)>0)
                        <div class="alert alert-danger alert-block fade in alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <strong>¡Por favor!</strong> Revise los datos del formulario.
                        </div>
                    @endif
                    @if(Session::get('confirm'))
                        <div class="alert alert-success alert-bold-border square fade in alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{Session::get('confirm')}}
                        </div>
                    @endif
                    <div class="the-box">
                        {{ Form::model($convocatoria, ['url'=>'convocatoria/update', 'method' => 'post', 'enctype'=>'multipart/form-data'])}}
                            {{Form::hidden('id')}}
                            <div class="form-group">
                                <label>Nombre de la Convocatoria</label>
                                {{Form::text('nombre', null, ['placeholder'=>'Nombre de la Convocatoria', 'class'=>"form-control input"])}}
                                <span class="message-error">{{$errors->first('nombre')}}</span>
                            </div>
                            <div class="form-group">
                                <label>A quien va dirigido</label>
                                {{ Form::textarea('dirigido', null, ['class'=>"form-control no-resize", 'style'=>"height: 120px;"]) }}
                                <script type="text/javascript">
                                    CKEDITOR.replace( 'dirigido',
                                            {
                                                toolbar : 'Incuba'
                                            });
                                </script>
                                <span class="message-error">{{$errors->first('descripcion')}}</span>
                            </div>
                            <div class="form-group">
                                <label>Objetivo de la convocatoria</label>
                                {{ Form::textarea('objetivo', null, ['class'=>"form-control no-resize", 'style'=>"height: 120px;"]) }}
                                <script type="text/javascript">
                                    CKEDITOR.replace( 'objetivo',
                                            {
                                                toolbar : 'Incuba'
                                            });
                                </script>
                                <span class="message-error">{{$errors->first('descripcion')}}</span>
                            </div>
                            <div class="form-group">
                                <label>Estatus</label>
                                {{Form::select('estatus',
                                    [null =>'Selecciona', 1=>'Activo', 0=>'Inactivo'],
                                    null, ['class'=>"form-control", 'tabindex'=>"2"])}}
                                <span class="message-error">{{$errors->first('estatus')}}</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a class="btn btn-danger" href="{{url('convocatoria')}}">Cancelar</a>
                            </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
        <footer>
            &copy; 2015 <a href="{{url('/')}}" style="color: #666666;">Consorcio del Conocimiento A.C</a>
        </footer>
    </div>
@stop