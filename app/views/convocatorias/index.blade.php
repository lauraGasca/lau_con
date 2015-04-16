@section('contenido')
    <div class="mail-apps-wrap">
        <div class="the-box bg-success no-border no-margin heading">
            <div class="row">
                <div class="col-sm-6">
                    <h1><i class="fa fa-pencil-square icon-lg icon-circle icon-bordered"></i> Convocatorias</h1>
                </div>
            </div>
        </div><br/>
        <div class="container-fluid">
            <div class="the-box no-border">
                <div class="btn-toolbar top-table" role="toolbar">
                    <div class="btn-group">
                        <a href="{{url('convocatoria/crear')}}" class="btn btn-danger"><i class="fa fa-plus"></i> Agregar Convocatoria</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-th-block table-hover">
                        <thead>
                            <tr>
                                <th style="width: 70%;">Nombre</th>
                                <th style="width: 10%; text-align: center;">Archivos</th>
                                <th style="width: 10%; text-align: center;">Estatus</th>
                                <th style="width: 10%;" colspan="4"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($convocatorias as $convocatoria)
                            <tr>
                                <td>
                                    {{$convocatoria->nombre}}
                                </td>
                                <td style="text-align: center;">
                                    {{count($convocatoria->archivos)}}
                                </td>
                                @if($convocatoria->estatus==1)
                                    <td style="color: green; text-align: center;">
                                        <i class="fa fa-check"></i> Activo
                                    </td>
                                @else
                                    <td style="color: red; text-align: center;">
                                        <i class="fa fa-times"></i> Inactivo
                                    </td>
                                @endif
                                <td>
                                    @if($convocatoria->archivo<>'')
                                        <a href="{{url('images/convocatorias/'.$convocatoria->archivo)}}" target="_blank" style="color: #666666;">
                                            <i class="fa fa-folder"></i>
                                        </a>
                                    @else
                                        &nbsp;
                                    @endif
                                </td>
                                <td>
                                    <a href="{{url('convocatoria/archivos/'.$convocatoria->id.'/'.$convocatoria->nombre)}}" style="color: #666666;">
                                        <i class="fa fa-archive"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('convocatoria/update/'.$convocatoria->id)}}" style="color: #666666;">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('convocatoria/delete/'.$convocatoria->id)}}" style="color: #666666;" onclick="return confirm('\u00BFSeguro que deseas eliminar?');" >
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$convocatorias->links();}}
                </div>
            </div>
        </div>
        <footer>
            &copy; 2015 <a href="{{url('/')}}" style="color: #666666;">Consorcio del Conocimiento A.C</a>
        </footer>
    </div>
@stop