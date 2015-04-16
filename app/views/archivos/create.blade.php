@section('css')
    @parent
    {{ HTML::script('sentir/js/ckeditor/ckeditor.js') }}
@stop

@section('contenido')
    <div class="mail-apps-wrap">
        <div class="the-box bg-success no-border no-margin heading">
            <div class="row">
                <div class="col-sm-12">
                    <h1><i class="fa fa-plus icon-lg icon-circle icon-bordered"></i> Agregar Archivo [{{$nombre}}]</h1>
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
                    <div class="the-box">
                        {{ Form::open(array('url'=>'convocatoria/crear-archivo', 'method' => 'post', 'enctype'=>'multipart/form-data') )}}
                            {{Form::hidden('convocatoria_id', $id)}}
                            {{Form::hidden('nombre', $nombre)}}
                            <div class="form-group">
                                <label>Nombre del Archivo</label>
                                {{Form::text('nombre', null, ['placeholder'=>'Nombre del Archivo', 'class'=>"form-control input"])}}
                                <span class="message-error">{{$errors->first('nombre')}}</span>
                            </div>
                            <div class="form-group">
                                <label>Archivo</label>
                                <div class="input-group">
                                    {{Form::text('texto', null, ['class'=>"form-control", 'readonly'])}}
                                    <span class="input-group-btn">
                                    <span class="btn btn-primary btn-file">
                                        <i class="fa fa-plus"></i>{{Form::file('url')}}
                                    </span>
                                </span>
                                </div>
                                <span class="message-error">{{$errors->first('url')}}</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a class="btn btn-danger" href="{{url('convocatoria/archivos/'.$id.'/'.$nombre)}}">Cancelar</a>
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