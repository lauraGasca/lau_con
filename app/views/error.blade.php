@extends('layouts.sistema')

@section('contenido')
    <div class="mail-apps-wrap">
        <div class="the-box bg-danger no-border no-margin heading">
            <div class="row">
                <div class="col-sm-6">
                    <h1><i class="fa fa-warning icon-lg icon-circle icon-bordered"></i> Reportar Error</h1>
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
                        {{ Form::open(array('url'=>'sistema/error', 'method' => 'post', 'enctype'=>'multipart/form-data') )}}
                            <div class="form-group">
                                <label>Descripci&oacute;n del Error</label>
                                {{ Form::textarea('descripcion', null, ['class'=>"form-control no-resize", 'placeholder'=>'Descripci&oacute;n del error', 'style'=>"height: 120px;"]) }}
                                <span class="message-error">{{$errors->first('descripcion')}}</span>
                            </div>
                            <div class="form-group">
                                <label>Imagen del Error</label>
                                <div class="input-group">
                                    {{Form::text('texto', null, ['class'=>"form-control", 'readonly'])}}
                                    <span class="input-group-btn">
                                        <span class="btn btn-primary btn-file">
                                            <i class="fa fa-plus"></i>{{Form::file('foto')}}
                                        </span>
                                    </span>
                                </div>
                                <span class="message-error">{{$errors->first('foto')}}</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Enviar</button>
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