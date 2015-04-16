@section('contenido')
    <div class="mail-apps-wrap">
        <div class="the-box bg-success no-border no-margin heading">
            <div class="row">
                <div class="col-sm-12">
                    <h1><i class="fa fa-file-archive-o icon-lg icon-circle icon-bordered"></i> Archivos [{{$nombre}}]</h1>
                </div>
            </div>
        </div><br/>
        <div class="container-fluid">
            <div class="the-box no-border">
                <div class="btn-toolbar top-table" role="toolbar">
                    <div class="btn-group">
                        <a href="{{url('convocatoria')}}" class="btn btn btn-info"><i class="fa fa-mail-reply"></i> Regresar a Convocatorias</a>
                    </div>
                    <div class="btn-group">
                        <a href="{{url('convocatoria/crear-archivo/'.$id.'/'.$nombre)}}" class="btn btn-danger"><i class="fa fa-plus"></i> Agregar Archivo</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-th-block table-hover">
                        <thead>
                            <tr>
                                <th style="width: 80%;">Nombre</th>
                                <th style="width: 10%;" colspan="3"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($archivos as $archivo)
                            <tr>
                                <td>
                                    {{$archivo->nombre}}
                                </td>
                                <td>
                                    <a href="{{url('images/convocatorias/'.$archivo->url)}}" target="_blank" style="color: #666666;">
                                        <i class="fa fa-level-down"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('convocatoria/update-archivos/'.$archivo->id.'/'.$nombre)}}" style="color: #666666;">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('convocatoria/delete-archivos/'.$archivo->id.'/'.$nombre)}}" style="color: #666666;" onclick="return confirm('\u00BFSeguro que deseas eliminar?');" >
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$archivos->links();}}
                </div>
            </div>
        </div>
        <footer>
            &copy; 2015 <a href="{{url('/')}}" style="color: #666666;">Consorcio del Conocimiento A.C</a>
        </footer>
    </div>
@stop