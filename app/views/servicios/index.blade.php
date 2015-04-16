@section('contenido')
    <div class="mail-apps-wrap">
        <div class="the-box bg-success no-border no-margin heading">
            <div class="row">
                <div class="col-sm-6">
                    <h1><i class="fa fa-folder-o icon-lg icon-circle icon-bordered"></i> Servicios</h1>
                </div>
            </div>
        </div><br/>
        <div class="container-fluid">
            <div class="the-box full no-border">
                @if(Session::get('confirm'))
                    <div class="alert alert-success alert-bold-border square fade in alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{Session::get('confirm')}}
                    </div>
                @endif
                <br/>
                <div class="btn-group">
                    <a href="{{url('servicio/crear')}}" class="btn btn-danger"><i class="fa fa-plus"></i> Agregar Servicio</a>
                </div>
                <br/><br/>
                <div class="the-box no-border">
                    <div class="table-responsive">
                        <table class="table table-th-block table-hover">
                            <thead>
                            <tr>
                                <th style="width: 40%;">Nombre</th>
                                <th style="width: 55%;">Resumen</th>
                                <th style="width: 5%;" colspan="2"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($servicios as $servicio)
                                    <tr>
                                        <td>
                                            {{ HTML::image('images/servicios/'.$servicio->imagen, $servicio->nombre, ['class' => 'avatar']) }}
                                            {{$servicio->nombre}}
                                        </td>
                                        <td>{{$servicio->resumen}}</td>
                                        <td>
                                            <a href="{{url('servicio/update/'.$servicio->id)}}" style="color: #666666;">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{url('servicio/delete/'.$servicio->id)}}" style="color: #666666;" onclick="return confirm('\u00BFSeguro que deseas eliminar?');" >
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            &copy; 2015 <a href="{{url('/')}}" style="color: #666666;">Consorcio del Conocimiento A.C</a>
        </footer>
    </div>
@stop